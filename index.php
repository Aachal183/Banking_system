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
.image{width:100%;
       height:500px;
       opacity:0.9;
       background-image: url("bg9.png");
    }
.text{font-size: 50px;
      text-decoration:underline;
      color:#000066;
      margin-top:40px;
      margin-left:100px;
    }
.text2{font-size: 35px;
      color:black;
      margin-top:50px;
      margin-left:110px;
      font-weight:bolder;
    }
.pic{width:600px;
     height:400px;
     float:right;
     margin-top:40px;
     margin-right:120px;
    }
.image1{width:100%;
       height:380px;
       background-image: url("foot.jpg");
    }
.pic1{margin-left:100px;
		  margin-top:50px;
		  height:260px;
		  width:300px;
    }
.pic2{margin-left:140px;
		  margin-top:50px;
		  height:260px;
		  width:300px;
    }
.user{margin-left:210px; 
      font-size:40px;
      margin-top: 10px;
    }
.money{margin-left:150px; 
      font-size:40px;
      margin-top: 10px;
    }
.pic3{margin-left:160px;
		  margin-top:50px;
		  height:260px;
		  width:300px;
    }
.record{margin-left:120px; 
      font-size:40px;
      margin-top: 10px;
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

<div class="container-fluid image">
  <div class="row">
    <div class="col-md-6">
      <h1 class="text">WeLcOmE To ThE TSF BaNk</h1>
      <h2 class="text2">Simplest and Easiest method of transaction. </br>TSF bank provides you the fastest way of</br> transferring your money between multiple</br> users safely and securely.</h2>
        </div>
    <div class="col-md-6">
   <img class="pic" src="bank11.jpg">
    </div>
</div>
</div>

<div class="container-fluid image1">
  <div class="row">
    <div class="col-md-4">
      <img class="pic1" src="customer.jpeg">
    <h3 class="user">User</h3>
   </div>
   <div class="col-md-4">
    <img class="pic2" src="transfer.png">
  <h3 class="money">Money Transfer</h3>
 </div>
 <div class="col-md-4">
  <img class="pic3" src="history.png">
<h3 class="record">Transaction Record</h3>
</div>

</div>
</div>
<script src="js/bootstrap.min.js"> </script>

</body>
</html>