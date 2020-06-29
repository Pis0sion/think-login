<?php


namespace Pis0sion\src;

// test
class Interceptor
{
    /**
     * @param string $parameter
     * @return string
     */
    public function handle(string $parameter): string
    {
        return "pis0sion === " . $parameter . " === gaoqiaoxue";
    }
}