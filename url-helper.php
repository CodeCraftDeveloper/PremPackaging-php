<?php

if (!function_exists('site_base_path')) {
    function site_base_path()
    {
        static $basePath = null;

        if ($basePath !== null) {
            return $basePath;
        }

        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $dir = str_replace('\\', '/', dirname($scriptName));

        if ($dir === '/' || $dir === '\\' || $dir === '.') {
            $dir = '';
        }

        $basePath = rtrim($dir, '/');

        return $basePath;
    }
}

if (!function_exists('site_url')) {
    function site_url($path = '')
    {
        $basePath = site_base_path();
        $path = ltrim($path, '/');

        if ($path === '') {
            return $basePath === '' ? '/' : $basePath . '/';
        }

        return ($basePath === '' ? '' : $basePath) . '/' . $path;
    }
}
