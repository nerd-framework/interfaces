<?php

namespace Nerd\Framework\Http;

interface OutputContract
{
    public function sendCookie(CookieContract $cookie);
    public function sendHeader($name, $value);
    public function sendData($data);
}
