<?php
session_start();
$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password,"bank_system");
if(!$conn){
    die("Connection failed");
} 
$flag=false;

if (isset($_POST["transfer"]))
{
$Sender=$_POST["name"];
$Receiver=$_POST["Receiver"];   /* yaha chnge kru ky mere col name se ?? */ 
$Amount=$_POST["Amount"];
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>banking system</title>
	
	<style type=text/css>
	
	.top{background-color:orange; 
	     height:80px;
		   width:100%;
		}
  .top1{background-color:palevioletred; 
	     height:80px;
		   width:80%;
  }
	#logo{float:left;
        width:38%;
	      height:65%;
        margin-left:10px;
    }
    #logo1{float:right;
        width:38%;
	      height:55%;
      
    }
	.title{text-align:center;
	     
	     margin-top:5px;
	     color:purple;
	     font-size:45px; 
       text-shadow: 2px 2px;
    }
.home{float:left;
		  margin-left: 10px;
		  height:20%;
		  padding-top:8px;
    }
.cust{text-align: center;
		  margin-right:100px;
		  height:20%;
		  padding-top:8px;
    }
.trans{text-align: right;
		  margin-left:150px;
		  height:20%;
		  padding-top:8px;  
    }
.text{font-size:45px;
      color:black;
      text-align:center;
    }
.last{align:center;
      }

</style>
</head>
<body>

<div class="container-fluid top">
  <div class="row">
     <div class="col-md-3">
      <img id="logo"  src="logo1.png"/>
     </div>
	 <div class="col-md-6">
	 <h1 class="title"> (TSF) The Sparks Foundation </h1>
     </div>
	 <div class="col-md-3">
    <img id="logo1"  src="logo1.png"/>
	 </div>
  </div>
  </div>

  <div class="container-fluid top1">
  <div class="row">
<div class="col-md-4">
<h3 class="home"><a href="index.php" style="color:powderblue;"> HOME</a></h3>
  </div>

  <div class="col-md-3">
    <h3 class="cust"><a href="customer.php" style="color:powderblue;">CUSTOMERS</a></h3>
      </div>

<div class="col-md-5">
<h3 class="trans"><a href="transferrecords.php" style="color:powderblue;"> TRANSACTION RECORD</a></h3>
  </div>
</div>
</div>

<?php

$sql = "SELECT * FROM customers WHERE Name='$Sender'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($Amount>$row["Currentbalance"] or $row["Currentbalance"]-$Amount<100){
    echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'customer.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customers` SET Currentbalance=(Currentbalance-$Amount) WHERE Name='$Sender'";
    

if ($conn->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 
  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `customers` SET Currentbalance=(Currentbalance+$Amount) WHERE Name='$Receiver'";

if ($conn->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $conn->error;
}
}
if($flag==true){
$sql = "INSERT INTO `transfer` (`Transfer_id`,`Sender`, `Receiver`, `Amount`) VALUES (NULL,'$Sender','$Receiver','$Amount')";
if ($conn->query($sql) === TRUE) {
  echo "<h1><b class='btn btn-success'> Transaction Successfull </b></h1>" ;
} else 
{
  echo "Error updating record: " . $conn->error;
}
}
}


?>

<script src="js/bootstrap.min.js"> </script>

</body>
</html>