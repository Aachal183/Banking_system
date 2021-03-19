

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
	      height:65%;
      
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
session_start();
$conn = mysqli_connect("localhost", "root", "", "bank_system");

  /*yaha sender chnge krna h ky mera col wala  sender lena ky ??*/
?>

<div>
<div class="acustomer" style="margin:2%;">
<div class="row">
    <div class="col-sm" style="padding:1% 3%;">
 
    <img  height="50" src="user.png" alt="" >&nbsp;
    
    <span class="font-weight-bold" style="color:#800000;font-size:3em;line-height:1em;">Customer Details</span>
    
        <br><br>
        <div style="font-size:1.2em;">
       <?php
        if (isset($_POST['user']))
        {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $balance=$_POST['balance'];
          $result=mysqli_query($conn,"SELECT * FROM customers WHERE Name='$name'");  /*Email=$user kia name k jaga*/
          while($row=mysqli_fetch_array($result))
          {
            echo "<p><b class='font-weight-bold'>User ID</b> &nbsp;: ".$row['Sr_no.']."</p><br>";
            echo "<p name='sender'><b class='font-weight-bold'>Name&nbsp;&nbsp;</b>&nbsp;&nbsp;: ".$row['Name']."</p><br>";
            echo "<p><b class='font-weight-bold'>Email</b> : ".$row['Email']."</p><br>";
            echo "<p><b class='font-weight-bold'>Balance</b>&nbsp; :&nbsp;<b>&#8377;</b> ".$row['Currentbalance']."</p>";
         
      ?>
      </div>
    </div>

    <div class="col-sm" style="padding:1% 3%;">
        <div >
                    <form action="transfer.php" method="POST">
                        
                    <img  height="50" src="money.jpeg" alt="" >&nbsp;
                    
                    <span class="font-weight-bold" style="color:#800000;font-size:3em;line-height:1em;">Money Transfer</span>
                    <br><br>
                    <b style="font-size:1.2em;">Sender</b> : <span style="font-size:1.2em;">
                    <input type="text"name="name" value="<?php echo $row['Name'] ?>">
                    </span>

                        <br><br><br>

                        <?php
          }}
          ?>
                        <b style="font-size:1.2em;">Receiver:</b>
                <select name="Receiver" id="dropdown" required>
                    <option>Select Receiver</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "bank_system");
                $res = mysqli_query($db, "SELECT * FROM customers WHERE Name!='$name'");  /*yaha Name k jaga Email=$user kia h */
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['Name']."</option>");       /*yaha email chnge kia*/
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="Amount" type="number" style="width:35%;" min="100" required>       <!--min100 req hatao--> 
                        <br><br><br>
                       <input type="submit" class="btn btn-secondary" name="transfer" value="transfer">  <!--id hatao-->
                        </form>
        </div>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>