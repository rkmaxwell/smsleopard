<?php

namespace rkmaxwell\smsleopard\Facades;

use Illuminate\Support\Facades\Facade;
use rkmaxwell\smsleopard\Services\SmsLeopardClient;

class SmsLeopard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SmsLeopardClient::class;
    }
}
