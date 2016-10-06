<?php

namespace Nerd\Framework\Http;

interface ExceptionServiceContract
{
    /**
     * Add new exception handler
     *
     * @param $exceptionClass
     * @param callable $handler
     * @return mixed
     */
    public function on($exceptionClass, callable $handler);

    /**
     * Handle exception using exception handler
     *
     * @param \Exception $exception
     * @return ResponseContract
     */
    public function handle(\Exception $exception);
}
