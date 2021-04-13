<?php
require_once('php/header.php');


?>

<body>
<main>
    <div class="container text-center">
        <div class="row">
            
<?php 

$result=getdata();
if($result){
    while($row = mysqli_fetch_assoc($result)){
    
?>
    
        
            
                <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12 details">
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
    <?php
    require_once('php/footer.php');?>