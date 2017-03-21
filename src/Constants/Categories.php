<?php

namespace Tlab\Constants;

class Categories
{
    const FASHION = 'fashion';
    const NATURE = 'nature';
    const BACKGROUNDS = 'backgrounds';
    const SCIENCE = 'science';
    const EDUCATION = 'education';
    const PEOPLE = 'people';
    const FEELINGS = 'feelings';
    const RELIGION = 'religion';
    const HEALTH = 'health';
    const PLACES = 'places';
    const ANIMALS = 'animals';
    const INDUSTRY = 'industry';
    const FOOD = 'food';
    const COMPUTER = 'computer';
    const SPORTS = 'sports';
    const TRANSPORTATION = 'transportation';
    const TRAVEL = 'travel';
    const BUILDINGS = 'buildings';
    const BUSINESS = 'business';
    const MUSIC = 'music';

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