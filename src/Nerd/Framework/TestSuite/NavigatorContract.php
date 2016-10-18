<?php

namespace Nerd\Framework\TestSuite;

use Nerd\Framework\Http\Request\RequestContract;

interface NavigatorContract
{
    /**
     * @param string $path
     * @return \Nerd\Framework\TestSuite\NavigatorResult\BaseResultContract
     */
    public function get($path);

    /**
     * @param string $path
     * @param string $data
     * @return \Nerd\Framework\TestSuite\NavigatorResult\BaseResultContract
     */
    public function post($path, $data);

    /**
     * @param string $path
     * @param string $data
     * @return \Nerd\Framework\TestSuite\NavigatorResult\BaseResultContract
     */
    public function put($path, $data);

    /**
     * @param string $path
     * @return \Nerd\Framework\TestSuite\NavigatorResult\BaseResultContract
     */
    public function delete($path);

    /**
     * @param RequestContract $request
     * @return \Nerd\Framework\TestSuite\NavigatorResult\BaseResultContract
     */
    public function handle(RequestContract $request);
}
