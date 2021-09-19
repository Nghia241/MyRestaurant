<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body>
<section class="navbar">
        <div class ="container">
            <div class="logo">
                <img src ="img/140939784_439964713857728_8942879860414551367_n.png" alt=""  >
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="home.php">Home</a> </li>
                   
                    <li>
                        <a href="categories.php">Categories</a></li>
                    
                    <li>
                        <a href="food.php">Food</a></li>
                    
                    <li>
                    <a href="order.php">Order</a> </li>  
             </div>
            <div class="clearfloat">
            </div>
            <section class="food-search">
        <div class="container ">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <img src="img/140979324_154924476234124_6236411932650011189_n.jpg" alt="Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h2>Food Title</h2>
                        <p class="food-price">150.000VND</p>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name
                    <input type="text" name="full-name" placeholder="E.g. Hoang Tan Tien" class="input-responsive" required>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 09*******" class="input-responsive" required>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. abd@gmail.com" class="input-responsive" required>
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    <input type="submit" name="submit" value="Confirm Order" class="bt bt-primary ">
                    
                </fieldset>
                
            </form>
        </div>
    </section>
    <section class="social">
            <div class ="container text-center">
                <ul>
                    <li>
                        <a href ="#"><img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
                    </li>
                    <li>
                        <a href ="#"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>
                    </li>                       
                </ul>     
            </div>
    </section>
    <section class="footer">
            <div class ="container text-center">
            <p> All rights reserved. Desigend by <a href="#"> Le Minh Nghia</a>.
            </div>
    </section>