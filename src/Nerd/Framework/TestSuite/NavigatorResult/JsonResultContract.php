<?php

namespace Nerd\Framework\TestSuite\NavigatorResult;

interface JsonResultContract extends BaseResultContract
{
    /**
     * @param string $node
     * @return $this
     */
    public function containsNode($node);

    /**
     * @param mixed $expected
     * @param string $node
     * @return mixed
     */
    public function nodeEqualsTo($expected, $node);
}
