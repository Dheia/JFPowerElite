<?php namespace TP\PES;

use System\Classes\PluginBase;
use Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        Event::listen('backend.page.beforeDisplay', function ($controller, $action, $param) {
            if ($controller instanceof \RainLab\Pages\Controllers\Index) {
                $controller->addCss("/plugins/tp/pes/assets/css/repeater.css");
            }
            // $controller->addCss("/themes/october-starter-kit/assets/public/css/app.css");
            // $controller->addJs("/themes/october-starter-kit/assets/public/js/test.js");
        });
    }
}
