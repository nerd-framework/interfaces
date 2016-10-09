<?php

namespace Nerd\Framework\Container;

interface ContainerContract
{
    /**
     * @param string $id
     * @return bool
     */
    public function has($id);

    /**
     * @param string $id
     * @return object
     * @throws ContainerExceptionContract
     */
    public function get($id);

    /**
     * @param string $id
     * @return $this
     */
    public function unbind($id);

    /**
     * @param string $id
     * @param mixed $resource
     * @return $this
     */
    public function bind($id, $resource);

    /**
     * @param string $id
     * @param null $provider
     * @return $this
     */
    public function singleton($id, $provider = null);

    /**
     * @param string $id
     * @param null $provider
     * @return $this
     */
    public function factory($id, $provider = null);

    /**
     * @param $callable
     * @param array $args
     * @return $this
     * @throws ContainerExceptionContract
     */
    public function invoke($callable, array $args = []);
}
