<?php

namespace Nerd\Framework\Http\Response;

interface JsonResponseContract extends BaseResponseContract
{
    /**
     * @return mixed
     */
    public function getData();
}
