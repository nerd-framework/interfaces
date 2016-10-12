<?php

namespace Nerd\Framework\Http;

interface FileContract
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getSize();

    /**
     * @return string
     */
    public function getTempName();

    /**
     * @param string $path
     */
    public function saveAs($path);

    /**
     * @return resource
     */
    public function getStream();

    /**
     * @return boolean
     */
    public function isOk();
}
