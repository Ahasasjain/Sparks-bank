<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="banking_homepage.css" type="text/css">
    <title>Sparks Bank | Send Money</title>

    <script>
    function myfunction(){
let details = prompt("Please enter Sender's name:");
if(details==null||details==""){
    alert("Transaction Unsuccessful ! make sure you enter correct details.");
}
else{
let amount = prompt("Enter amount to be transfered:");    
if(amount==null||amount==""){
    alert("Transaction Unsuccessful ! make sure you enter correct amount.");
}    
else{
alert("Send Rs. " + amount + " from " + " Ahasas Jain to Rishi Yadav" + "?" );
alert("Your Transaction was successful Rs. "+amount+ " Transfered from Ahasas Jain to Rishi Yadav");
    }
}
    }
</script>
  
</head>
<body>

<header class="heading">
  <a href="banking_homepage.php"><img src="sparks foundation.png" alt="Sparks founfation" height="60" width="70"></a> &nbsp; &nbsp;&nbsp;&nbsp;Welcome To The Sparks Bank
    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
</header>
<br/><br/><br/>

  <span class="nav">
   <button><a href="banking_homepage.php">Home</button></a>
    <button><a href="sendmoney.php">Send money</button></a>
     <button><a href="customer.php">Customers</button></a>
      <button><a href="transactions.php">Transactions</button></a>
      <button><a href="about_us.php">About us</button></a>
     <button><a href="contact_us.php">Contact us</button></a>
     </span>
     <br/><br/>
     <?php
//Conneting to mysql
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database="sparks_bank";
//creating connection
$conn= mysqli_connect($servername , $username , $password , $database);
?>
<?php 
    $sql = "SELECT * FROM customer_list";
    $result = mysqli_query($conn,$sql);
?>

<div class="container" >
    <hr style="background-color: black;color:black;"/>
        <h1 style="margin-left: 10px; margin-top: 20px;
    font-size: 30px;font-weight: bold;
    font-style: italic;text-decoration: underline;">Send Money</h1>
        <hr style="background-color: black;color:black;"/>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr style="margin: 100px; background-color: darkorange;">
                            <th scope="col" class="text-center py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <hr style="background-color: black;color:black;"/>
                            <th scope="col" class="text-center py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            
                            <th scope="col" class="text-center py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            
                            <th scope="col" class="text-center py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            
                            <th scope="col" class="text-center py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            
                            <th scope="col" class="text-center py-2">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send Money&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <br/>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>   
                    <tr style="background-color: rgba(134, 226, 98, 0.675);">
                        <td class="py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['S_no'] ?>&nbsp;</td>
                        <td class="py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['first_name']?>&nbsp;</td>
                        <td class="py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['last_name']?>&nbsp;</td>
                       <td class="py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['Email']?></td>
                        <td class="py-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['Age']?>&nbsp;</td>
                        <td> <button type="button" class="btn" onclick="myfunction();" style="background-color : rgba(238, 94, 226, 0.76);">Send Money</button></td>
                      </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    <hr style="background-color: black;color:black;"/>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<br/><br/><br/><br/>
<footer>
copyright &copy; 2022. All Rights Reserved<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Made by Ahasas Jain
</footer>


</body>
</html>