<?php
include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RyPhoneMart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info">
        <div class="container-fluid p-2">
            <a href="#" class="navbar-brand">RyPhoneMart</a>
            <button type="button" data-bs-target="#link" data-bs-toggle="collapse" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="link">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#products" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#contact" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#about" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">MAKE YOUR PHONE ORDER</h1>
    <div class="container mt-5 bg-info" style="border-radius: 10px;">
        <form method="POST" class="row g-3 ">
            <div class="col-sm-6">
            <label for="name" class="form-label">Name</label>  
            <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>   
            </div>
            <div class="col-sm-6">
            <label for="phone" class="form-label">Phone Number</label>  
            <input type="text" class="form-control" name="number" placeholder="Enter Phone Number" required>   
            </div>
            <div class="col-sm-12">
            <label for="address" class="form-label">Address</label>  
            <input type="text" class="form-control" name="address" placeholder="Enter Delivery Address" required>   
            </div>
            <div class="col-sm-8">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control"  name="email" placeholder="Enter Email Address" required>
            </div>
            <div class="col-sm-4">
                <label for="phone" class="form-label">Phone Name</label>
                <input type="text" class="form-control"  name="phone_name" placeholder="Enter Phone Name  e.g iPhone 11">
            </div>
            <div class="col-sm-12">
                <label for="message" class="form-label">Phone Specifications</label>
                <textarea class="form-control" id="" cols="30" rows="10"  name="spec" placeholder="Enter specifications of phone you are looking for e.g memory, ram" required></textarea>
            </div>
            <div class="col-sm-12">
                <button type="submit" value="submit" class="btn btn-warning my-3">PRE ORDER</button>
            </div>
        </form>
       
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $number = $_POST['number'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone_name = $_POST['phone_name'];
            $spec = $_POST['spec'];
    
            $sql = "INSERT INTO customer_order (name, number,address, email, phone_name, spec) VALUES ('$name', '$number' ,'$address', '$email', '$phone_name', '$spec')";
            mysqli_query($conn,$sql);
            // if (mysqli_query($conn, $sql)){
            //     echo "Your order is taken, wait like 5 minutes for the feedback";
            // }
            // else{
            //     echo "Error: ". $sql. "<br>". mysqli_error($conn);
            // }
        }
       
        ?>

    <footer class="mt-2">
        <div class="container-fluid bg-dark">
            <div class="row p-2">
                <div class="col-sm-4">
                    <h2 class="text-white text-center">CONTACT US</h2>
                    <div class="text-center p-2">
                        <p class="text-white" style="font-size: 25px;"><i class="fa fa-home"></i> Kampala, Uganda</p>
                        <p class="text-white" style="font-size: 25px;">
                            <i class="fa fa-phone"></i> 07821-69100</p>
                        <p class="text-white" style="font-size: 25px;"><i class="fa fa-envelope-o"></i> info@ryphonemart.com</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h2 class="text-white text-center">QUICK LINKS</h2>
                    <div class=" text-center p-2">
                        <a href="index.php" class="nav-link text-white" style="font-size: 25px;">Home</a>
                        <a href="index.php#products" class="nav-link text-white" style="font-size: 25px;">Products</a>
                        <a href="index.php#contact" class="nav-link text-white" style="font-size: 25px;">Contact Us</a>
                        <a href="index.php#about" class="nav-link text-white" style="font-size: 25px;">About Us</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h2 class="text-white text-center">SOCIAL</h2>
                    <div class=" text-center p-2">
                        <a href="#facebook" class="nav-link text-white" style="font-size: 25px;"><i class="fa fa-facebook"></i>&nbsp;Facebook</a>
                        <a href="#whatsapp" class="nav-link text-white" style="font-size: 25px;"><i class="fa fa-whatsapp"></i>&nbsp;Whatsapp</a>
                        <a href="#instagram" class="nav-link text-white" style="font-size: 25px;"><i class="fa fa-instagram"></i>&nbsp;Instagram</a>
                        <a href="#twitter" class="nav-link text-white" style="font-size: 25px;"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
                    </div>
                </div>
            </div>
            <p class="text-white text-center p-2 my-3">© Copyright 2023-RyPhoneMart. All Rights Reserved</p>
        </div>
    
      </footer>
</body>
</html>