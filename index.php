<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopper | Online Shopping Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Lobster&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    
    <!--menu highlights start-->
 <div class="container pt-5 mt-5">
        <h1>Categories</h1>
            <div class="card-group">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <a href="products.php#watch"> <img src="images/electronics.jpg" class="img-fluid card-img-top" alt="" style="border-radius:0.5rem">
                    <div class="card-body bg-light">
                        <h5 class="card-title  h3 font-weight-bold pt-4 pb-4">Electronics</h5>
                        <p class="card-text">Find the latest Electronics gadgets like mobile phones,laptops,headphones,etc.</p>
                    </a>
                    </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <a href="products.php#watch"> <img src="images/clothing.jpg" class="img-fluid card-img-top" alt="" style="border-radius:0.5rem">
                    <div class="card-body bg-light">
                        <h5 class="card-title  h3 font-weight-bold pt-4 pb-4">Fashion</h5>
                        <p class="card-text">Get trendy fashion, from Clothing to accessories.</p>
                    </a>
                    </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <a href="products.php#watch"> <img src="images/Kitchen.jpg" class="img-fluid card-img-top" alt="" style="border-radius:0.5rem">
                    <div class="card-body bg-light">
                        <h5 class="card-title  h3 font-weight-bold pt-4 pb-4">Home And Kitchen</h5>
                        <p class="card-text">Find all daily needs item at one place, kitchen appliances, utensils, bathroom products,etc.</p>
                    </a>
                    </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <a href="products.php#watch"> <img src="images/sports.jpg" class="img-fluid card-img-top" alt="" style="border-radius:0.5rem">
                    <div class="card-body bg-light">
                        <h5 class="card-title  h3 font-weight-bold pt-4 pb-4">Sports And Outdoors</h5>
                        <p class="card-text">Preparing for a new adventure? we got it covered. Get sports accessories, trekking essentiels here.</p>
                    </a>
                    </div>
                </div>
    </div>
</div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>