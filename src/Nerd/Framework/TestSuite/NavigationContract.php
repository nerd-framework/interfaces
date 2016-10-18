<?php

namespace Nerd\Framework\TestSuite;

use Nerd\Framework\Http\Request\RequestContract;

interface NavigationContract
{
    /**
     * @param string $path
     * @return NavigationResult\BaseResultContract
     */
    public function get($path);

    /**
     * @param string $path
     * @param string $data
     * @return NavigationResult\BaseResultContract
     */
    public function post($path, $data);

    /**
     * @param string $path
     * @param string $data
     * @return NavigationResult\BaseResultContract
     */
    public function put($path, $data);

    /**
     * @param string $path
     * @return NavigationResult\BaseResultContract
     */
    public function delete($path);

    /**
     * @param RequestContract $request
     * @return NavigationResult\BaseResultContract
     */
    public function handle(RequestContract $request);
}
