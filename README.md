<p align="center">
    <img width="350px" style="max-width:100%;" src="https://raw.githubusercontent.com/litstack/art/master/logo/png/litstack_logo.png">
</p>

# Litstack Translations

This repository contains the lang files for the [litstack](https://litstack.io)
framework. The translations are located in the `src` folder.

## Languages

<div class="languages-start"></div>

| Code | Assignee                                 | Complete                                                        |
| ---- | ---------------------------------------- | --------------------------------------------------------------- |
| de   | [@litstack](https://github.com/litstack) | <img src="https://img.shields.io/badge/-complete-%239ff2ae"> |
| en   | [@litstack](https://github.com/litstack) | <img src="https://img.shields.io/badge/-complete-%239ff2ae"> |

<div class="languages-end"></div>

## Contribution

To add new languages to the repository the project can be cloned from your fork.
Then install the dependencies via composer:

```shell
composer install
```

After that you can use the artisan command `lang:check` to check if the language
you want to add is complete.

```php
php artisan lang:check de
```
