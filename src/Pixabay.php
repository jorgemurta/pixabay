<?php

namespace Tlab;

use Tlab\Constants\Categories;
use Tlab\Exceptions\NotValidCategoryException;

class Pixabay
{
    protected $apiKey;

    /**
     * Pixabay constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    protected function validateCategory($name)
    {
        if(!Categories::exists($name)) {
            throw new NotValidCategoryException($name);
        }
    }

    public function category($name)
    {
        $this->validateCategory($name);

        return $this;
    }


}