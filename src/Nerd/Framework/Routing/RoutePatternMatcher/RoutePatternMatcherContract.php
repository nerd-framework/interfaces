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
    public function matches(string $route): bool;

    public function parameters(string $route): array;
}
