<?php

namespace spec\Tlab;

use Tlab\Exceptions\NotValidCategoryException;
use Tlab\Pixabay;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PixabaySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('api_key');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Pixabay::class);
    }

    function it_should_call_category_and_receive_same_object()
    {
        $result = $this->category('nature');

        $result->shouldHaveType(Pixabay::class);
    }

    function it_should_call_category_and_not_accept_invalid_input()
    {
        $this->shouldThrow(NotValidCategoryException::class)
            ->during('category', ['some random category that dont exist']);
    }
}
