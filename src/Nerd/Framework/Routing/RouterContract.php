<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;

interface RouterContract
{
    /**
     * Add route for GET method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function get(string $pattern, callable ...$action);

    /**
     * Add route for POST method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function post(string $pattern, callable ...$action);

    /**
     * Add route for PUT method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function put(string $pattern, callable ...$action);

    /**
     * Add route for DELETE method into routes list.
     *
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function delete(string $pattern, callable ...$action);

    /**
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function any(string $pattern, callable ...$action);

    /**
     * Add route into routes list.
     *
     * @param array $methods
     * @param string $pattern
     * @param callable[] ...$action
     * @return RouterContract
     */
    public function add(array $methods, string $pattern, callable ...$action);

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
