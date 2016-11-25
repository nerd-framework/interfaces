<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 11/25/16
 * Time: 5:35 PM
 */

namespace Nerd\Framework\Routing\RoutePatternMatcher;

interface RoutePatternMatcherContract
{
    /**
     * @param string $route
     * @return bool
     */
    public function matches(string $route): bool;

    /**
     * @param string $route
     * @return array|null
     */
    public function parameters(string $route);
}
