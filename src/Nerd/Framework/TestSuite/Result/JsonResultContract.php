<?php

namespace Nerd\Framework\TestSuite\Result;

interface JsonResultContract extends BaseResultContract
{
    /**
     * @param string $path
     * @return $this
     */
    public function containsNode($path);

    /**
     * @param mixed $expected
     * @param string $path
     * @return mixed
     */
    public function nodeEqualsTo($expected, $path);
}
