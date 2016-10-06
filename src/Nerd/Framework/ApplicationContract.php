<?php

namespace Nerd\Framework;

use Nerd\Framework\Http\RequestContract;
use Nerd\Framework\Http\ResponseContract;

interface ApplicationContract
{
    /**
     * Handle HTTP Request by Application and return HTTP Response
     *
     * @param RequestContract $request
     * @return ResponseContract
     */
    public function handle(RequestContract $request);
}
