<?php


namespace Pis0sion\src;

use think\Service as BaseService;

// 实现tp6的一个登录认证服务
// 继承tp6基类
class Service extends BaseService
{
    // 注册服务
    public function register()
    {
        // 挂载服务
        $this->app->bind("interceptor", Interceptor::class);
    }
}