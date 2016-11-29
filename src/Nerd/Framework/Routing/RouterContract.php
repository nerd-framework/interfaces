<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;
use Nerd\Framework\Routing\Route\RouteContract;

interface RouterContract
{
    /**
     * Add route for GET method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function get(string $pattern, callable ...$action): RouteContract;

    /**
     * Add route for POST method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function post(string $pattern, callable ...$action): RouteContract;

    /**
     * Add route for PUT method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function put(string $pattern, callable ...$action): RouteContract;

    /**
     * Add route for DELETE method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function delete(string $pattern, callable ...$action): RouteContract;

    /**
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function any(string $pattern, callable ...$action): RouteContract;

    /**
     * Add route into routes list.
     *
     * @param array $methods
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouteContract
     */
    public function add(array $methods, string $pattern, callable ...$action): RouteContract;

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
