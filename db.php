<?php
function createDb()
{
    $server = "localhost";
    $username="root";
    $pass = "";
    $dbname = "crudtest";

    $con=mysqli_connect($server,$username,$pass);

      //Check Connection
    if(!$con)
    {
        die(mysqli_connect_error()."اتصال شکست خورد : ");
    }

    //create Database
    $sql = 'CREATE DATABASE IF NOT EXISTS '.$dbname;

    if(mysqli_query($con,$sql))
    {
        $con=mysqli_connect($server,$username,$pass,$dbname);
        $sql = "
                CREATE TABLE IF NOT EXISTS tblcrudtest (
                    id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    student_id INT(250) NOT NULL,
                    stname VARCHAR(150),stlastname VARCHAR(250),stage VARCHAR(100),stgender VARCHAR(100)
                );
        ";
        if(mysqli_query($con,$sql))
        {
            return $con;
        }
        else{
            echo "Cannot Table Created..!";
        }
    }
    else{
        echo mysqli_error($con)."خطا هنگام ساخت دیتابیس : ";
    }



}
?>
