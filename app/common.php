<?php

if (!function_exists('asset')) {
    /**
     * @param string $path
     * @return string
     */
    function asset(string $path = ''): string
    {
        $root = request()->root(true);
        return $root . '/' . ltrim($path, '/') . '?v=' . RELEASE;
    }
}
