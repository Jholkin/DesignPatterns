<?php

namespace App\SubSystemEmail;

class EmailSystem
{
    public function sendEmail($message)
    {
        echo "<br><br>|To: ".$message["name"]."<br>".
            "From: FacadeSystem"."<br>".
            "<br>Muchas gracias por utilizar el servicio"."<br>".
            "En linea para realizar sus pagos."."<br>".
            "<br>Hace un momento acabamos de recibir un pago:"."<br>".
            "<br>Monto del pago: ".$message["ammount"]."<br>".
            "Nuevo saldo: ".$message["balance"]."<br>".
            "Referencia de pago: ".$message["reference"]."<br>".
            "Nuevo Status: ".$message["newStatus"]."<br>".
            "<br>Gracias por su preferencia"."<br>".
            "Este correo no debe ser contestado ya que"."<br>".
            "ha sido enviado por un proceso automático"."<br>".
            "************************************************";
    }
}