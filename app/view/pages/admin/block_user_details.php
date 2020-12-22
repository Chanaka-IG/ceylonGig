
<?php

session_start();

?>

<?php

if(!isset($_SESSION['email'])) {
    header('Location: ../login.php');
}

?>

<?php

include ('../../../model/block_user_details.php');

?>


<!DOCTYPE html>

<html>

<head>


<link rel="stylesheet" href="../../assets/css/admin/block_user_details.css " type="text/css">


<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script> 
    $(function(){
      $("#includedContent").load("header.php"); 
    });
    </script> 

<script> 
    $(function(){
      $("#includedContent1").load('footer.php'); 
    });
    </script> 


</head>

<body>


<header>


<div id="includedContent"></div>


</header>


       

    

    <table>
        
        

 
        <tr>
            <th colspan="5" class="headline"><h2>Blocked Staff Information</h2><th>
        </tr>

        <tr>    
            <th>UserId</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date of Birth</th>

            
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['userid'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['role'] ?></td>
         <td><?php echo $row['dob'] ?></td>

      
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>

 
    </table>

<hr>

<table>
        
        <tr>
    
          <th colspan="6"><h2>Blocked Customer Details Details</h2></th>
    
        <tr> 
          
            <tr>
               
                <th>Email</th>
                <th>NIC</th>
                <th>Phone </th>
                <th>Address</th>
                <th>DOB</th>
                <th>Transaction History</th>
                
                
            </tr>
    
          
          <tr>
                 
                  <td>abc@gmail.com</td>
                  <td>aaa</td>
                  <td>+94-00000000</td>
                  <td>abcd</td>
                  <td>2000-01-1</td>
                  <td>----------</td>
                 
                 
                
                    
            </tr>
    
            <tr>
            
                  <td>abc@gmail.com</td>
                  <td>aaa</td>
                  <td>+94-00000000</td>
                  <td>abcd</td>
                  <td>2000-01-1</td>
                  <td>----------</td>
                 
                
                    
            </tr>
    
            <tr>
           
                  <td>abc@gmail.com</td>
                  <td>aaa</td>
                  <td>+94-00000000</td>
                  <td>abcd</td>
                  <td>2000-01-1</td>
                  <td>----------</td>
                 
                
                    
            </tr>
    
             
         
     
        </table>

        <hr>

        <table>
        
        <tr>
    
          <th colspan=4><h2>Blocked Freelancer Details</h2></th>
    
        <tr> 
          
            <tr>
                <th>Freelancer Name</th>
                <th>Customer Name</th>
                <th>Order Id</th>
              
                
                
            </tr>
    
          
          <tr>
                  <td>Ruwan</td>
                  <td>Chanaka</td>
                  <td>01.</td>
                 
                    
            </tr>
    
            <tr>
                  <td>Ruwan</td>
                  <td>Chanaka</td>
                  <td>01.</td>
                 
                
                    
            </tr>
    
            <tr>
                  <td>Ruwan</td>
                  <td>Chanaka</td>
                  <td>01.</td>
                
                
                    
            </tr>

     
        </table>

        <hr>

<table>

<tr>

  <th colspan=4><h2>Blocked Category Details</h2></th>

<tr> 
  
    <tr>
        <th>Freelancer Name</th>
        <th>Customer Name</th>
        <th>Order Id</th>
       
        
        
    </tr>

  
  <tr>
          <td>Ruwan</td>
          <td>Chanaka</td>
          <td>01.</td>
          
        
            
    </tr>

    <tr>
          <td>Ruwan</td>
          <td>Chanaka</td>
          <td>01.</td>
      
        
            
    </tr>

    <tr>
          <td>Ruwan</td>
          <td>Chanaka</td>
          <td>01.</td>
         
        
            
    </tr>
    </table>
    
<footer>

    <div id="includedContent1"></div>

  </footer>
   

</body>

</html>