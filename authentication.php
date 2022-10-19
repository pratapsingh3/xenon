<?php      
    include('connection.php');  
    $username = $_POST['femail'];  
    $password = $_POST['fpass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from login where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            
        }  
        else{  
            response.redirect("login.php");  
        }     
?>  

<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>SIGN UP</title>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<link href="assets/bootstrap-4.3.1-dist/css/bootstrap.css" type="text/css" rel="stylesheet"/>
		<link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
		<link href="assets/fontawesome-free-6.2.0-web/css/all.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		
		<main>
			<div class="banner pb-5 innerbox1">
				<div class="bg-white con-page">
					<center class="pt-5 pb-4 dc">
						<h2 class="">Contact Us</h2>
						
						<h5>Any question or remark? Just write us a message!<h5>
					</center>
					<div class="">
						<form class="t-a-l">
						  <div class="mb-3 w-100">
							<label for="exampleInputEmail1" class="form-label">Full Name</label>
							<input type="text" class="form-control" id="exampleInputName">
						  </div>
						  <div class="mb-3 w-100">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3 w-100">
							<label for="exampleInputMessage" class="form-label">Enter your Querry</label>
							<textarea type="text" class="form-control" id="exampleInputTextArea"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-primary mb-5">Submit</button>
						</form>
					</div>
				</div>
				<div class="red-bg text-white con-box p-4">
					<h2 class="pb-3">Contact Information</h2>
					<label class="px-3">Fill up the form and our team will get back to you within 24 hours</label>
					<div class="py-3">
						<i class="fa-solid fa-phone"></i> +91 9549002095
					</div>
					<div class="pb-3">
						<i class="fa-solid fa-envelope"></i> nanusinghrathoregmail.com
					</div>
					<div class="pb-3">
						<i class="fa-solid fa-location-dot"></i> XenonStack ,Mohali
					</div>
					<div class="row">
						<div class="col-xl-6 mt-5">
							<b class="fs-1"><a href="login.php" class="text-white text-decoration-none fs-1">Log out</a></b>
						</div>
						<div class="col-xl-6">
							<div class="circl pb-3">
								<i class="fa-solid fa-circle circl1"></i>
							</div>
							<div class="circl pb-3">
								<i class="fa-solid fa-circle circl1"></i>
								<i class="fa-solid fa-circle circl1 pl-3"></i>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</main>
		
	</body>
</html>
