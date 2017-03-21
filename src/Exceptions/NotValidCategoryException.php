<?php

namespace Tlab\Exceptions;

use Exception;

class NotValidCategoryException extends \Exception
{
    public function __construct($category)
    {
        parent::__construct("The category {$category} is not valid on the Pixabay API");
    }

}