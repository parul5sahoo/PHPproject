
      <?php
         $con= mysqli_connect("localhost", "root","", "temp_db") Or 
         die (mysqli_error($con));
         $select_query= "SELECT id, name, category From products";
         $select_query_result=mysqli_query($con,$select_query) or 
         die (mysqli_error($con));
        
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
         <script src="https://maxcdn.bootstrapcdn.com/bootsyrap/3.3.7/js/bootstrap.min.js"></script>
            
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootsyrap/3.3.7/css/bootstrap.min.css"></script>
          <link rel="stylesheet" href="bootsrap/css/bootsrap.min.css"
              type="text/css">  
          <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css"/>
           <link rel="stylesheet" href="bootsrap/css/bootsrap.min.css"
              type="text/css">  
    </head>
    <body>
        <div class="container">
            <?php while ($row=mysqli_fetch_array($select_query_result)){?>
            <div class="row">
                <div class="col-xs-12"><h4>Products</h4></div>
             </div>
            <div class="row">
                <div class="col-xs-2">ID</div>
                <div class="col-xs-10"><?php echo $row['id'];?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">NAME</div>
                <div class="col-xs-10"><?php echo $row['name'];?></div>
             </div>
            <div class="row">
                <div class="col-xs-2">CATEGORY</div>
                <div class="col-xs-10"><?php echo $row['category'];?></div>
             </div>
            <div class="row">
                <div class="col-xs-2">PRODUCTS</div>
                <div class="col-xs-10"><?php echo number($con,$row['id']);?></div>
                
            </div>
            
             <hr/> 
            <?php }?>
         </div>
        
    </body>
</html>
  <?php
  function number($con, $user_id) {
      $products_query= "SELECT category FROM products WHERE id= '$user_id'";
      $products_result= mysqli_query($con, $products_query);
      $number_of_products= mysqli_num_rows($products_result);
      return $number_of_products;
  }