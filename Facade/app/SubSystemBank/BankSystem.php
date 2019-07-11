<?php

namespace App\SubSystemBank;

use App\Facade\Util\OnMemoryDataBase;

class BankSystem
{
    public function transfer(TransferRequest $request)
    {
        $onMemory = new OnMemoryDataBase();
        $cardNumberPrefix = substr($request->getCardNumber(),0,3);
        if (!$onMemory->validateCardBins($cardNumberPrefix)) {
            throw new Exception("Tarjeta Inválida", 1);
        }

        $cardCompany = $onMemory->getCardCompany($cardNumberPrefix);
        if ((strcmp("AMEX",$cardCompany) == 0) && $request->getCardNumber()->length()!=15) {
            throw new Exception("El número de la tarjeta es inválido", 1);
        } elseif ((strcmp("VISA",$cardCompany) == 0) ||
                (strcmp("MASTERCARD",$cardCompany) == 0) && $request->getCardNumber()->length()!=16) {
            throw new Exception("El número de la tarjeta es inválido", 1);
        }

        $number = $request->getCardNumber();
        $cardNumberSubfix = $number.\substr(strlen($number)-4,strlen($number));

        echo "<br>Se ha realizado un cargo al cliente: ".$request->getCardName()."<br>"
            ."por el monto de: ".$request->getAmmount()."<br>a la tarjeta terminacion en: ".$cardNumberSubfix;

        $uniqueId = uniqid();
        return $uniqueId;
    }
}