<?php

namespace Nerd\Framework\TestSuite\NavigationResult;

interface PlainResultContract extends BaseResultContract
{
    /**
     * @param string $text
     * @return $this
     */
    public function contains($text);

    /**
     * @param string $text
     * @return $this
     */
    public function equalsTo($text);

    /**
     * @return $this
     */
    public function notEmpty();
}
