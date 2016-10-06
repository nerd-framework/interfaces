<?php

namespace Nerd\Framework\Http;

interface RequestContract
{
    public function getMethod();
    public function getPath();
}
