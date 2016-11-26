<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;

interface RouterContract
{
    /**
     * Add route for GET method into routes list.
     *
     * @param string $pattern
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function get(string $pattern, callable $action, $data = null);

    /**
     * Add route for POST method into routes list.
     *
     * @param string $pattern
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function post(string $pattern, callable $action, $data = null);

    /**
     * Add route for PUT method into routes list.
     *
     * @param string $pattern
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function put(string $pattern, callable $action, $data = null);

    /**
     * Add route for DELETE method into routes list.
     *
     * @param string $pattern
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function delete(string $pattern, callable $action, $data = null);

    /**
     * @param string $pattern
     * @param callable $action
     * @param null $data
     * @return RouterContract
     */
    public function any(string $pattern, callable $action, $data = null);

    /**
     * Add middleware to router.
     *
     * @param string $pattern
     * @param callable $middleware
     * @return RouterContract
     */
    public function middleware(string $pattern, callable $middleware);

    /**
     * Add route into routes list.
     *
     * @param array $methods
     * @param string $pattern
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function add(array $methods, string $pattern, callable $action, $data = null);

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
