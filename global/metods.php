<?php


class metods{

    public function create($code,$name,$lastname){
        $con = new connect;
        $connection = $con->connection();

        $sql ="INSERT INTO users VALUES('','$code','$name','$lastname')";
        $query = mysqli_query($connection,$sql);
        
        if($query){
            $mensaje = "hola";
            Header("Location:index.php");
            
        }else{
            echo "<script>alert('Error en bd');</script>";
        }
    }

    public function show($sql){
        $con = new connect;
        $connection = $con->connection();

        $result = mysqli_query($connection,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);

    }

    public function update($id){
        
    }

    public function delete($id){
        $con = new connect;
        $connection = $con->connection();

        $sql ="DELETE FROM users WHERE id='$id'";
        $query = mysqli_query($connection,$sql);

        if($query){
            Header("Location:index.php");
        }else{
            echo "<script>alert('Error en bd');</script>";
        }

    }

    

}




?>