<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel= "stylesheet" href="home.css">
</head>
<body>
	<div> 
		<h1>welcome</h1>
		<h2>  <?php echo $_SESSION['name']; ?> </h2>
	</div>
    <div class="section">
        <form action="#" class="BG">
                    <h2 class="title">
                        ENTER BLOOD GROUP OF THE PATIENT
                    </h2>
    
                    <div class=" Inputs">
                        <icons class="fa fa-user"></icons>
                        <input type="text" class='UserCont' placeholder="Blood Group"/>
    
    
                    </div>
                    
    
                    <input type="Submit" class="btn btn-solid" value="Search "/>
</div>
</form>

        <div class="container">
            <form action="#" class="BG2">
                <h2 class="title">
                    Registering details of Plasma Donor
                </h2>

                <div class=" Inputs">
                    <icons class="fa fa-user"></icons>
                    <input type="text" class='UserCont' placeholder="Name"/>
                </div>
                <div class=" Inputs">
                    <icons class="fa fa-user"></icons>
                    <input type="text" class='UserCont' placeholder="Blood Group"/>
                </div>
                <div class=" Inputs">
                    <icons class="fa fa-user"></icons>
                    <input type="text" class='UserCont' placeholder="Address"/>
                </div>
                <div class=" Inputs">
                    <icons class="fa fa-user"></icons>
                    <input type="tel" class='UserCont' placeholder="Phone Number"/>
                </div>
                <div class=" Inputs">
                    <icons class="fa fa-user"></icons>
                    <input type="text" class='UserCont' placeholder="Health Complications if any"/>
                </div>



                <input type="Submit" class="btn btn-solid" value="ADD "/>


            </form>




    <div class='logout'>
        <a href="logout.php">Logout</a>
    </div>





    
</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>