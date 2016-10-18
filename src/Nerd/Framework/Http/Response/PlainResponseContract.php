<?php

namespace Nerd\Framework\Http\Response;

interface PlainResponseContract extends BaseResponseContract
{
    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return void
     */
    public function write($content);
}
