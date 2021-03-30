
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
	      height:55%;
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
tr:nth-child(even) {background-color:PaleTurquoise;}
tr:nth-child(odd) {background-color:NavajoWhite;}

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
<h1 class="home"><a href="index.php" style="color:powderblue;"> HOME</a></h1>
  </div>

  <div class="col-md-3">
    <h1 class="cust"><a href="customers.php" style="color:powderblue;">CUSTOMERS</a></h1>
      </div>

<div class="col-md-5">
<h1 class="trans"><a href="transferrecords.php" style="color:powderblue;"> TRANSACTION RECORD</a></h1>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
<div class="col-md-12">
<h1 class="text"><kbd>ALL CUSTOMERS</kbd></h1>
  </div>

  <div class="container-fluid" style="margin-top: 25px;">
    <div class="table-responsive-md">   
    <table class="table table-bordered">
        <tr class="thead-dark" style="font-size: 25px;">
          <th>Sr_no.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Current Balance</th>
          <th>Operation</th>
        </tr>

    <?php
        $query = "select * from customers";
        $query_run =mysqli_query($conn,$query);

while($result= mysqli_fetch_array($query_run))
            {
              ?>
               <tr>
               <form  action='customerdetails.php'method ='post'>
              
               <td><input type="text"name="srno" value="<?php echo $result['Sr_no.']?>"></td>
               
               <td><input type="text"name="name" value="<?php echo $result['Name']?>"></td>
               
               <td><input type="text"name="email" value="<?php echo $result['Email']?>"></td>
               
               <td><input type="text"name="balance" value="<?php echo $result['Currentbalance']?>"></td>
               
             <td><center> <input type='submit' class='btn btn-secondary' name='user'  value="Transfer"></center></td>
              </form>
              </tr>
              <?php
        }
        ?>

        </table>
  </div>
  </div>
  
<script src="js/bootstrap.min.js"> </script>

  </body>
  </html>