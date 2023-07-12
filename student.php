<?php
    
      include 'conn.php';
      //print_r($_POST);
      if(isset($_POST['name']))
      {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $language=$_POST['language'];
        $ph=$_POST['ph'];

        $insertquery= "insert into coaching(name,email,language,ph) VALUES('".$name."','".$email."','".$language."','".$ph."')";
        //($insertquery);
        $rev=mysqli_query($con,$insertquery);
        if($rev)
        {
            echo "successful";
        } 
        else
        {
            echo "Erro";
        }
      }
?>