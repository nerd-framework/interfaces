<?php

namespace Nerd\Framework\Http\IO;

use Nerd\Framework\Http\Request\RequestContract;

interface InputContract
{
    /**
     * Get HTTP Request Object
     *
     * @return RequestContract
     */
    public function getRequest();

    /**
     * Get HTTP Request Body as string
     *
     * @return string
     */
    public function getBody();

    /**
     * Get HTTP Request Body Stream
     *
     * @return resource
     */
    public function getStream();
}
