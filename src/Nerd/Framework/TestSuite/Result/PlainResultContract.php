<?php

namespace Nerd\Framework\TestSuite\Result;

interface PlainResultContract extends BaseResultContract
{
    public function contains($text);

    public function equalsTo($text);

    public function notEmpty();
}
