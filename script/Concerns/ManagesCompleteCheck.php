<?php

namespace Litstack\Lang\Concerns;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

trait ManagesCompleteCheck
{
    /**
     * Get missing keys for the given locale.
     *
     * @param  string $locale
     * @return array
     */
    protected function getMissing($locale)
    {
        $keys = $this->getTranslationKeys($locale);

        $missing = [];
        foreach ($this->benchmark as $key => $value) {
            if (array_key_exists($key, $keys)) {
                continue;
            }

            $missing[] = $key;
        }

        return $missing;
    }

    /**
     * Get translation keys.
     *
     * @param  string $locale
     * @return array
     */
    protected function getTranslationKeys($locale)
    {
        $keys = [];
        foreach ($this->files->files(__DIR__.'/../../src/'.$locale) as $file) {
            if ($file->getExtension() != 'php') {
                continue;
            }

            $lang = require $file;

            $keys = array_merge($keys, [
                str_replace('.php', '', basename($file)) => $lang,
            ]);
        }

        return Arr::dot($keys);
    }

    /**
     * Get locales that should be checked.
     *
     * @return Collection
     */
    protected function getLocalesToCheck(): Collection
    {
        if ($locale = $this->argument('locale')) {
            return collect([$locale]);
        }

        return collect($this->files->directories(__DIR__.'/../../src'))
            ->map(function ($path) {
                return basename($path);
            });
    }
}
