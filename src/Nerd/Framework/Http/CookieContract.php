<?php

namespace Nerd\Framework\Http;

interface CookieContract
{
    public function getName();

    public function getValue();

    public function getExpire();

    public function getPath();

    public function getDomain();

    public function isSecure();

    public function isHttpOnly();

    public function isRaw();
}
