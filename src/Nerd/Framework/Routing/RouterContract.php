<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;

interface RouterContract
{
    /**
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
