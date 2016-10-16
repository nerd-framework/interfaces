<?php

namespace Nerd\Framework\TestSuite;

interface CrudContract
{
    /**
     * @param string $path
     * @return Result\BaseResultContract
     */
    public function get($path);

    /**
     * @param string $path
     * @param string $data
     * @return Result\BaseResultContract
     */
    public function post($path, $data);

    /**
     * @param string $path
     * @param string $data
     * @return Result\BaseResultContract
     */
    public function put($path, $data);

    /**
     * @param string $path
     * @return Result\BaseResultContract
     */
    public function delete($path);
}
