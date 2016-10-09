<?php

namespace Nerd\Framework\Services;

interface ServiceProviderContract
{
    public function register();

    public static function provides();
}
