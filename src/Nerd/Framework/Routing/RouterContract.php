<?php

namespace Nerd\Framework\Routing;

use Nerd\Framework\Http\Request\RequestContract;

use Nerd\Framework\Routing\RoutePatternMatcher\RoutePatternMatcherContract as Matcher;

interface RouterContract
{
    /**
     * Add route for GET method into routes list.
     *
     * @param Matcher $matcher
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function get(Matcher $matcher, callable $action, $data = null);

    /**
     * Add route for POST method into routes list.
     *
     * @param Matcher $matcher
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function post(Matcher $matcher, callable $action, $data = null);

    /**
     * Add route for PUT method into routes list.
     *
     * @param Matcher $matcher
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function put(Matcher $matcher, callable $action, $data = null);

    /**
     * Add route for DELETE method into routes list.
     *
     * @param Matcher $matcher
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function delete(Matcher $matcher, callable $action, $data = null);

    /**
     * @param Matcher $matcher
     * @param callable $action
     * @param null $data
     * @return RouterContract
     */
    public function any(Matcher $matcher, callable $action, $data = null);

    /**
     * Add middleware to router.
     *
     * @param Matcher $matcher
     * @param callable $middleware
     * @return RouterContract
     */
    public function middleware(Matcher $matcher, callable $middleware);

    /**
     * Add route into routes list.
     *
     * @param array $methods
     * @param Matcher $matcher
     * @param callable $action
     * @param mixed $data
     * @return RouterContract
     */
    public function add(array $methods, Matcher $matcher, callable $action, $data = null);

    /**
     * Pass request through router.
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function handle(RequestContract $request);
}
