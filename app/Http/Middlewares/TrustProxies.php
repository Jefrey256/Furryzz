<?php


namespace App\Httpz\Middlewares;

use Illuminate\Http\Request;
use Illuminate\Proxy\TrusProxies as Middleware;



class TrustProxies extends Middleware{
    protected $proxies = '*';
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}