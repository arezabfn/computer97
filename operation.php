<?php
require_once ("db.php");
require_once ("components.php");
$con = createDb();

//function plus
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    updateData();
}
if(isset($_POST['delete'])){
    deleteData();
}
if(isset($_POST['deleteall'])){
    deleteBtn();
    deleteAll();
}

function createData()
{
    $stid=textboxValue("stid");
    $name = textboxValue("name");
    $lastname = textboxValue("lastname");
    $age = textboxValue("age");
    $gender = textboxValue("gender");

        if($name && $lastname)
        {
            $sql = "INSERT INTO tblcrudtest(student_id,stname,stlastname,stage,stgender) 
VALUES ('$stid','$name','$lastname','$age','$gender')";

            if(mysqli_query($GLOBALS['con'],$sql)){
                textNode("success","دانشجو اضافه شد");
            }else{
                textNode("error","خطا");
            }
        }
        else{
            textNode("error","Provide Data In The TextBox");
        }

}

function readData()
{
    $sql = "SELECT * FROM `tblcrudtest` ";
    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0)
    {
       return $result;
    }

}
function updateData(){
    $id=textboxValue("id");
    $stid=textboxValue("stid");
    $name = textboxValue("name");
    $lastname = textboxValue("lastname");
    $age = textboxValue("age");
    $gender = textboxValue("gender");

    if($name && $lastname)
    {
        $sql = "
                UPDATE tblcrudtest SET student_id='$stid',stname='$name',stlastname='$lastname',stage='$age',stgender='$gender' 
            WHERE id = '$id';
            ";

        if(mysqli_query($GLOBALS['con'],$sql)){
            textNode("success","آپدیت شد");
        }else{
            textNode("error","خطا");
        }
    }
    else{
        textNode("error","Provide Data In The TextBox");
    }

}

function textboxValue ($value)
{
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox))
    {
        return false;
    }
    else{
        return $textbox;
    }
}
function textNode($classname,$text)
{
    $txt="<h6 class='$classname'>$text</h6>";
    echo $txt;
}





?>