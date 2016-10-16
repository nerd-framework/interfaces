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
     * @return $this
     */
    public function expectHeader($name);

    /**
     * @param string $name
     * @return $this
     */
    public function expectSetCookie($name);

    /**
     * @param string $contentType
     * @return $this
     */
    public function expectContentType($contentType);
}
