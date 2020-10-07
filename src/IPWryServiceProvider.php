<?php
/**
 *
 * @Date: 2020/10/1
 * @Author: yyyvy <76836785@qq.com>
 * @Description:
 * @Notes:
 */

namespace Hackxiaoya\IPWry;

use Illuminate\Support\ServiceProvider;

class IPWryServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ipwry', function ($app) {
            $file = realpath(__DIR__ . '/../database/qqwry.dat');
            return new IPWry($file);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'ipwry'
        ];
    }
}