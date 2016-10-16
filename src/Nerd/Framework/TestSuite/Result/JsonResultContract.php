<?php

namespace Nerd\Framework\TestSuite\Result;

interface JsonResultContract extends BaseResultContract
{
    public function containsNode($node);

    public function nodeEqualsTo($expected, $node);
}
