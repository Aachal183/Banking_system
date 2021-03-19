<?php
    $conn = mysqli_connect("localhost", "root", "", "bank_system");
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
tr:nth-child(even) {background-color:Pink;}
tr:nth-child(odd) {background-color:LightCyan;}

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

<div class="container">
  <div class="row">
<div class="col-md-12">
<h1 class="text"><kbd>TRANSACTION RECORDS</kbd></h1>
  </div>

  <div class="container-fluid" style="margin-top: 25px;">
    <div class="table-responsive-md">   
    <table class="table table-bordered">
        <tr class="thead-dark" style="font-size: 25px;">
          <th>Transfer ID</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount</th>
          
        </tr>

        <?php
        $sql = "SELECT * FROM `transfer` ORDER BY Transfer_id DESC LIMIT 10";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'viewcustomer.php'>";
            echo "<td>". $row['Transfer_id'] . "</td>
            <td>". $row['Sender'] . "</td>
            <td>". $row['Receiver'] . "</td>
            <td>". $row['Amount'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
    </table>
    
  </div>
  </div>
  
<script src="js/bootstrap.min.js"> </script>

  </body>
  </html>