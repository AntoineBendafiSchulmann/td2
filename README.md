# IIM TD2

[![Last version](https://img.shields.io/packagist/v/AntoineBendafiSchulmann/td2?maxAge=3600)](https://packagist.org/packages/AntoineBendafiSchulmann/td2)

## Installation

```bash
composer require AntoineBendafiSchulmann/td2
```

## Local development

```bash
composer install
```

```bash
 php vendor/bin/phpstan analyse src --level=max
```

```bash
php vendor/bin/php-cs-fixer fix src --rules=@PSR12
```

```bash
php vendor/bin/phpunit tests
```