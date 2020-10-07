<?php
/**
 *
 * @Date: 2020/10/1
 * @Author: yyyvy <76836785@qq.com>
 * @Description:
 * @Notes:
 */

namespace Hackxiaoya\IPWry\Facades;

use Illuminate\Support\Facades\Facade;

class IPWry extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ipwry';
    }
}