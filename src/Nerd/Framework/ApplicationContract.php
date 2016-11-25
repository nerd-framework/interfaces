<?php

namespace Nerd\Framework;

use Nerd\Framework\Http\Request\RequestContract;
use Nerd\Framework\Http\Response\ResponseContract;

interface ApplicationContract extends Container\ContainerContract
{
    /**
     * Handle HTTP Request by Application and return HTTP Response
     *
     * @param RequestContract $request
     * @return ResponseContract
     */
    public function handle(RequestContract $request);

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function config($key, $default = null);
}
