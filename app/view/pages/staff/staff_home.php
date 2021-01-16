
<?php

session_start();

?>

<?php

if(!isset($_SESSION['userid'])) {
    header('Location: ../login.php');
}

?>




<!DOCTYPE html>
<html>

    <head>
        <meta charset="="UTF-8">
        <title>CeylonGig</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/staff/staff_home.css">
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


        

    </head>
    <body>
        <header>
            <div id="includedContent"></div>
            
        </header>

        

        <div class="area">
        
        <div class="banner-area">
            <div class="container1">
                <div class="outer">
                    <div class="details">
                        <h1>Welcome to Staff Panel <span class="username"> <?php echo  $_SESSION['name'] ?> !</span></h1>
                        <h2> deliver a safe and novel platform for Sri Lankan freelancers to find a job and for the customers who live in Sri Lanka to get their jobs done. 
                        </h2>
                    </div>
                </div>
            </div>
                
        </div>
        <div class="content-area">
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/customer.png">
                            <h3>Customer Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to block customer</p>
                            <a href="customer_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>


                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/freelancer.png">
                            <h3>Freelancer Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to add and block freelancer</p>
                            <a href="freelancer_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>              

                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/advertiser.png">
                            <h3>Advertiser Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to add, modify advertiser and add, reject advertise</p>
                            <a href="advertise_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/order.png">
                            <h3>Order Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to View and track order</p>
                            <a href="order_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/complaint.png">
                            <h3>Complaint Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to View Complaints</p>
                            <a href="complaint_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="../../assets/img/category.png">
                            <h3>Category Setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Click below to add or delete category</p>
                            <a href="category_manage.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            
        </div>


        <div id="includedContent1"></div>

    
    </body>


</html>



