<?php

namespace Nerd\Framework\Http\IO;

use Nerd\Framework\Http\Response\CookieContract;

interface OutputContract
{
    /**
     * Send cookie to client
     *
     * @param CookieContract $cookie
     * @return mixed
     */
    public function sendCookie(CookieContract $cookie);

    /**
     * Send header to client
     *
     * @param $header
     * @return mixed
     */
    public function sendHeader($header);

    /**
     * Send data to client.
     *
     * @param $data
     * @return mixed
     */
    public function sendData($data);

    /**
     * Return are headers was sent
     *
     * @return mixed
     */
    public function isHeadersSent();

    /**
     * Clear output buffer
     */
    public function flush();
}
