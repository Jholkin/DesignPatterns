<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iterator\Employee;
use App\Iterator\ListEmployee;

class IteratorController extends Controller
{
    //
    public function index()
    {
        $employee = new Employee("jhil","CEO",
                        new Employee("jholkin","presidente",
                            new Employee("pedro","VP",
                                new Employee("Liliana","gerente",
                                    new Employee("juan","developer", 0)),
                                new Employee("sofia","Gerente",
                                    new Employee("rebeca","developer", 0))
                )
            )
        );

        $empIterator = new ListEmployee($employee);
        while ($empIterator->hasNext()) {
            $emp = $empIterator->next();
            echo $emp->toString();
        }
    }
}
