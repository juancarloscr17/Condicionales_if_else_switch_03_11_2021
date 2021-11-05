<?php
    header("content-type: application/json");
    header('Access-Control-Allow-Origin: *');
    extract((file_get_contents("php://input")) ? json_decode(file_get_contents("php://input"), true) : ["numero"]);
    $numero = (integer)0;
    switch ($numero) {
        case 2:
            print_r("Soy el numero correcto");
            break;
        
        default:
            print_r("Dato sin opcion");
            break;
    }
    print_r("\n");

    $RESPUESTA = (string)
    ($numero>1 && $numero<= 5 )?
        ($numero==2)? "el numero es = 2": null
        :($numero == 10)? "el numero es = 10"
        :(($numero>= 20) ? " el numero es mayor e igual a 20"
        :"El numero no cumple la condicion");
        print_r($RESPUESTA);

    print_r("\n");        

        if($numero>=1 && $numero<=5){
            if($numero==2){
                print_r(<<<MENSAJE
                El numero es igual a 2
        MENSAJE);
            }
        }else if ($numero>=20) {
                print_r(<<<MENSAJE
                El numero es mayor e igual a 20
        MENSAJE);
            }else if($numero==10){
                print_r(<<<MENSAJE
                El numero es mayor e igual a 10
        MENSAJE);
            }
        else {
            print_r(<<<MENSAJE
            EL numero no cumple la condicion
        MENSAJE);
        
        }


    


?>