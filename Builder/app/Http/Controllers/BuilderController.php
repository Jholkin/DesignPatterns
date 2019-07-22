<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Builder\dto\Employee;

class BuilderController extends Controller
{
    public function index()
    {
        $employee = (new Employee)->EmployeeBuilder()
            ->setName("Jhil Palacios Mariano")
            ->setGender("Masculino")
            ->setAge("21")
            ->setAddress("Aragón 189 int 404 col. Álamos, delegación Benito" 
                        ,"Tingo María", "Perú","10101")
            ->addContacts("Rene Blancarte","112233445","123","casa","Chapultepect No. 123 Col. Militar", "México"
                        ,"Mexico","Perú","10023")
            ->addContacts1("Jaime Blancarte", "3344556677", null, "Celular")
            ->addPhones("4567890234", null, "Celular")
            ->addPhones("7788990099", null, "Casa")
            ->build();

        //var_dump($employee);

        return view('index')->with('name',$employee->getName())
                            ->with('age',$employee->getAge())
                            ->with('gender',$employee->getGender());
    }
}
