<?php

namespace Nerd\Framework\Http;

interface RequestContract
{
    /**
     * Get HTTP Request method.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Test that $method equals to HTTP Request method.
     *
     * @param string $method
     * @return mixed
     */
    public function isMethod($method);

    /**
     * Get HTTP Request path.
     *
     * @return string
     */
    public function getPath();
}
