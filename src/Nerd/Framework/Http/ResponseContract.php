<?php

namespace Nerd\Framework\Http;

interface ResponseContract
{
    /**
     * Prepare HTTP Response to send to client
     *
     * @param RequestContract $request
     * @return mixed
     */
    public function prepare(RequestContract $request);

    /**
     * Send HTTP Response to client
     *
     * @param OutputContract $output
     * @return mixed
     */
    public function render(OutputContract $output);
}
