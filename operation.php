<?php

include 'connection.php';

class Cruds{

    public static function Insert(int $id,string $name,string $addr,int $number,string $class){
        $query ="INSERT INTO 
        students(id,name,address,mobile,class) values('$id','$name','$addr','$number','$class')";
        $result =Connection::GetMySqlConnection()->query($query);
        if ($result)
            header("Location: view_students.php");
        
    }

    public static function UpdateStudent(int $id,string $name,string $addr,int $number,string $class,int $update){
        $query ="UPDATE students SET id='$id',name='$name',address='$addr',mobile='$number', class='$class' WHERE id='$update'";
        $result =Connection::GetMySqlConnection()->query($query);
        if ($result)
            header("Location: view_students.php");
    }

    public static function ReadData(){
        $htmlTable ="";
        
        $query ="SELECT *FROM students";
        $result =Connection::GetMySqlConnection()->query($query);
        if ($result)
            {
            
                while($rows=$result->fetch_assoc())
                {
                    $htmlTable.="<tr>";
                    $htmlTable.="<td>".$rows['id']. "</td>";
                    $htmlTable.="<td>".$rows['name']. "</td>";
                    $htmlTable.="<td>".$rows['address']. "</td>";
                    $htmlTable.="<td>".$rows['mobile']. "</td>";
                    $htmlTable.="<td>".$rows['class']. "</td>";
                    $htmlTable.="<td>"."<a href='perform.php?id=$rows[id]' style='background: red; color: white; padding: 5px;  border-radius: 5px; text-decoration: none;'>Delete</a>".
                    "<a href='edit.php?id=$rows[id]&name=$rows[name]&address=$rows[address]&mobile=$rows[mobile]&class=$rows[class]' style='background: green; color: white; padding: 5px; margin-left:10px; border-radius: 5px; text-decoration: none;'>Update</a>". "</td>";
                    
                   
                }
                $htmlTable.="</tr>";
                
            }
        return $htmlTable;
    }

    public static function DeleteStudent($id){
        $query ="DELETE from students where id=$id";
        $result =Connection::GetMySqlConnection()->query($query);
        if ($result)
          header("Location: view_students.php");
    }
}
?>