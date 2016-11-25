<?php

namespace Nerd\Framework\Services;

interface ServiceProviderContract
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot();

    /**
     * Register service provider.
     *
     * @return void
     */
    public function register();

    /**
     * List of services provided by this provider.
     *
     * @return mixed
     */
    public function provides();
}
