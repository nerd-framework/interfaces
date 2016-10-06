<?php

namespace Nerd\Framework\Http;

interface OutputContract
{
    public function sendCookie(CookieContract $cookie);
    public function sendHeader($header);
    public function sendData($data);
    public function isHeadersSent();
}
