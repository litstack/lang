<?php

namespace Litstack\Lang;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class LangUpdateReadmeCommand extends Command
{
    use Concerns\ManagesCompleteCheck;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lang:update-readme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates README.md';

    /**
     * Filesystem instance.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Create new LangCheckCommand instance.
     *
     * @param  Filesystem $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->benchmark = $this->getTranslationKeys('en');
        $locales = $this->getLocalesToCheck();

        $table = Str::between(
            $content = $this->files->get(__DIR__.'/../README.md'),
            '<div class="languages-start"></div>',
            '<div class="languages-end"></div>',
        );

        $lines = explode("\n", ltrim($table));

        foreach ($lines as $row => $line) {
            $cols = explode('|', $line);
            if (count($cols) < 4) {
                continue;
            }
            $locale = trim($cols[1] ?? null);
            if (! realpath(__DIR__.'/../src/'.$locale)) {
                continue;
            }
            $missing = $this->getMissing($locale);
            if (! empty($missing)) {
                $shield = ' <img src="https://img.shields.io/badge/-'.count($missing).'%20missing-%23f67693"> ';
            } else {
                $shield = ' <img src="https://img.shields.io/badge/-complete-%239ff2ae"> ';
            }

            $cols[3] = $shield;

            $lines[$row] = implode('|', $cols);
        }

        $content = str_replace($table, "\n\n".implode("\n", $lines), $content);
        $this->files->put(__DIR__.'/../README.md', $content);
        $this->info('Updated README.md');
    }

    /**
     * Get locales that should be checked.
     *
     * @return Collection
     */
    protected function getLocalesToCheck(): Collection
    {
        return collect($this->files->directories(__DIR__.'/../src'))
            ->map(function ($path) {
                return basename($path);
            });
    }
}
