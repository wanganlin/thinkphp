<?php

use think\facade\Route;

$dirs = glob(app_path('controller/*'), GLOB_ONLYDIR);
foreach ($dirs as $dir) {
    $m = basename($dir);
    $v = $m === 'web' ? '' : $m;
    Route::group($v, function () {
        Route::get(':c/:a', ':c/:a');
        Route::post(':c/:a', ':c/:a');
        Route::get(':c', ':c/index');
        Route::get('/', 'Index/index');
    })->prefix($m.'.');
}
