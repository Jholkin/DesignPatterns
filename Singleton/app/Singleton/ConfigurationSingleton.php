<?php

namespace App\Singleton;

use App\META_INF\Configuration;

class ConfigurationSingleton
{
    static private $singleton = ConfigurationSingleton;

    private  const CONFIGURATION_PROP = "App/Meta_INF/Configuration.php";

    private const APP_NAME_PROP = "appName";
    private const APP_VERSION_PROP = "appVersion";

    private $appName;
    private $appVersion;

    private function __construct()
    {
        
    }

    private static function createInstance()
    {
        if ($singleton == null) {
            $singleton = new ConfigurationSingleton();
        }
    }

    public static function getInstance()
    {
        if ($singleton == null) {
            createInstance();
        }
        return $singleton;
    }
}
