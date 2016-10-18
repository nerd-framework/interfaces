<?php

namespace Nerd\Framework\TestSuite;

interface NavigatorContract
{
    /**
     * @param $path
     * @param string $method
     * @param array $data
     * @return NavigatorResult\PlainResultContract
     */
    public function go($path, $method = 'GET', array $data = []);

    /**
     * @param $path
     * @param string $method
     * @param array $data
     * @return NavigatorResult\JsonResultContract
     */
    public function goJson($path, $method = 'GET', array $data = []);
}
