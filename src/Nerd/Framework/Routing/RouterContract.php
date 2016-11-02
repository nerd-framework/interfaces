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
    public function get(string $route, callable $action, $data = null): self;

    /**
     * Add route for POST method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function post(string $route, callable $action, $data = null): self;

    /**
     * Add route for PUT method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function put(string $route, callable $action, $data = null): self;

    /**
     * Add route for DELETE method into routes list.
     *
     * @param string $route
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function delete(string $route, callable $action, $data = null): self;

    /**
     * @param string $route
     * @param callable $action
     * @param null $data
     * @return RouterContract
     */
    public function any(string $route, callable $action, $data = null): self;

    /**
     * Add middleware to router.
     *
     * @param string $route
     * @param callable $middleware
     * @return RouterContract
     */
    public function middleware(string $route, callable $middleware): self;

    /**
     * Add route into routes list.
     *
     * @param array $methods
     * @param string $regexp
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function add(array $methods, string $regexp, callable $action, $data = null): self;

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
