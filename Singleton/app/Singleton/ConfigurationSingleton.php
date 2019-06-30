<?php

namespace App\Singleton;

use config\properties;

class ConfigurationSingleton
{
    static private $singleton = null;

    private $APP_NAME_PROP = "appName";
    private $APP_VERSION_PROP = "appVersion";

    private $appName;
    private $appVersion;

    private function __construct()
    {
        $this->appName = config("properties.$this->APP_NAME_PROP");
        $this->appVersion = config("properties.$this->APP_VERSION_PROP");
    }

    private static function createInstance()
    {
        if (self::$singleton == null) {
            self::$singleton = new ConfigurationSingleton();
        }
    }

    public static function getInstance()
    {
        if (self::$singleton == null) {
            self::createInstance();
        }
        return self::$singleton;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    public function setAppName($newappName)
    {
        $this->appName = $newappName;
    }

    public function getAppVersion()
    {
        return $this->appVersion;
    }

    public function setAppVersion($newappVersion)
    {
        $this->appVersion = $newappVersion;
    }
}
