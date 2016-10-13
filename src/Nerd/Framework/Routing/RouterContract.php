<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;

interface RouterContract
{
    /**
     * Add route for GET method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function get($route, $action, $data = null);

    /**
     * Add route for POST method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function post($route, $action, $data = null);

    /**
     * Add route for PUT method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function put($route, $action, $data = null);

    /**
     * Add route for DELETE method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function delete($route, $action, $data = null);

    /**
     * @param string $route
     * @param callable $action
     * @param null $data
     * @return RouterContract
     */
    public function any($route, $action, $data = null);

    /**
     * Add middleware to router.
     *
     * @param $route
     * @param $middleware
     * @return RouterContract
     */
    public function middleware($route, $middleware);

    /**
     * Add route into routes list.
     *
     * @param string|array $methods
     * @param string $regexp
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function add($methods, $regexp, $action, $data = null);

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
