<?php
require_once('php/header.php');


?>

<body>
<main>
    <section style="text-align: center;background-color:#ab0707;color:#fff; font-style: italic;margin-top:0px;">
        <h1>Elsoltan WebSite Order Page "Hakona Matata" </h1>
        <a href="index.php" class="btn btn-primary">Back</a>
    </section>
    <div class="container text-center"style="margin-top:30px;margin-bottom:30px; ">
        <div class="row">
            
<?php 

$result=getdata();
if($result){
    while($row = mysqli_fetch_assoc($result)){
    
?>
    
        
            
                <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12 details" >
                        <p data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></p>
                        <h3 data-id="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></h3>
                        <p class="type" data-id="<?php echo $row['id']; ?>"><?php echo $row['section']; ?></p>
                        <p class="base" data-id="<?php echo $row['id']; ?>"><?php echo $row['number']; ?></p>
                        <p class="toppings" data-id="<?php echo $row['id']; ?>"><?php echo $row['description']; ?></p>
                        
                        <form action="order.php" method="POST">
                            <input type="hidden" name="id_to_delete" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger z-depth-0">
			            </form>
                </div>
            
<?php
            
        }
    }

?>    
        </div>
    </div>
</main>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript"></script>
<!-- <script src="js/app.js"></script> -->
<script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
</body>
</html>