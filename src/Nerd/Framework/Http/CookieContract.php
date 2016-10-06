<?php

namespace Nerd\Framework\Http;

interface CookieContract
{
    public function getName();

    public function getValue();

    public function getExpire();

    public function getPath();

    public function getDomain();

    public function getSecure();

    public function getHttp();

    public function isRaw();
}
