
<!DOCTYPE html>
<html>
    <head>
        <title>
            user registration form
        </title>
        <script src="https://maxcdn.bootstrapcdn.com/bootsyrap/3.3.7/js/bootstrap.min.js"></script>
            
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootsyrap/3.3.7/css/bootstrap.min.css"></script>
          <link rel="stylesheet" href="bootsrap/css/bootsrap.min.css"
              type="text/css">  
          <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css" type="text/css"/>
           <link rel="stylesheet" href="bootsrap/css/bootsrap.min.css"
              type="text/css">  
            <meta name="viewport" content="width=device-width, initial scale=1">
          <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <?php
        require 'header.php'
        ?>
        <div class="container jumbotron">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">USER REGISTRATION</div>
                        <div class="panel-body">
                            <form method="post" action="user_registration_script.php">
                                <div class="form-group">
                                    <label for="id">Id</label>
                                    <input type="number" class="form-control" id="id" name="id" placeholder="Enter id. no." required="true">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email id" required="true"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                 <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required="true">
                                </div>
                                 <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                                 <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" required="true">
                                 </div>
                                 <div class="form-group">
                                    <label for="password">PASSWORD</label>
                                    <input type="password" class="form-control" id="password" name="password" required="true" pattern=".{8,}">
                                 </div>
                                    
                                    <br/><br/>
                                    
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       
     </body>
</html>
 
