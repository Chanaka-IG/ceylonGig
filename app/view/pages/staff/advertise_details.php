
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


    <link rel="stylesheet" href="../../assets/css/staff/advertise_details.css " type="text/css">

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

      <script> 
        $(function(){
          $("#includedContent2").load('navigation.php'); 
        });
      </script> 



  </head>

  <body>
    <header>
      
      <div id="includedContent"></div>
    </header>

    <!-- Siddebar-->

    <div id="includedContent2"></div>
          
   

      <table>
          
          <tr>

             <th colspan=4><h2>Adevertiser Requests</h2></th>

           <tr> 

        <tr>
            <th>Advertiser Name</th>
            <th>Advertiser ID</th>
            <th>Comoany Name</th>
            <th>View Advertise</th>
            
            
        </tr>

      
        <tr>
          <td>ABC</td>
          <td>Chanaka</td>
          <td>011</td>
          <td><a href="view_advertise.php">View</a></td>
        
        
        </tr>

        <tr>
          <td>ABC</td>
          <td>Chanaka</td>
          <td>011</td>
          <td><a href="view_advertise.php">View</a></td>
            
        
        </tr>

        <tr>
          <td>ABC</td>
          <td>Chanaka</td>
          <td>011</td>
          <td><a href="view_advertise.php">View</a></td>
            
        
        </tr>
  
      </table>


        <footer>
          <div id="includedContent1"></div>
        </footer>
      

  </body>

</html>