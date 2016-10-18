<?php

namespace Nerd\Framework\Http\Response;

interface BaseResponseContract extends ResponseContract
{
    /**
     * @return int|null
     */
    public function getContentLength();

    /**
     * @param int $length
     * @return void
     */
    public function setContentLength($length);

    /**
     * @return string
     */
    public function getServerProtocol();

    /**
     * @param string $serverProtocol
     * @return void
     */
    public function setServerProtocol($serverProtocol);

    /**
     * return int
     */
    public function getStatusCode();

    /**
     * @param int $statusCode
     * @return void
     */
    public function setStatusCode($statusCode);

    /**
     * @param string $name
     * @return string|null
     */
    public function getHeader($name);

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function addHeader($name, $value);

    /**
     * @param string $name
     * @return bool
     */
    public function hasHeader($name);

    /**
     * @param CookieContract $cookie
     * @return void
     */
    public function setCookie(CookieContract $cookie);

    /**
     * @param string $name
     * @return CookieContract|null
     */
    public function getCookie($name);

    /**
     * @param string $name
     * @return bool
     */
    public function hasCookie($name);

    /**
     * @return string|null
     */
    public function getFileName();

    /**
     * @param null $fileName
     * @return void
     */
    public function setFileName($fileName);

    /**
     * @return boolean
     */
    public function isAttachment();

    /**
     * @param boolean $isAttachment
     * @return void
     */
    public function setAttachment($isAttachment);

    /**
     * @return string
     */
    public function getContentType();

    /**
     * @param string $contentType
     * @return void
     */
    public function setContentType($contentType);

    /**
     * @return string
     */
    public function getCharset();

    /**
     * @param string $charset
     * @return void
     */
    public function setCharset($charset);
}
