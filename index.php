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
    <nav class="navbar navbar-expand-sm bg-info fixed-top p-3">
        <div class="container-fluid p-2">
            <a href="#" class="navbar-brand">RyPhoneMart</a>
            <button type="button" data-bs-target="#link" data-bs-toggle="collapse" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="link">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#products" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <section class="mt-5">
    <!-- carousel -->
    <div id="demo" class="carousel slide"  data-bs-ride="carousel">
        <!-- indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <!-- slide show -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" alt="" class="d-block w-100" style="height: fit-content;">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" alt="" class="d-block w-100" style="height: fit-content;">
            </div>
            <div class="carousel-item">
                <img src="images/4.jpg" alt="" class="d-block w-100" style="height: fit-content;">
            </div>
        </div>
        <!-- left and right controls -->
        <button class="carousel-control-prev" type="button"  data-bs-target="#demo" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
        <button class="carousel-control-next" type="button"  data-bs-target="#demo" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
    </div>
  </section>
  <section class="mt-3">
    <div class="container-fluid bg-warning">
        <p class="text-center" style="font-size: 2rem; font-weight: bold;">Explore the <br> Latest Smartphones <br> at <br> Unbeatable Prices.</p>
    </div>
  </section>
  <section id="products" class="mt-5">
    <h2 class="text-center">PRODUCTS</h2>
    <div class="container mt-5">  
    <div class="row">
        <div class="col-md-3 my-3">
            <div class="card ">
                <img src="images/1.jpg" alt="" class="card-img-top" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Access to the latest smartphones.</h4>
                <p class="card-text">Get your hands on the latest and trending smartphones from top brands at RyPhoneMart’s online store. We regularly update our collection to provide you with the best.</p>
                <a href="order.php" class="btn btn-primary">Order Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card ">
                <img src="images/2.jpg" alt="" class="card-img-top" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Hassle-free shopping experience.</h4>
                <p class="card-text">Shop from the convenience of your home and enjoy a seamless shopping experience with our user-friendly website, easy checkout process, and fast shipping.</p>
                <a href="order.php" class="btn btn-primary">Order Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card " >
                <img src="images/3.jpg" alt="" class="card-img-top" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Access to the latest smartphones.</h4>
                <p class="card-text">Find your ideal smartphone from our collection of top brands and unbeatable prices exclusively at RyPhoneMart.
                </p>
                <a href="order.php" class="btn btn-primary">Order Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card " >
                <img src="images/4.jpg" alt="" class="card-img-top" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Competitive prices and great deals.</h4>
                <p class="card-text">Shop with confidence and enjoy unbeatable deals on all smartphones only at RyPhoneMart. We offer transparent pricing and genuine products.</p>
                <a href="order.php" class="btn btn-primary">Order Now</a>
            </div>
            </div>
        </div>
        </div> 
    </div>
  </section>
  <div class="container-fluid justify-content-center mt-5 bg-success text-white p-2">
    <div>
        <h2 class="card-title text-center">"The quality of the smartphones and service at RyPhoneMart is unbeatable."</h2>
        <img src="images/ryt.jpg" class="rounded-circle mx-auto d-block mt-2" width="200px" height="200px" >
        <p class="text-center mt-2">Richard Yiga</p>
    </div>
  </div>
  
  <section id="contact" class=" mt-5">
    <h2 class="text-center">CONTACT US</h2>
    <div class="container bg-info mt-5" style="border-radius: 10px;">
        <p class="text-center" style="font-weight: bold;">Fill this form and submit</p>
    <form class="form-group" method="POST">
        <input type="text" name="name" class="form-control my-3" placeholder="Name">
        <input type="email" name="email" class="form-control my-3" placeholder="Email">
        <input type="text" name="phone" class="form-control my-3" placeholder="Telephone number">
        <textarea placeholder="Message" name="message" class="form-control my-3" cols="30" rows="10"></textarea>
        <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
    </form>
 </div>
 <?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO customer_info (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    mysqli_query($conn,$sql);
 }
 
 ?>
  </section>
  <section id="about">
    <h2 class="text-center mt-5">ABOUT US</h2>
    <div class="contaner p-2 bg-light text-left mt-5">
        <p class="p-3">Uganda's leading and most reliable online vendor of smartphones and basic consumer electronics in uganda, “RyPhoneMart” is a top-level domain and reliable e-commerce site fully owned, managed and operated by RYPHONEMART (U) LTD</p>
        <p class="p-3">Among our products ; Smartphones (brand new and imported used), among others. All items are covered by a viable warranty and consumer protection policy. We offer timely-nation-wide deliveries to all major towns and districts , in the shortest time possible. Our online inventory matches our available stock/catalogue of products with both brand new and uk pre-owned or foreign used premium products."</p>
        <p class="p-3">With convinience at its best, Mobileshop Uganda aims to restore buyer trust in consumer electronics and the smartphones business by offering a one-stop online shop with exceptional services such as viable warranty policies and fastest deliveries in the industry. Our foreign used stock is certified European and global standard hense assurance of quality products from the international markets to our local consumer. We offer same day delivery since we know the urgency of an order. We strive to serve Ugandans best products at lowest and most competitive prices ever both online and brick and motor stores, without compromising quality. We are Uganda’s Leading Smartphones’ vendor.

        </p>
        <p class="p-3">Thank you for believing in RyPhoneMart.ug</p>
    </div>
  </section>
  <footer class="mt-5">
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
                    <a href="#" class="nav-link text-white" style="font-size: 25px;">Home</a>
                    <a href="#products" class="nav-link text-white" style="font-size: 25px;">Products</a>
                    <a href="#contact" class="nav-link text-white" style="font-size: 25px;">Contact Us</a>
                    <a href="#about" class="nav-link text-white" style="font-size: 25px;">About Us</a>
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