<?php

$errorLoga=false;

include 'operation.php';

// insert 
if (isset($_POST['insert']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $adre=$_POST['address'];
    $number=$_POST['number'];
    $class=$_POST['class'];
    if (empty($id))
        {
        
        header("Location: student.php");
        
        }
        else

    Cruds::Insert($id,$name,$adre,$number,$class);
    

}

//delete 
if ($_GET['id'])
    $id=$_GET['id'];
else
    $id="";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    Cruds::DeleteStudent($id);
}

// update
if (isset($_POST['update']))
{
    $id=$_POST['id'];
    $currentID=$_POST['id'];
    $name=$_POST['name'];
    $adre=$_POST['address'];
    $number=$_POST['number'];
    $class=$_POST['class'];
    Cruds::UpdateStudent($id,$name,$adre,$number,$class,$currentID);
    

}

?>