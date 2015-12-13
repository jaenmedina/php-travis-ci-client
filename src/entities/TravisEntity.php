<?php

namespace jaenmedina\PhpTravisCiClient\Entity;

class TravisEntity
{

    public function __construct($properties)
    {
        if($this->isJSON($properties)) {
            $this->propertiesJSON = $properties;
            $propertiesArray = json_decode($properties);
            foreach ($propertiesArray as $name => $value) {
                $this->$name = $value;
            }
        } else if($properties instanceof \stdClass) {
            foreach(get_object_vars($properties) as $name => $value) {
                $this->$name = $value;
            }
        }
    }

    private function isJSON($string){
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }

}