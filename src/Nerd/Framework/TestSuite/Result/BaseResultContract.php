<?php

namespace Nerd\Framework\TestSuite\Result;

interface BaseResultContract
{
    /**
     * @param int $statusCode
     * @return $this
     */
    public function expectStatusCode($statusCode);

    /**
     * @param string $name
     * @return mixed
     */
    public function expectHeader($name);

    /**
     * @param string $name
     * @return mixed
     */
    public function expectSetCookie($name);
}
