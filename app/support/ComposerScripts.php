<?php

namespace app\support;

class ComposerScripts
{
    public static function postAutoloadDump()
    {
        self::updateAbstractController();
    }

    public static function updateAbstractController()
    {
    }
}