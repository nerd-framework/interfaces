<?php

namespace Nerd\Framework\Http;

interface ResponseServiceContract
{
    /**
     * Add converter to ResponseService
     *
     * @param string $type
     * @param callable $converter
     * @return mixed
     */
    public function on($type, callable $converter);

    /**
     * Handle convert response to ResponseContract
     *
     * @param mixed $response
     * @return ResponseContract
     */
    public function convert($response);
}
