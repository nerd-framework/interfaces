<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\RequestContract;

interface RouterContract
{
    /**
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
