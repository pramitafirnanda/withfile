<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{
    protected $auth;
    public  function __construct(Guard $auth){
        $this->auth=$auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->user()->id !=1 ){
            Session::flash('message-error','Sign Private');
            return Redirect()->to('admin');
        }
        return $next($request);
    }
}
