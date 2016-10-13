<?php

namespace Nerd\Framework\Http\Request;

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

    /**
     * Is HTTPS connection used.
     *
     * @return boolean
     */
    public function isSecure();

    /**
     * Get server parameter.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getServerParameter($key, $default = null);

    /**
     * Get query string parameter.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getQueryParameter($key, $default = null);

    /**
     * Get post parameter.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getPostParameter($key, $default = null);

    /**
     * Get cookie.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getCookie($key, $default = null);

    /**
     * Get user agent.
     *
     * @return mixed
     */
    public function getUserAgent();

    /**
     * Get remote address.
     *
     * @return mixed
     */
    public function getRemoteAddress();

    /**
     * Get local address.
     *
     * @return mixed
     */
    public function getServerAddress();
}
