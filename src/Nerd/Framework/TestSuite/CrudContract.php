<?php

namespace Nerd\Framework\TestSuite;

interface CrudContract
{
    public function get($path);

    public function post($path, $data);

    public function put($path, $data);

    public function delete($path);
}
