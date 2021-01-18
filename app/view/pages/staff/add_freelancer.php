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
        <link rel="stylesheet" href="../../assets/css/staff/add_freelancer.css">

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
                <h2>Add Freelancer</h2>
            </div>
            <form id="form" class="form" action="#" method="POST">
                <div class="form-control">
                    <label for="username">Name</label>
                    <input type="text" placeholder="abcd" id="name" name="name" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="username">User Name</label>
                    <input type="etext" placeholder="abcd" id="username" name="username" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" id="password" name="password"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="username">Password check</label>
                    <input type="password" placeholder="Re-Enter password" id="repassword" name="repassword"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                  <div class="form-control">
                    <label for="username">User Id</label>
                    <input type="text" placeholder="User Id" id="userid" name="userid"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

              <div class="form-control">
                    <label for="username">Address</label>
                    <input type="text" placeholder="Address" id="address" name="address"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="username">NIC</label>
                    <input type="text" placeholder="000000000V" id="nic" name="address"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>



                <div class="form-control">
                    <label for="username">Date Of birth</label>
                    <input type="date" placeholder="Date of birth" id="dob" name="dob"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="username">Email</label>
                    <input type="email" placeholder="sbc@gmail.com" id="email" name="email"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>



                <div class="form-control">
                    <label for="username">Phone Number</label>
                    <input type="text" placeholder="+94-00000000" id="phone" name="phone"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>



              
               <div class="form-control">
                    <label for ="username" id ="gender">Gender</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                  <label class="radio">
                    <input type="radio"  name="gender" value="Female" class="username" required >Female
                        
                        <br>
                    </label>
                    <label class="radio">
                        <input type="radio"  name="gender" value="Male" class="username" required >Male
                        
                        <br>
                    </label>

                   
                </div>

            


            
            <button type="submit" name="register" >Check and submit</button><br> 

            <button >Cancel and remove</button><br> 
            

            <div class = "links">
            <a href="block_freelancer.php">Current Freelancer List</a><br>
            </div> 
            
            </form>
        </div>
     
        <script src="../../assets/js/add_freelancer.js"></script>
      
        <footer>

<div id="includedContent1"></div>

</footer>


    </body>
</html>
