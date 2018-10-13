# Laravel Nova Place Field (Extended)

An extended variant of the standard Nova Place Field to offer access to latitude and longitude coordinates

## Installation

Install the tool through composer

```sh
composer require silvanite/nova-field-place
```

## Usage

Please refer to the [Nova documentation](https://nova.laravel.com/docs/1.0/resources/fields.html#place-field). This package simply adds the latitude and longitude options.

Use the `Silvanite\NovaFieldPlace\PlaceExtended` field instead of the standard `Laravel\Nova\Fields\Place`.

```php
PlaceExtended::make('Address', 'address_line_1')
    ->secondAddressLine('address_2')
    ->city('city_name')
    ->state('state_code')
    ->postalCode('zip_code')
    ->latitude('latitude')
    ->longitude('longitude')
    ->country('country_code')
```

## Support

If you require any support please contact me on [Twitter](https://twitter.com/m2de_io) or open an issue on this repository.
