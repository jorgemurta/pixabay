<?php

namespace spec\Tlab;

use Tlab\Pixabay;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PixabaySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Pixabay::class);
    }
}
