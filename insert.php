<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

 

?>

<center>
 
   <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
   
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 

    Your Age:<br> 
    <input name="age" type="text" value="" size="30"/><br> 
   
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 

      
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br><br> 
   
    <input type="submit" value="Submit"/> 
    </form> 
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</center>

 <?php 

   if (isset($_POST)){
       $name=$_POST['name'];
       $age=$_POST['age'];
       $email=$_POST['email'];
       $message=$_POST['message'];
   }


   $sql =<<<EOF
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (1, '$name', '$age', '$email', '$message' );

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "Records created successfully\n";
   }
   $db->close();
?>