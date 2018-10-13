<?php

namespace Silvanite\NovaFieldPlace;

use Laravel\Nova\Fields\Place;

class PlaceExtended extends Place
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-field-place';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->latitude('latitude')
             ->longitude('longitude');
    }

    /**
     * Specify the field that contains the latitude.
     *
     * @param  string  $field
     * @return $this
     */
    public function latitude($field)
    {
        return $this->withMeta([__FUNCTION__ => $field]);
    }

    /**
     * Specify the field that contains the longitude.
     *
     * @param  string  $field
     * @return $this
     */
    public function longitude($field)
    {
        return $this->withMeta([__FUNCTION__ => $field]);
    }
}
