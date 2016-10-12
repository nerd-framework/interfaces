<?php

namespace Nerd\Framework\Http\IO;

use Nerd\Framework\Http\Response\CookieContract;

interface OutputContract
{
    public function sendCookie(CookieContract $cookie);
    public function sendHeader($header);
    public function sendData($data);
    public function isHeadersSent();
}
