<?php

namespace Cxx\Codetool\Traits;

/**
 * 单例模式
 * 可以通过trait机制快速实现一个单例模式
 */

trait Singleton
{
    protected static $_instance;

    final public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }

    private function __construct()
    {
        $this->init();
    }

    protected function init()
    {
    }
}
