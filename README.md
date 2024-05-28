# Blade Evaicons

<a href="https://github.com/hasnayeen/blade-eva-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/hasnayeen/blade-eva-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://github.com/hasnayeen/blade-eva-icons/actions?query=workflow%3A%22Code+Style%22">
    <img src="https://github.com/hasnayeen/blade-eva-icons/workflows/Code%20Style/badge.svg" alt="Code Style">
</a>
<a href="https://packagist.org/packages/hasnayeen/blade-eva-icons">
    <img src="https://poser.pugx.org/hasnayeen/blade-eva-icons/v" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/hasnayeen/blade-eva-icons">
    <img src="https://poser.pugx.org/hasnayeen/blade-eva-icons/d/total.svg" alt="Total Downloads">
</a>

A package to easily make use of [Evaicons](https://akveo.github.io/eva-icons/#/) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [akveo.github.io/eva-icons](https://akveo.github.io/eva-icons/#/). Evaicons are originally developed by [Akveo team](https://hubs.ly/H0n79yM0).

## Requirements

- PHP 8.1 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require hasnayeen/blade-eva-icons
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-eva-alert-circle/>
```

You can also pass classes to your icon components:

```blade
<x-eva-alert-circle class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-eva-alert-circle style="color: #555"/>
```

The outline icons can be referenced like this:

```blade
<x-eva-alert-circle-outline/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-eva-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-eva-icons/alert-circle.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Evaicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Evaicons is developed and maintained by [Nehal Hasnayeen](https://hasnayeen.dev).

## License

Blade Evaicons is open-sourced software licensed under [the MIT license](LICENSE.md).
