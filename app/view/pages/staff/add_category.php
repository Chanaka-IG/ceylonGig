<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>




<html>
    <heaad>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../../assets/css/staff/add_category.css">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script> 
    $(function(){
    $("#includedContent").load("header.php"); 
    });
</script> 

<script> 
    $(function(){
    $("#includedContent1").load("footer.php"); 
    });
</script> 

<script> 
    $(function(){
    $("#includedContent2").load("navigation.php"); 
    });
</script> 



    </head>
    <body>
    <header>

<div id="includedContent"></div>


</header>

<div id="includedContent2"></div>
        <div class="container">
            <div class="header">
                <h2>Add Category</h2>
            </div>

            
            <form id="form" class="form" action="#" method="POST">

          
                <div class="form-control">
                    <label for="username">Category Name</label>
                    <input type="text" placeholder="abcd" id="name" name="name" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="username">Category Id</label>
                    <input type="text" placeholder="0000" id="cid" name="categoryid" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
              

                  
          

            <button type="submit" name="register" >Check and submit</button><br> 
            <div class = "links">
            <a href="delete_category.php">View List</a><br>
            </div> 
            </form>
        </div>
     
        <script src="../../assets/js/add_category.js"></script>
      
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>
