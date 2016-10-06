<?php

namespace Nerd\Framework\Http;

interface InputContract
{
    /**
     * Get HTTP Request Object
     *
     * @return RequestContract
     */
    public function getRequestObject();

    /**
     * Get HTTP Request Body as string
     *
     * @return string
     */
    public function getRequestBody();

    /**
     * Get HTTP Request Body Stream
     *
     * @return resource
     */
    public function getRequestBodyStream();
}
