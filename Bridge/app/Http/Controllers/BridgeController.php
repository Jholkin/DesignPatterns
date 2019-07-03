<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bridge\Encrypt\AESEncryptAlgorithm;
use App\Bridge\Encrypt\NoEncryptAlgorithm;
use App\Bridge\Implement\DefaultMessageEncrypt;

class BridgeController extends Controller
{
    public function index()
    {
        $aes = new DefaultMessageEncrypt(new AESEncryptAlgorithm());
        $no = new DefaultMessageEncrypt(new NoEncryptAlgorithm());

        $message = "Hola mundo";
        $password = "hola";

        $messageAES = $aes->encryptMessage($message,$password);
        $messageNO = $no->encryptMessage($message,null);

        return view('index', compact('messageAES','messageNO'));

    }
}
