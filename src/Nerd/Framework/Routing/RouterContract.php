<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\RequestContract;
use Nerd\Framework\Http\ResponseContract;

interface RouterContract
{
    /**
     * @param RequestContract $request
     * @return ResponseContract
     */
    public function handle(RequestContract $request);
}
