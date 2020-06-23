<?php
/**
 * Created by PhpStorm.
 * User: Fanz
 * Date: 2020/6/23
 * Time: 18:50
 */
if (!function_exists('dd')) {
    function dd()
    {
        if(YII_DEBUG) {
            if ($args = func_get_args()) {
                foreach ($args as &$a) {
                    \yii\helpers\VarDumper::dump($a, 10, true);
                    echo '<pre>';($a);
                }
            }
            exit(1);
        }
    }
}

if (!function_exists('ddx')) {
    function ddx()
    {
        if(YII_DEBUG) {
            if ($args = func_get_args()) {
                var_dump($args);
            }
            exit(1);
        }
    }
}
