<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NullObject\EmployeeDAOService;

class NullobjectController extends Controller
{
    //
    public function index()
    {
        $service = new EmployeeDAOService();
        $empl1 = $service->findEmployeeById(1);
        echo $empl1->getName() . "<br>";
        echo $empl1->getAddress()->getFullAddress() . "<br>";

        $empl2 = $service->findEmployeeById(2);
        echo "<br>" . $empl2->getName();
/*        echo $empl2->getAddress()->addressNull();*/
    }
}
