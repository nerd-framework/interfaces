<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 11/30/16
 * Time: 7:33 PM
 */

namespace Nerd\Framework;

use Nerd\Framework\Http\Request\RequestContract;
use Nerd\Framework\Http\Response\ResponseContract;

interface HttpEssence
{
    /**
     * Handle HTTP Request and return HTTP Response
     *
     * @param RequestContract $request
     * @return ResponseContract
     */
    public function handle(RequestContract $request): ResponseContract;
}
