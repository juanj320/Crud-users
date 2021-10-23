<?php


if(isset($_POST['button'])) {

    switch($_POST['button']){       
        case 'create':

            $code = $_POST['code'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];

            $con = new metods;
            $prueba = $con->create($code,$name,$lastname);


        break;
        case 'delete':
            $id = $_POST['id'];

            $con = new metods;
            $prueba = $con->delete($id);
        break;
            
    }

}

?>