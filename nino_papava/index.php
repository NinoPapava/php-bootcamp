<!doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <head >
     <br><br><h1><strong>Github Users</strong></h1>
  
     <style>
       
     body{
      background-image: url('./Dark Background    01_preview1 .avif');
        color: white;
     }
     h1{
        text-align: center;
     }
     .container{
      transform: translate(300px, 50px);
     }
     .error{
        display: none;
     }
     .new{
        transform: translate(680px, -250px);
     }
 
      </style>

  </head>

  <body>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<form action="index.php" method="post" enctype="multipart/form-data" name="myform" onsubmit="return validation()">

<div class="container">
 
  <label for="image"><em>Profile Picture</em></label><br>
  <input type="file" placeholder="upload image" id="image" name="image">
  <br><br><br>

  <label class="nameClass" ><b>First Name</b></label><br>
  <input type="text" placeholder="Enter your name" id="username" name="username" autocomplate="off"><br>
  <em>(only alphabet characters (A to Z))</em><br><br><br>

  
  <label class="nameClass"><b>Last Name</b></label><br>
  <input type="text" placeholder="Enter your last name" id="name" name="name" autocomplate="off"><br><em>(only alphabet characters (A to Z))</em><br><br><br>
  
  <div id="error"></div>

  <button type="submit" name="upload" value="submit" ><strong>Submit</strong></button>
  <label>
    
  </label>
</div>

</form>

<script> 
    var username=document.forms['myform']['username'];
    var errors=document.getElementById('error');
    var letters=/^[a-zA-Z]*$/;

    function validation()
    {
      if(username.value=='')
       {
         errors.innerHTML="Both first and last name must be filled in...!!!";
         errors.style.display="block";
          return false;
       }
       else if(username.value.length>15)
            {
               alert("Username and Last Name Must been less than 15 Characters...!");
               errors.innerHTML-"Username and Last Name Must been less than 15 Characters...!";
               errors.style.display="block";
               return false;
            }
            else if(!username.value.match(letters))
                  {
                     alert("Username and Last Name Must Contain only alphabets");
                     errors.innerHTML="Username and Last Name Must Contain only alphabets";
                     return false;
                  } 
            else if(!username.value=='')
            {
              return true;
              
    }
   }

</script>
<div class="new">
<?php
      if($_SERVER['REQUEST_METHOD']=='POST'){

         if(isset($_POST['upload'])){

            $image_name = $_FILES['image']['name'];
            $image_type = $_FILES['image']['type'];
            $image_size = $_FILES['image']['size'];
            $image_tmp_name = $_FILES['image']['tmp_name'];

           move_uploaded_file($image_tmp_name, "photos/$image_name");
           echo "<img src='photos/$image_name' width='220' height='250' >";
         }  
         echo "<br>";
         echo $_POST['username'];
         echo " ";
         echo $_POST['name'];
      }


      
  ?>
</div>

  </body>

  </html>

 
  
