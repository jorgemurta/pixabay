<?php

namespace Tlab\Constants;

class Categories
{
    const FASHION = 'fashion';
    const NATURE = 'nature';
    const BACKGROUNDS = 'backgrounds';

    /**
     * Return all the constants in this class
     *
     * @return array
     */
    static function all()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }

    /**
     * Checks if a value exists in this class constants
     *
     * @param $value
     *
     * @return bool
     */
    static function exists($value)
    {
        $categories = static::all();

        return in_array($value, $categories);
    }
}