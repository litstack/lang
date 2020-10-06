<?php

namespace Litstack\Lang;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class LangCheckCommand extends Command
{
    use Concerns\ManagesCompleteCheck;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lang:check {locale?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if langauges are complete.';

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

        $incomplete = false;
        $entries = [];
        $missing = [];
        foreach ($locales as $locale) {
            $missing[$locale] = $this->getMissing($locale);
            if (! empty($missing[$locale])) {
                $incomplete = true;
            }

            $entries[] = [
                'locale'  => $locale,
                'missing' => count($missing[$locale]),
                'keys'    => implode("\n", $missing[$locale]),
            ];
        }

        $this->table([
            'Locale', 'Number Of Missing Keys', 'Missing Keys',
        ], $entries);

        if ($incomplete) {
            $this->error('Incomplete.');
        } else {
            $this->info('Complete.');
        }

        return ! $incomplete;
    }
}
