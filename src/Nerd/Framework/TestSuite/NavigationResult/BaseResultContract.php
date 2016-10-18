<?php

namespace Nerd\Framework\TestSuite\NavigationResult;

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
    public function expectSetHeader($name);

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
