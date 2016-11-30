<?php

namespace Nerd\Framework;

interface ApplicationContract extends Container\ContainerContract
{
    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function config($key, $default = null);
}
