<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Singleton\ConfigurationSingleton;

class SingletonController extends Controller
{
    public function index()
    {
        $singletonA = ConfigurationSingleton::getInstance();
        $singletonB = ConfigurationSingleton::getInstance();

        $appNameA = $singletonA->getAppName();
        $appVersionA = $singletonA->getAppVersion();
        $appNameB = $singletonB->getAppName();
        $appVersionB = $singletonB->getAppVersion();
        $referencia = $singletonA == $singletonB;

        $singletonA->setAppName("Singleton name modificado por A");
        $singletonB->setAppVersion("Singleton version modificado por B");
        $appNameAm = $singletonA->getAppName();
        $appVersionAm = $singletonA->getAppVersion();
        $appNameBm = $singletonB->getAppName();
        $appVersionBm = $singletonB->getAppVersion();
        $referenciam = $singletonA == $singletonB;

        return view('index', compact(
            'appNameA','appVersionA','appNameB','appVersionB','referencia','appNameAm','appNameBm','appVersionAm','appVersionBm'
        ));
    }
}
