<?php
session_name('AdminSession');
session_start();
$_SESSION['user'] = true; //this works with if(!isset($_SESSION['user'])){


 $conn = mysqli_connect('localhost','root','','credit')
 or die('Error connecting to MySQL server.');

/* $q = "SELECT * FROM user ";
 $r = mysqli_query($conn, $q);
 $w = mysqli_fetch_array($r);
 $user_user = $w['user_user'];
 $pass_user = $w['pass_user'];

if($user_user != "user_user" && $pass_user == "pass_user"){
        $_SESSION['user_user']="user_user";
        $_SESSION['pass_user']="pass_user";
        header("location:admin.php");
}
else header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']); die;
 */
if(!isset($_SESSION['user'])){
   header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
die();
}

?>

<!--
    Credit/ HomePage
    1. Stylesheet
    -Body-
    2. Header
    -Social Icons and Logos
    -Navigation bar and Logos
    -Nav Bar Dropdowns
    -Nav Bar Quicklinks
    -Nav Bar Search
    3. Page Banner
    4. Slider/Carousel/ Product List
    5. White Welcome Area
    -Calendar Modal
    -Announcement Modal
    -Log in Admin Modal
    6. Battle Cry
    7.Map Customer
    8. Promotion/ Advertisement Area
    9. Contact Us Area
    10. Footer
 -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Admin</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Advent+Pro:400,300,600,700,800' rel='stylesheet' type='text/css'>
        

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">
	

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Header Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                <a href="credit.php"><img src="img/ucc.jpg"></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 zero_mp">
                                <div class="address">
                                    <a href="#promote"><i class="fa fa-home floatleft"></i></a>
                                    <p>#17 Sheridan, Mandaluyong City 1550</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 zero_mp">
                                <div class="phone">
                                    <a href="#contact"><i class="fa fa-phone floatleft"></i></a>
                                    <p>+858 1000</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-4">
                                <div class="social_icon text-right">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="#header"><img src="img/ucc.jpg" alt=""><ul class="today"><?php echo "Today is " . date("l, F d, Y") . "<br>"; ?></ul></a>
                                
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">                                   
                                    <li class="active"><a href="credit.php">Home <span class="sr-only">(current)</span></a></li>
			<li><div class="dropdown">
			<button class="dropbtn">What We Do
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="roles.php">Roles</a>
			<a href="policies.php">Policies / FAQs</a>
            <a href="deliverables.php">Deliverables</a>
			<a href="forms.php">Forms</a>

			</div>
			</div></li>
                                    
                                    
            <li><div class="dropdown">
            <button class="dropbtn">Who We Are
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="orgchart.php">Org Chart</a>
            <a href="gallery.php">Gallery</a>
            <a href="join.php">Join Us</a>
            <a href="#admin_login" data-toggle="modal" >Admin <i class="fa fa-cog"></a></i>
             <!-- Note: For <a> elements, omit data-target (data-target="#admin_login"), and use hhref="#admin_login"  instead: -->
            </div>
            </div></li>

            <!-- Modal log in of admin -->
            <div id="admin_login" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Admin log in content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Admin Log-in</h4>
                        </div>

                            <div class="modal-body">
                               <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- tinanggal action -->
                                <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="username_admin" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password_admin" required>
                                
                              <button type="submit" name="admin_submit">Login</button>
                              </form> 
                              <form action="admin.php" method="post" enctype="multipart/form-data">
                              <label for="old_password">Old Password</label>
                              <input type="password" placeholder="Old Password" name="old_password" required>
                              <label for="username_edit">New Username</label>
                              <input type="text" name="username_edit" placeholder="New Username" required>
                              <label for="password_edit">New Password</label>
                              <input type="password" name="password_edit" placeholder="New Password" required>
                              <button type="submit" name="admin_update">Update</button>
                              </form>
                            </div>

                    </div>
                    
                </div>
                
            </div>

           <?php 

                    if(isset($_POST['admin_submit'])){

                        $un = $_POST['username_admin'];
                        $pw = $_POST['password_admin'];

                      if(!empty($_POST['username_admin']) && !empty($_POST['password_admin'])){

                         $adminsql = "SELECT * FROM user WHERE user_user = '$un' AND pass_user = '$pw' LIMIT 1 ";
                         $adminquery = mysqli_query($conn, $adminsql) or die(mysqli_error());;
                         $adminrow = mysqli_fetch_array($adminquery);
                         $undb = $adminrow['user_user'];
                         $pwdb = $adminrow['pass_user'];

                          if($un == $undb && $pw == $pwdb) 
                             {                                   

                              echo '<script type="text/javascript"> alert("Welcome to Admin") </script>'; 
                             echo '<script type="text/javascript"> window.open("admin.php", "_self");</script>'; 
         
                             //  On Successful Login redirects to admin.php

                             exit();

                            } else
                            {
                                echo '<script type="text/javascript"> alert("Incorrect Input");</script>';
                                echo '<script type="text/javascript"> window.open("?","_self");</script>'; 
                                exit();           
                            }
                    }else {
                        echo '<script type="text/javascript"> alert("Empty Fields") </script>';     
                    }

                    }//end of submit admin log in buttn if condition


            ?>

            <!-- end of LOG IN MODAL -->
            <!-- ADMIN MODAL UPDATE -->
		 
                                            <?php 
                                            if(isset($_POST['admin_update'])){

                                                    $adminsql_update = "SELECT * FROM user";
                                                    $admin_update = mysqli_query($conn, $adminsql_update);

                                                    while($row_update = mysqli_fetch_array($admin_update)){
                                                      $oldpassworddb = $row_update['pass_user'];
                                                  


                                                if(!empty($_POST['old_password'])){

                                                    if($_POST['old_password'] == $oldpassworddb){

                                            $username_edit = $_POST['username_edit'];
                                            $password_edit = $_POST['password_edit'];
                                            $updateadmin = "UPDATE user 
                                                            /* SET in CASE Condition so when input left blank, it will not overwrite as blank */
                                            SET 
                                            user_user = CASE
                                                WHEN '$username_edit' = '' THEN user_user
                                                    ELSE '$username_edit'
                                                        END
                                            , 
                                            pass_user = CASE
                                                WHEN '$password_edit' = '' THEN pass_user
                                                    ELSE '$password_edit'
                                                        END
                                            
                                            /* the condition where it will change the row according to ID input */            
                                            WHERE id_user = '1' ";

                                            $updatea = mysqli_query($conn, $updateadmin) or die('Error:' . mysqli_error($conn));  

                                            if ($updatea) {
                                                echo "<script> alert('Admin Successfully Updated') </script>";
                                            } else {
                                                echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                            }
                                            //else ng hindi equal na old pass                            
                                            } else {
                                                echo "<script> alert('Incorrect Old Password') </script>";
                                                    }  

                                            }else {
                                                echo "<script> alert('Please Input Old Password') </script>";
                                            }  
                                            }//end ng while  
                                        }else {
                                                echo "<script> alert('Empty Fields') </script>";
                                            }
                                        
                                        ?>



		   <li><a href="#promote" >Contact or Advertise</a>

            </li>

			
		    <li><a href="#link"  data-toggle="modal" data-target="#myModal">quicklinks</a>
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">

    			<!-- Modal content-->
    			<div class="modal-content">
      			<div class="modal-header">
       		 <button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">QuickLinks</h4>
     		</div>
      		<div class="modal-body">

        		<!--Start of quicklinks (white area)-->
        <section id="link">
            <div class="container">

             
                   <div class="col-xs-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="https://hronline.unilab.com.ph/"><i class="fa fa-group"></a></i>
                                    </div>
                                    <h4>HR Online</h4>
                                   <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--End of col-md-3-->
                   <div class="col-xs-1">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="https://wise.unilab.com.ph/"><i class="fa fa-key"></a></i>
                                    </div>
                                    <h4>Wise</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-xs-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="../unahco/chat.htm"><i class="fa fa-send-o"></a></i>
                                    </div>
                                    <h4>SendQuick</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-xs-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="https://bayanihanonline.unilab.com.ph/"><i class="fa fa-bank"></a></i>
                                    </div>
                                    <h4>Bayanihan Online</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                   </div>
                     <!--End of col-md-3-->
                    <div class="col-xs-1">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="http://unilab.procurement.ariba.com/"><i class="fa fa-check-circle-o"></a></i>
                                    </div>
                                    <h4>Ariba</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End of col-md-3-->
                    <div class="col-xs-2">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="http://bits.unilab.net.ph/cit/"><i class="fa fa-code"></a></i>
                                    </div>
                                    <h4>CIT/BITS</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End of col-sm-3-->
                    <div class="col-xs-1">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="link_icon">
                                        <a href="http://ibose.unilab.com.ph/"><i class="fa fa-map-signs"></a></i>
                                    </div>
                                    <h4>I-Bose</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End of col-md-3-->

            </div>
            <!--End of container-->
                            <div class="modal-footer">
                                <button style="background-color: #008000;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                           
        </section>
        <!--end of link section-->

      		</div>

    		</div>
 		 		</div>
				</div>
			</li> 
             
           
		    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->

<!---------------------------------------------------------------------------------------BODY----------------------------------------------------->

        <!--Start of welcome banner (white area)-->
                <section id="credit">               
                        <div class="cre_header">
                            <h2 style="font-size: 0.7in;"> Administrator / Edit Pages!</h2>
                        </div>
                        
                </section>
        <!--end of banner section-->


        <!-- Button NAvigation -->
            <section style="margin: auto; display: inline-block; margin-left: 20%; padding-bottom: 30px; " id="navigation">
         <div  class="row">                  
                    <div class="col-md-12">
                        <h2 style="font-family: 'Marvel'; "> Navigation Buttons</h2>

        <a style="padding-right: 10px;" href="#slider"><i class="fa fa-caret-square-o-right"></i> Product Slider</a>
        <a style="padding-right: 10px;" href="#battlecry"><i class="fa fa-crosshairs "></i> BattleCry</a>
        <a style="padding-right: 10px;" href="#roles"><i class="fa fa-cubes"></i> Roles</a>
        <a style="padding-right: 10px;" href="#policy"><i class="fa fa-info-circle"></i> Policy</a>
        <a style="padding-right: 10px;" href="#deliverables"><i class="fa fa-paper-plane-o"></i> Deliverables</a>
        <a style="padding-right: 10px;" href="#forms"><i class="fa fa-pencil-square-o"></i> Forms</a>
        <a style="padding-right: 10px;" href="#orgchart"><i class="fa fa-pie-chart"></i> Orgchart</a>
        <a style="padding-right: 10px;" href="#gallery"><i class="fa fa-image"></i> Gallery</a>
        <a style="padding-right: 10px;" href="#slider_partner"><i class="fa fa-handshake-o"></i> Join Us SLider</a>
        <a style="padding-right: 10px;" href="#admin_login" data-toggle="modal" ><i class="fa fa-cog"></i> Edit Admin <i class="fa fa-cog"></a></i>
        <a href="logout.php"><button type="submit" name="logout" value="Logout" style="font-family: 'Marvel'; border: none;">Logout</button></a>

    </div>
</div>
</section>


<hr>
    <!-- --------------------------------------------------Product Carousel/ Slider---------------------------------------------- -->
<hr>

        <!--Start of slider section-->
        <section id="slider">

            <h3 class="head_product">Product Slider</h3>

            <div class="edit_slider">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action from credit.php to admin.php so when uploaded it will use the admin.php below -->
                <span>
                    <label for="name_product">Product Name</label>
                <input type="text" name="name_product" placeholder="Product Name Required*" required>
                <input style="width: 210px;" type="file" name="file_p" id="file">
                <input type="submit" value="Upload Product" name="upload_product">
                </span>
                <h3 class="head_product2">Delete Product from Slideshow</h3>
                <span>
                    <input type="text" name="id_product" placeholder="Database ID of Product from below.">
                    <input type="submit" name="delete_product">
                </span>

                </form>
        

        <?php
            if(isset($_POST["upload_product"])){
                if(!empty($_POST['name_product'])){
                $check = getimagesize($_FILES["file_p"]["tmp_name"]);
            if($check !== false){
                $image_p = $_FILES['file_p']['tmp_name'];
                $img_product = addslashes(file_get_contents($image_p));

        
        //Insert image content into database
                $insertquery_p = "INSERT into product (name_product, img_product) VALUES ('$name_product','$img_product')";
                $insert_p = mysqli_query($conn, $insertquery_p) or die('Error:' . mysqli_error($conn)); 

            if($insert_p){
                echo "<script> alert('Product uploaded successfully.')</script>";

            }else{
                echo "<script> alert(Product upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }else{echo "<script> alert('Empty Name')</script>";}
        }
            ?>



            <?php 
//DELETE PRODUCT PHP

                    if(isset($_POST['delete_product'])){

                            $id_p = $_POST['id_product'];

                if(!empty($id_product)) {
           

                $deleteprod = "DELETE FROM product WHERE id_product = $id_product"; 
              
                $deletep = mysqli_query($conn, $deleteprod) or die('Error:' . mysqli_error($conn)); 

                if ($deletep)
                {
                   echo "<script> alert('Error Product NOT Deleted) </script>";
                }
                   echo "<script> alert('Product Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID of product to be deleted') </script>";
                }
            }

            ?>


                <?php 
                //output images into slider slideshow

                  $ImageArray = array();

                $queryImages = "SELECT * FROM product ";

                $result_products = mysqli_query($conn,$queryImages);

                if(mysqli_num_rows($result_products) > 0){

                while ($row_products = mysqli_fetch_array($result_products)){

                $ImageArray[] = $row_products;
                                                            }
                                                }

                ?>

                         <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

                                         <!-- Indicators -->
                                        <ol class="carousel-indicators">

                                        <?php

                                            // creating indicators - note that at least one must be set as active

                                            for ($j = 0; $j < count($ImageArray); $j++){

                                                    if ($j == 0){
                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$j.'" class="active"></li>';

                                                    }else{

                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$j.'"></li>';

                                                    }
                                            }
                                        ?>


                                        </ol>
                                        <div class="carousel-inner" role="listbox">

                                    <?php

                                          for ($j = 0; $j < count($ImageArray); $j++){
                                                 //If it is the first image set it as active
                                                  if($j == 0){
                                                      echo '<div class="item active">

                                                            <div  class="slider_overlay">

                                                            <!--Using image id and url  

                                                          <img src="admin.php?id=' .$ImageArray[$j]['img_product'].'" />  -->

                                                           <!-- or using base64_encode -->

                                                           <img src="data:image/jpeg;base64,'.base64_encode($ImageArray[$j]['img_product']).'"/>

                                                    </div>

                                                            </div> 
                                                            <!--End of item With Active--> ';
                                                  }

                                                  else{
                                                      echo '<div class="item">
                                                              <img src="data:image/jpeg;base64,'.base64_encode($ImageArray[$j]['img_product']).'" /> 
                                                            </div>';
                                                  }
                                          }
                                            ?>


                                        </div>

                 <!--   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
                <!--    <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->

            
                                                    <!-- ARROW FOR CAROUSEL SLIDERS PRODUCT LIST AKA SLIDESHOW -->
                                 <a class="left carousel-control" data-target="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>                               

                </div>
                <!--End of Carousel Inner-->

                 <table style="width: 1400px;margin: auto;">
                    <th>Database ID: Product Slider </th>
                    <th>Product Name</th>
                    <th>Product Image</th>

                    <?php
                     $query_p = "SELECT * FROM product"; 
                     $result_p = mysqli_query($conn, $query_p);
                     
                    while ($row_p = mysqli_fetch_array($result_p)) { 
                        ?>

                        <tr style = "text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row_p['id_product'] ?></td>
                        <td><?php echo $row_p['name_product'] ?></td>
                        </tr>
                    <?php } ?>
            </table>

            </div>
            
        </section>
        <!--end of slider section-->


<hr>                

       <!-- -----------------------------------------------------EDIT BATTLE CRY------------------------------------------- -->
<hr>
       <!-- battle cry/banner-->
        <section id="battlecry">
        <div id="banner">
                
                <div class="battlecry">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action from credit.php to admin.php so when uploaded it will use the admin.php below -->
                <span>
                <input style="width: 210px;" type="file" name="file" id="file">
                <input type="submit" value="Upload Image" name="upload_battle">
                </span>

                </form>
        

        <?php
            if(isset($_POST["upload_battle"])){
                $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['file']['tmp_name'];
                $img_battle = addslashes(file_get_contents($image));
                
                $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
                $insertquery = "INSERT into battlecry (img_battle, img_timedate) VALUES ('$img_battle', '$dataTime')";
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 

            if($insert){
                echo "<script> alert('File uploaded successfully.')</script>";

            }else{
                echo "<script> alert(File upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }
            ?>
            <?php
                // battlecry last image uploaded
                // get last inserted ID SELECT MAX(id_orgchart) FROM battlecry

                $img_sql = "SELECT img_battle FROM battlecry WHERE id_battle = (SELECT MAX(id_battle) FROM battlecry) ";
                $img_result = mysqli_query($conn, $img_sql);
                $row = mysqli_fetch_assoc($img_result);
                ?>
                <span>
              <?php  echo "<img id='product' src=data:image/jpeg;base64," . (base64_encode(($row['img_battle']))) ; ?>
                </span>

                 </div>
        </div>

        </section>


       <!-- ---------------------------------------------------------EDIT ROLES--------------------------------------------------- -->
<hr>
       <!------------ROLES------------->
        <section id="roles">

            <h1 style="text-align: center; font-weight: 800; padding-top: 50px;">Roles</h1>

        <!-- ROLES FOR TRANSACTIONAL SERVICES-->

        <div class="transactional_services">

        <div class="output">

                <!-- Transactional Output -->
              <h2 style="text-align: center; padding-top: 15px; font-weight: 800;">Transactional Services Roles <i class="fa fa-exchange"></i></h2>
            <table style="width: 1400px;margin: auto;">
                    <th>Database ID: Transactional Svcs Roles </th>
                    <th>Roles</th>
                    <th>Division Assigned</th>
                    <th>Name of Employee Assigned</th>
                    <th>Email of Employee Assigned</th>
                    <th>Contact of Employee Assigned</th>


                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM roles_transactional_services"; 
                     $result = mysqli_query($conn, $query);
                                
                    // when  " mysqli_fetch_array() expects parameter 1 to be mysqli_result, boolean" it is receiving false meaning empty database OR wrong table name or worng column name etc **
                     
                    while ($row = mysqli_fetch_array($result)) { 
                        ?>

                        <tr style="text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row['id_roles_t_s'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['task_roles_t_s'] ?></td>
                        <td><?php echo $row['division_roles_t_s'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['name_roles_t_s'] ?></td>
                        <td  style="text-transform: none;"><?php echo $row['email_roles_t_s'] ?></td>  
                        <td><?php echo $row['contact_roles_t_s'] ?></td>  
                        </tr>
                    <?php } ?>
            </table>

                    <!-- Update employee table -->

                            <div class="transactional_services">
                    <div class="up">
                        <form action="admin.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <h2 style="text-align: center; padding-top: 15px; margin: auto;">Update 'Transactional Services' Role </h2>
                                    <div class="del_table">
                        <table style="width: 800px;margin: auto;">
                                                    
                    <th style="background-color: #00CED1;">Database ID for Transactional Svcs (Required)* </th>
                    <th style="background-color: #00CED1;">Roles</th>
                    <th style="background-color: #00CED1;">Division Assigned</th>
                    <th style="background-color: #00CED1;">Name of Employee Assigned</th>
                    <th style="background-color: #00CED1;">Email of Employee Assigned</th>
                    <th style="background-color: #00CED1;">Contact of Employee Assigned</th>

                            <tr>
                                        <td><input type="text" name="id_roles_t_s" id="id" placeholder = "ID from table above. Required*" /></td>
                                        <td><input type="text" name="task_roles_t_s" id="task_roles" placeholder="Leave blank for no changes"  /></td>                
                                        <td><input type="text" name="division_roles_t_s" id="division_roles" /></td>
                                        <td><input type="text" name="name_roles_t_s" id="name_roles" /></td>
                                        <td><input type="text" name="email_roles_t_s" id="email_roles" /></td>
                                        <td><input type="text" name="contact_roles_t_s" id="contact_roles" /></td>
                                        <td><button type="submit" name="update_t_s">Update</button></td> 
                            </tr>
                        
                        </table>
                        <?php
                        // php of update change php

                        if(isset($_POST['update_t_s']))
                        {

                            $id_roles_t_s = $_POST['id_roles_t_s'];
                            $task_roles_t_s = $_POST['task_roles_t_s'];
                            $division_roles_t_s = $_POST['division_roles_t_s'];
                            $name_roles_t_s = $_POST['name_roles_t_s'];
                            $email_roles_t_s = $_POST['email_roles_t_s'];
                            $contact_roles_t_s = $_POST['contact_roles_t_s'];

                            if(!empty($id_roles_t_s)){ 

                            $updatequery = "UPDATE roles_transactional_services /* the table in database which you will set */
                                                            /* SET in CASE Condition so when input left blank, it will not overwrite as blank */
                                            SET 
                                            task_roles_t_s = CASE
                                                WHEN '$task_roles_t_s' = '' THEN task_roles_t_s
                                                    ELSE '$task_roles_t_s'
                                                        END
                                            , 
                                            division_roles_t_s = CASE
                                                WHEN '$division_roles_t_s' = '' THEN division_roles_t_s
                                                    ELSE '$division_roles_t_s'
                                                        END
                                            , 
                                            name_roles_t_s = CASE
                                                WHEN '$name_roles_t_s' = '' THEN name_roles_t_s
                                                    ELSE '$name_roles_t_s'
                                                        END
                                            , 
                                            email_roles_t_s = CASE
                                                WHEN '$email_roles_t_s' = '' THEN email_roles_t_s
                                                    ELSE '$email_roles_t_s'
                                                        END
                                            , 
                                            contact_roles_t_s = CASE
                                                WHEN '$contact_roles_t_s' = '' THEN contact_roles_t_s
                                                    ELSE '$contact_roles_t_s'
                                                        END
                                            /* the condition where it will change the row according to ID input */            
                                            WHERE id_roles_t_s = '$id_roles_t_s' ";


                         $update = mysqli_query($conn, $updatequery) or die('Error:' . mysqli_error($conn));  

                                if ($update) {
                                    echo "<script> alert('Record Successfully Updated') </script>";
                                } else {
                                    echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                }                            
                        } else {
                            echo "<script> alert('Input Database ID to be deleted') </script>";
                        }      
                        }    
        ?> 
                    
                                     </div> <!-- end of del_table -->
                                </div> <!-- end of form group -->
                        </form>   
            </div>

            <!-- END OF UPDATE DELI -->

                    <!-- ------------- DELETE employee table ----------------- --> 
                <div class="delete">
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <h2 style="text-align: center; padding-top: 15px;">Delete 'Transactional Services' Role</h2>
                        <div class="del_table">
                <table style="width: 1000px; margin: auto;">
                            <th style="background-color: #00CED1;">Database ID: Transactional Svcs (Required)* </th>
                            <th style="background-color: #00CED1;">Roles</th>
                            <th style="background-color: #00CED1;">Division Assigned</th>
                            <th style="background-color: #00CED1;">Name of Employee Assigned</th>
                            <th style="background-color: #00CED1;">Email of Employee Assigned</th>
                            <th style="background-color: #00CED1;">Contact of Employee Assigned</th>
                            <tr>                                                      
                                    <td><input type="text" name="id_roles_t_s" placeholder = "ID from table above. Required*"/></td>            
                                    <td colspan="5">                                       
                                         <button type="submit" class="button" name="delete_t_s">Delete</button>
                                    </td>
                            </tr>
                </table>        
                           </div>
                        </div>
                    </form>
       <?php
        //php of delete

                    if(isset($_POST['delete_t_s'])){

                            $id_roles_t_s = $_POST['id_roles_t_s'];

                if(!empty($id_roles_t_s)) {
           

                $deletequery = "DELETE FROM roles_transactional_services WHERE id_roles_t_s = $id_roles_t_s"; 
              
                $delete = mysqli_query($conn, $deletequery) or die('Error:' . mysqli_error($conn)); 

                if ($delete)
                {
                   echo "<script> alert('Error NOT Deleted) </script>";
                }
                   echo "<script> alert('Record Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID to be deleted') </script>";
                }
            }     

        ?>       
        </div>

        <!-- End of DELETE DELIV-->
    
                    <!-- Add employee table --> 
                <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add 'Transactional Services' Employee Role</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto; ">

                            <th style="background-color: #00CED1;">DB ID: Transactional Svcs *Auto Increment</th>
                            <th style="background-color: #00CED1;">Roles</th>
                            <th style="background-color: #00CED1;">Division Assigned</th>
                            <th style="background-color: #00CED1;">Name of Employee Assigned</th>
                            <th style="background-color: #00CED1;">Email of Employee Assigned</th>
                            <th style="background-color: #00CED1;">Contact of Employee Assigned</th>
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit_t_s">Add</button>
                        </td>
                                        <td><input type="text" name="task_roles_t_s" id="task_roles"  placeholder = "Ex: Order Entry"  /></td>                
                                        <td><input type="text" name="division_roles_t_s" id="division_roles" placeholder="Ex: Order Management" /></td>
                                        <td><input type="text" name="name_roles_t_s" id="name_roles" placeholder="Ex: Catalina Fajardo" /></td>
                                        <td><input type="text" name="email_roles_t_s" id="email_roles" placeholder="Ex:unahco_credit2@unilab.com.ph" /></td>
                                        <td><input type="text" name="contact_roles_t_s" id="contact_roles" placeholder="You may leave blank inputs" /></td>
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add
            if(isset($_POST['submit_t_s'])){

                            $task_roles_t_s = $_POST['task_roles_t_s'];
                            $division_roles_t_s = $_POST['division_roles_t_s'];
                            $name_roles_t_s = $_POST['name_roles_t_s'];
                            $email_roles_t_s = $_POST['email_roles_t_s'];
                            $contact_roles_t_s = $_POST['contact_roles_t_s'];

                if(!empty($task_roles_t_s) || !empty($division_roles_t_s) || !empty($name_roles_t_s) || !empty($email_roles_t_s)) {
           

                $insertquery = "INSERT INTO roles_transactional_services (task_roles_t_s, division_roles_t_s, name_roles_t_s, email_roles_t_s, contact_roles_t_s ) 
                                  VALUES  ('$task_roles_t_s', '$division_roles_t_s', '$name_roles_t_s', '$email_roles_t_s', '$contact_roles_t_s') "; 
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 
                
                if($insert){

                    echo "<script> alert('Employee Added') </script>";
                }else {
                    echo "<script> alert('Unsuccessful') </script>";
                }

                }else {
                    echo "<script> alert('All Fields Required. Write N/A if not applicable ') </script>";
                }
            }         
        ?>        
        </div>

        <!--End of ADD DEL-->
    </div> <!-- END ROLES FOR TRANSACTIONAL SERVICES-->
<hr>
            <!-- Account Output -->
<hr>
             <h2 style="text-align: center; padding-top: 15px; font-weight: 800;">Account Roles <i class="fa fa-user"></i></h2>
            <table style="width: 1400px;margin: auto;">
                    <th>DB ID: Account Roles </th>
                    <th>Roles</th>
                    <th>Division Assigned</th>
                    <th>Name of Employee Assigned</th>
                    <th>Email of Employee Assigned</th>
                    <th>Contact of Employee Assigned</th>


                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM roles_account"; 
                     $result = mysqli_query($conn, $query);
                                
                    // when  " mysqli_fetch_array() expects parameter 1 to be mysqli_result, boolean" it is receiving false meaning empty database OR wrong table name or worng column name etc **
                     
                    while ($row = mysqli_fetch_array($result)) { 
                        ?>

                        <tr style="text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row['id_roles_a'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['task_roles_a'] ?></td>
                        <td><?php echo $row['division_roles_a'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['name_roles_a'] ?></td>
                        <td  style="text-transform: none;"><?php echo $row['email_roles_a'] ?></td>  
                        <td><?php echo $row['contact_roles_a'] ?></td>  
                        </tr>
                    <?php } ?>
            </table>

             <!-- ROLES FOR ACCOUNT-->

        <div class="account">

        <!-- Update employee table -->

                    <div class="up">
                        <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                            <div class="form-group">
                                    <h2 style="text-align: center; padding-top: 15px; margin: auto;">Update 'Account' Role </h2>
                                    <div class="del_table">
                        <table style="width: 800px;margin: auto;">
                                                    
                    <th style="background-color: #1E90FF;">DB ID: Account (ID Required)* </th>
                    <th style="background-color: #1E90FF;">Roles</th>
                    <th style="background-color: #1E90FF;">Division Assigned</th>
                    <th style="background-color: #1E90FF;">Name of Employee Assigned</th>
                    <th style="background-color: #1E90FF;">Email of Employee Assigned</th>
                    <th style="background-color: #1E90FF;">Contact of Employee Assigned</th>

                            <tr>
                                        <td><input type="text" name="id_roles_a" id="id" placeholder = "ID from above table Required* " /></td>
                                        <td><input type="text" name="task_roles_a" id="task_roles" placeholder="Leave blank for no changes" /></td>                
                                        <td><input type="text" name="division_roles_a" id="division_roles" /></td>
                                        <td><input type="text" name="name_roles_a" id="name_roles" /></td>
                                        <td><input type="text" name="email_roles_a" id="email_roles" /></td>
                                        <td><input type="text" name="contact_roles_a" id="contact_roles" /></td>
                                        <td><button type="submit" name="update_a">Update</button></td> 
                            </tr>
                        
                        </table>
                        <?php
                        // php of update change php

                        if(isset($_POST['update_a']))
                        {

                            $id_roles_a = $_POST['id_roles_a'];
                            $task_roles_a = $_POST['task_roles_a'];
                            $division_roles_a = $_POST['division_roles_a'];
                            $name_roles_a = $_POST['name_roles_a'];
                            $email_roles_a = $_POST['email_roles_a'];
                            $contact_roles_a = $_POST['contact_roles_a'];

                            if(!empty($id_roles_a)){ 

                            $updatequery = "UPDATE roles_account /* the table in database which you will set */
                                                            /* SET in CASE Condition so when input left blank, it will not overwrite as blank */
                                            SET 
                                            task_roles_a = CASE
                                                WHEN '$task_roles_a' = '' THEN task_roles_a
                                                    ELSE '$task_roles_a'
                                                        END
                                            , 
                                            division_roles_a = CASE
                                                WHEN '$division_roles_a' = '' THEN division_roles_a
                                                    ELSE '$division_roles_a'
                                                        END
                                            , 
                                            name_roles_a = CASE
                                                WHEN '$name_roles_a' = '' THEN name_roles_a
                                                    ELSE '$name_roles_a'
                                                        END
                                            , 
                                            email_roles_a = CASE
                                                WHEN '$email_roles_a' = '' THEN email_roles_a
                                                    ELSE '$email_roles_a'
                                                        END
                                            , 
                                            contact_roles_a = CASE
                                                WHEN '$contact_roles_a' = '' THEN contact_roles_a
                                                    ELSE '$contact_roles_a'
                                                        END
                                            /* the condition where it will change the row according to ID input */            
                                            WHERE id_roles_a = '$id_roles_a' ";


                         $update = mysqli_query($conn, $updatequery) or die('Error:' . mysqli_error($conn));  

                                if ($update) {
                                    echo "<script> alert('Record Successfully Updated') </script>";
                                } else {
                                    echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                }                            
                        } else {
                            echo "<script> alert('Input Database ID to be deleted') </script>";
                        }      
                        }    
        ?> 
                    
                                     </div> <!-- end of del_table -->
                                </div> <!-- end of form group -->
                        </form>   
            </div>

            <!-- END OF UPDATE DELI -->

                    <!-- ------------- DELETE employee table ----------------- --> 
                <div class="delete">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                        <div class="form-group">

                            <h2 style="text-align: center; padding-top: 15px;">Delete 'Account' Role</h2>
                        <div class="del_table">
                <table style="width: 1000px; margin: auto;">
                            <th style="background-color: #1E90FF;">DB ID for Account (ID Required) </th>
                            <th style="background-color: #1E90FF;">Roles</th>
                            <th style="background-color: #1E90FF;">Division Assigned</th>
                            <th style="background-color: #1E90FF;">Name of Employee Assigned</th>
                            <th style="background-color: #1E90FF;">Email of Employee Assigned</th>
                            <th style="background-color: #1E90FF;">Contact of Employee Assigned</th>
                            <tr>                                                      
                                    <td><input type="text" name="id_roles_a" placeholder="ID from above table required*" /></td>            
                                    <td colspan="5">                                       
                                         <button type="submit" class="button" name="delete_a">Delete</button>
                                    </td>
                            </tr>
                </table>        
                           </div>
                        </div>
                    </form>
       <?php
        //php of delete

                    if(isset($_POST['delete_a'])){

                            $id_roles_t_s = $_POST['id_roles_a'];

                if(!empty($id_roles_t_s)) {
           

                $deletequery = "DELETE FROM roles_account WHERE id_roles_a = $id_roles_a"; 
              
                $delete = mysqli_query($conn, $deletequery) or die('Error:' . mysqli_error($conn)); 

                if ($delete)
                {
                   echo "<script> alert('Error NOT Deleted) </script>";
                }
                   echo "<script> alert('Record Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID to be deleted') </script>";
                }
            }     

        ?>       
        </div>

        <!-- End of DELETE DELIV-->
    
                    <!-- Add employee table --> 
                <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add 'Account' Employee Role</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto;">

                            <th style="background-color: #1E90FF;">DB ID for Account *Auto Increment</th>
                            <th style="background-color: #1E90FF;">Roles</th>
                            <th style="background-color: #1E90FF;">Division Assigned</th>
                            <th style="background-color: #1E90FF;">Name of Employee Assigned</th>
                            <th style="background-color: #1E90FF;">Email of Employee Assigned</th>
                            <th style="background-color: #1E90FF;">Contact of Employee Assigned</th>
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit_a">Add</button>
                        </td>
                                        <td><input type="text" name="task_roles_a" id="task_roles" /></td>                
                                        <td><input type="text" name="division_roles_a" id="division_roles" /></td>
                                        <td><input type="text" name="name_roles_a" id="name_roles" /></td>
                                        <td><input type="text" name="email_roles_a" id="email_roles" /></td>
                                        <td><input type="text" name="contact_roles_a" id="contact_roles" /></td>
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add

            if(isset($_POST['submit_a'])){

                            $task_roles_a = $_POST['task_roles_a'];
                            $division_roles_a = $_POST['division_roles_a'];
                            $name_roles_a = $_POST['name_roles_a'];
                            $email_roles_a = $_POST['email_roles_a'];
                            $contact_roles_a = $_POST['contact_roles_a'];

                if(!empty($task_roles_a) || !empty($division_roles_a) || !empty($name_roles_a) || !empty($email_roles_a)) {
           

                $insertquery = "INSERT INTO roles_account (task_roles_a, division_roles_a, name_roles_a, email_roles_a, contact_roles_a ) 
                                  VALUES  ('$task_roles_a', '$division_roles_a', '$name_roles_a', '$email_roles_a', '$contact_roles_a') "; 
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 
                
                if($insert){

                    echo "<script> alert('Employee Added') </script>";
                }else {
                    echo "<script> alert('Unsuccessful') </script>";
                }

                }else {
                    echo "<script> alert('All Fields Required. Write N/A if not applicable ') </script>";
                }
            }         
        ?>        
        </div>

        <!--End of ADD DEL-->
    </div> <!-- END ROLES FOR Account-->
<hr>
    <!-- Start of Billing Function Roles ------------- -->
    <hr>
            <!-- Billin Function Output -->
                         <h2 style="text-align: center; padding-top: 15px; font-weight: 800;">Billing Function Roles <i class="fa fa-money"></i></h2>
            <table style="width: 1400px;margin: auto;">
                    <th>DB ID: Billing Function Roles </th>
                    <th>Roles</th>
                    <th>Division Assigned</th>
                    <th>Name of Employee Assigned</th>
                    <th>Email of Employee Assigned</th>
                    <th>Contact of Employee Assigned</th>


                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM roles_billing_function"; 
                     $result = mysqli_query($conn, $query);
                                
                    // when  " mysqli_fetch_array() expects parameter 1 to be mysqli_result, boolean" it is receiving false meaning empty database OR wrong table name or worng column name etc **
                     
                    while ($row = mysqli_fetch_array($result)) { 
                        ?>

                        <tr style="text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row['id_roles_b_f'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['task_roles_b_f'] ?></td>
                        <td><?php echo $row['division_roles_b_f'] ?></td>
                        <td style="font-weight: 800;"><?php echo $row['name_roles_b_f'] ?></td>
                        <td style="text-transform: none;"><?php echo $row['email_roles_b_f'] ?></td>  
                        <td><?php echo $row['contact_roles_b_f'] ?></td>  
                        </tr>
                    <?php } ?>
            </table>

        </div> <!--- End of roles transactional, account, and billing function output class --->
        <!-- after the output. move the edit to admin -->

    
            <!-- Update employee table -->
        <div class="billing_function">

                    <div class="up">
                        <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                            <div class="form-group">
                                    <h2 style="text-align: center; padding-top: 15px; margin: auto;">Update 'Billing Function' Role </h2>
                                    <div class="del_table">
                        <table style="width: 800px;margin: auto;">
                                                    
                    <th style="background-color: #4169E1;">DB ID for 'Billing Fnc' (Required)* </th>
                    <th style="background-color: #4169E1;">Roles</th>
                    <th style="background-color: #4169E1;">Division Assigned</th>
                    <th style="background-color: #4169E1;">Name of Employee Assigned</th>
                    <th style="background-color: #4169E1;">Email of Employee Assigned</th>
                    <th style="background-color: #4169E1;">Contact of Employee Assigned</th>

                            <tr>
                                        <td><input type="text" name="id_roles_b_f" id="id" /></td>
                                        <td><input type="text" name="task_roles_b_f" id="task_roles" /></td>                
                                        <td><input type="text" name="division_roles_b_f" id="division_roles" /></td>
                                        <td><input type="text" name="name_roles_b_f" id="name_roles" /></td>
                                        <td><input type="text" name="email_roles_b_f" id="email_roles" /></td>
                                        <td><input type="text" name="contact_roles_b_f" id="contact_roles" /></td>
                                        <td><button type="submit" name="update_b_f">Update</button></td> 
                            </tr>
                        
                        </table>
                        <?php
                        // php of update change php

                        if(isset($_POST['update_b_f']))
                        {

                            $id_roles_b_f = $_POST['id_roles_b_f'];
                            $task_roles_b_f = $_POST['task_roles_b_f'];
                            $division_roles_b_f = $_POST['division_roles_b_f'];
                            $name_roles_b_f = $_POST['name_roles_b_f'];
                            $email_roles_b_f = $_POST['email_roles_b_f'];
                            $contact_roles_b_f = $_POST['contact_roles_b_f'];

                            if(!empty($id_roles_b_f)){ 

                            $updatequery = "UPDATE roles_billing_function /* the table in database which you will set */
                                                            /* SET in CASE Condition so when input left blank, it will not overwrite as blank */
                                            SET 
                                            task_roles_b_f = CASE
                                                WHEN '$task_roles_b_f' = '' THEN task_roles_b_f
                                                    ELSE '$task_roles_b_f'
                                                        END
                                            , 
                                            division_roles_b_f = CASE
                                                WHEN '$division_roles_b_f' = '' THEN division_roles_b_f
                                                    ELSE '$division_roles_b_f'
                                                        END
                                            , 
                                            name_roles_b_f = CASE
                                                WHEN '$name_roles_b_f' = '' THEN name_roles_b_f
                                                    ELSE '$name_roles_b_f'
                                                        END
                                            , 
                                            email_roles_b_f = CASE
                                                WHEN '$email_roles_b_f' = '' THEN email_roles_b_f
                                                    ELSE '$email_roles_b_f'
                                                        END
                                            , 
                                            contact_roles_b_f = CASE
                                                WHEN '$contact_roles_b_f' = '' THEN contact_roles_b_f
                                                    ELSE '$contact_roles_b_f'
                                                        END
                                            /* the condition where it will change the row according to ID input */            
                                            WHERE id_roles_b_f = '$id_roles_b_f' ";


                         $update = mysqli_query($conn, $updatequery) or die('Error:' . mysqli_error($conn));  

                                if ($update) {
                                    echo "<script> alert('Record Successfully Updated') </script>";
                                } else {
                                    echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                }                            
                        } else {
                            echo "<script> alert('Input Database ID to be deleted') </script>";
                        }      
                        }    
        ?> 
                    
                                     </div> <!-- end of del_table -->
                                </div> <!-- end of form group -->
                        </form>   
            </div>

            <!-- END OF UPDATE DELI -->

                    <!-- ------------- DELETE employee table ----------------- --> 
                <div class="delete">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                        <div class="form-group">

                            <h2 style="text-align: center; padding-top: 15px;">Delete 'Billing Function' Role </h2>
                        <div class="del_table">
                <table style="width: 1000px; margin: auto;">
                            <th style="background-color: #4169E1;">DB ID: 'Billing Fnc' (Required)* </th>
                            <th style="background-color: #4169E1;">Roles</th>
                            <th style="background-color: #4169E1;">Division Assigned</th>
                            <th style="background-color: #4169E1;">Name of Employee Assigned</th>
                            <th style="background-color: #4169E1;">Email of Employee Assigned</th>
                            <th style="background-color: #4169E1;">Contact of Employee Assigned</th>
                            <tr>                                                      
                                    <td><input type="text" name="id_roles_b_f" placeholder="ID from above table required*"/></td>            
                                    <td colspan="5">                                       
                                         <button type="submit" class="button" name="delete_b_f">Delete</button>
                                    </td>
                            </tr>
                </table>        
                           </div>
                        </div>
                    </form>
       <?php
        //php of delete

                    if(isset($_POST['delete_b_f'])){

                            $id_roles_b_f = $_POST['id_roles_b_f'];

                if(!empty($id_roles_b_f)) {
           

                $deletequery = "DELETE FROM roles_billing_function WHERE id_roles_b_f = $id_roles_b_f"; 
              
                $delete = mysqli_query($conn, $deletequery) or die('Error:' . mysqli_error($conn)); 

                if ($delete)
                {
                   echo "<script> alert('Error NOT Deleted) </script>";
                }
                   echo "<script> alert('Record Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID to be deleted') </script>";
                }
            }     

        ?>       
        </div>

        <!-- End of DELETE DELIV-->
    
                    <!-- Add employee table --> 
                <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action="roles.php" to "admin.php" since i moved the php of edit here -->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add 'Billing Function' Employee Role</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto;">

                            <th style="background-color: #4169E1;">DB ID: Billing Fnc *Auto Increment</th>
                            <th style="background-color: #4169E1;">Roles</th>
                            <th style="background-color: #4169E1;">Division Assigned</th>
                            <th style="background-color: #4169E1;">Name of Employee Assigned</th>
                            <th style="background-color: #4169E1;">Email of Employee Assigned</th>
                            <th style="background-color: #4169E1;">Contact of Employee Assigned</th>
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit_b_f">Add</button>
                        </td>
                                        <td><input type="text" name="task_roles_b_f" id="task_roles" /></td>                
                                        <td><input type="text" name="division_roles_b_f" id="division_roles" /></td>
                                        <td><input type="text" name="name_roles_b_f" id="name_roles" /></td>
                                        <td><input type="text" name="email_roles_b_f" id="email_roles" /></td>
                                        <td><input type="text" name="contact_roles_b_f" id="contact_roles" /></td>
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add

            if(isset($_POST['submit_b_f'])){

                            $task_roles_b_f = $_POST['task_roles_b_f'];
                            $division_roles_b_f = $_POST['division_roles_b_f'];
                            $name_roles_b_f = $_POST['name_roles_b_f'];
                            $email_roles_b_f = $_POST['email_roles_b_f'];
                            $contact_roles_b_f = $_POST['contact_roles_b_f'];

                if(!empty($task_roles_b_f) || !empty($division_roles_b_f) || !empty($name_roles_b_f) || !empty($email_roles_b_f)) {
           

                $insertquery = "INSERT INTO roles_billing_function (task_roles_b_f, division_roles_b_f, name_roles_b_f, email_roles_b_f, contact_roles_b_f ) 
                                  VALUES  ('$task_roles_b_f', '$division_roles_b_f', '$name_roles_b_f', '$email_roles_b_f', '$contact_roles_b_f') "; 
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 
                
                if($insert){

                    echo "<script> alert('Employee Added') </script>";
                }else {
                    echo "<script> alert('Unsuccessful') </script>";
                }

                }else {
                    echo "<script> alert('All Fields Required. Write N/A if not applicable ') </script>";
                }
            }         
        ?>        
        </div>

        <!--End of ADD DEL-->
    </div> <!-- END ROLES FOR BILLING FUNCTION ROLES-->


    </section>

        <!----------------------------------------------------------End of  Roles ------------------------------------------>

<hr>
       <!-- EDIT POLICIES AND FAQ -->

 <!--Start of slider section-->
        <section id="policy">

            <h3 class="head_partner">Policy Slider</h3>

            <div class="edit_partner">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action from credit.php to admin.php so when uploaded it will use the admin.php below -->
                <span>
                    <label for="name_policy">Partner Name</label>
                <input type="text" name="name_policy" placeholder="Policy File Name Required*" required>
                <input style="width: 210px;" type="file" name="file_policy" id="file">
                <input type="submit" value="Upload Product" name="upload_policy">
                </span>
            </form>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <h3 class="head_partner2">Delete Partner from Slideshow</h3>
                <span>
                    <input type="text" name="id_policy" placeholder="Database ID of Partner from below.">
                    <input type="submit" name="delete_policy">
                </span>

                </form>
        

        <?php
            if(isset($_POST["upload_policy"])){
                $name_policy = $_POST['name_policy'];
                if(!empty($_POST['name_policy'])){
                $check_policy = getimagesize($_FILES["file_policy"]["tmp_name"]);
            if($check_policy !== false){
                $image_policy = $_FILES['file_policy']['tmp_name'];
                $img_policy = addslashes(file_get_contents($image_policy));

        
        //Insert image content into database
                $insertquery_policy = "INSERT into policy (name_policy, img_policy) VALUES ('$name_policy','$img_policy')";
                $insert_policy = mysqli_query($conn, $insertquery_policy) or die('Error:' . mysqli_error($conn)); 

            if($insert_policy){
                echo "<script> alert('Policy uploaded successfully.')</script>";

            }else{
                echo "<script> alert(Policy upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }else{echo "<script> alert('Empty Name')</script>";}
        }
            ?>



            <?php 
//DELETE PRODUCT PHP

                    if(isset($_POST['delete_policy'])){

                            $id_policy = $_POST['id_policy'];

                if(!empty($id_policy)) {
           

                $deletepolicy = "DELETE FROM policy WHERE id_policy = $id_policy"; 
              
                $deletepoli = mysqli_query($conn, $deletepolicy) or die('Error:' . mysqli_error($conn)); 

                if ($deletepoli)
                {
                   echo "<script> alert('Error Policy NOT Deleted) </script>";
                }
                   echo "<script> alert('Policy Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID of Policy to be deleted') </script>";
                }
            }

            ?>

            <!--Start of policies output-->
            <?php   $array_faq = array();

                $query_faq = "SELECT * FROM policy ";

                $result_faq = mysqli_query($conn,$query_faq);

                if(mysqli_num_rows($result_faq) > 0){

                while ($row_faq = mysqli_fetch_array($result_faq)){

                $array_faq[] = $row_faq;
                                                            }
                                                }

                ?>
                         <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

                                         <!-- Indicators -->
                                        <ol class="carousel-indicators">

                                        <?php

                                            // creating indicators - note that at least one must be set as active

                                            for ($k = 0; $k < count($array_faq); $k++){

                                                    if ($k == 0){
                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$k.'" class="active"></li>';

                                                    }else{

                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$k.'"></li>';

                                                    }
                                            }
                                        ?>


                                        </ol>
                                        <div class="carousel-inner" role="listbox">

                                    <?php

                                          for ($k = 0; $k < count($array_faq); $k++){
                                                 //If it is the first image set it as active
                                                  if($k == 0){
                                                      echo '<div class="item active">

                                                            <div  class="slider_overlay">

                                                            <!--Using image id and url  

                                                          <img src="admin.php?id=' .$array_faq[$k]['img_policy'].'" />  -->

                                                           <!-- or using base64_encode -->

                                                           <img src="data:image/jpeg;base64,'.base64_encode($array_faq[$k]['img_policy']).'"/>

                                                           
                                                    </div>

                                                            </div> 
                                                            <!--End of item With Active--> ';
                                                  }

                                                  else{
                                                      echo '<div class="item">
                                                              <img src="data:image/jpeg;base64,'.base64_encode($array_faq[$k]['img_policy']).'" /> 
                                                            </div>';
                                                  }
                                          }
                                            ?>


                                        </div>
                    <!--End of Item-->

                    
                                                    <!-- ARROW FOR CAROUSEL SLIDERS PRODUCT LIST AKA SLIDESHOW -->
                                 <a class="left carousel-control" data-target="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>                               

                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!-- -------------------------------end of slider section-------------------------------------------    -->
        </section>

       <!-- ------------------------------------------------ EDIT DELIVERABLES ------------------------------------------ -->

<hr>
       <!------------DELIVERABLES------------->

        <section id="deliverables">
            <h1 style="text-align: center; font-weight: 800;">Deliverables <i class="fa fa-random"></i></h1>

        <!-- output employee table from database -->

        <div class="output">
            
            <table style="width: 1400px;margin: auto;">
                    <th>Databse ID</th>
                    <th>Employee Name</th>
                    <th>Employee Task 1 </th>
                    <th>Employee Task 2  </th>
                    <th>Note </th>


                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM deliverables"; 
                     $result = mysqli_query($conn, $query);
                                
                    while ($row = mysqli_fetch_array($result)) { 
                        ?>

                        <tr style="text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['employee_name'] ?></td>
                        <td><?php echo $row['employee_task1'] ?></td>
                        <td><?php echo $row['employee_task2'] ?></td>
                        <td><?php echo $row['note'] ?></td>                    
                        </tr>
                    <?php } ?>
            </table>
        </div>

        <!-- Update employee table -->

                    <div class="up">
                        <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- CHANGE DELIVERABLES.PHP INTO ADMIN.PHP IN THE ACTION= -->
                            <div class="form-group">
                                    <h2 style="text-align: center; padding-top: 15px; margin: auto;">Update Deliverables from Database ID</h2>
                                    <div class="del_table">
                        <table style="width: 1000px;margin: auto;">
                   
                            <th style="background-color: #663399;">Database ID</th>             
                            <th style="background-color: #663399;">Employee Name</th>
                            <th style="background-color: #663399;">Employee Task 1 </th>
                            <th style="background-color: #663399;">Employee Task 2  </th>
                            <th style="background-color: #663399;">Note </th>

                            <tr>
                                        <td><input type="text" name="id" id="id" /></td>
                                        <td><input type="text" name="employee_name" id="employee_name" /></td>                
                                        <td><input type="text" name="employee_task1" id="employee_task1" /></td>
                                        <td><input type="text" name="employee_task2" id="employee_task2" /></td>
                                        <td><input type="text" name="note" id="note" /></td>
                                        <td><button type="submit" name="update">Update</button></td> 
                            </tr>
                        
                        </table>
                        <?php
                        // php of update change chuchu

                        if(isset($_POST['update']))
                        {

                            $id = $_POST['id'];
                            $employee_name = $_POST['employee_name'];
                            $employee_task1 = $_POST['employee_task1'];
                            $employee_task2 = $_POST['employee_task2'];
                            $note = $_POST['note'];

                            if(!empty($id)){

                            $updatequery = "UPDATE deliverables
                                            SET 
                                            employee_name = CASE
                                                WHEN '$employee_name' = '' THEN employee_name
                                                    ELSE '$employee_name'
                                                        END
                                            , 
                                            employee_task1 = CASE
                                                WHEN '$employee_task1' = '' THEN employee_task1
                                                    ELSE '$employee_task1'
                                                        END
                                            , 
                                            employee_task2= CASE
                                                WHEN '$employee_task2' = '' THEN employee_task2
                                                    ELSE '$employee_task2'
                                                        END
                                            , 
                                            note = CASE
                                                WHEN '$note' = '' THEN note
                                                    ELSE '$note'
                                                        END
                                            WHERE id = '$id' ";

                                //inalis ko yung  employee_name = '$employee_name' kasi na oovverwrite ng blank

                         $update = mysqli_query($conn, $updatequery) or die('Error:' . mysqli_error($conn));  

                                if ($update) {
                                    echo "<script> alert('Record Successfully Updated') </script>";
                                } else {
                                    echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                }                            
                        } else {
                            echo "<script> alert('Input Database ID to be deleted') </script>";
                        }      
                        }    
        ?> 
                   
                                     </div> <!-- end of del_table -->
                                </div> <!-- end of form group -->
                        </form>   
            </div>

            <!-- END OF UPDATE DELI -->

                    <!-- ------------- DELETE employee table ----------------- --> 
                <div class="delete">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- CHANGE DELIVERABLES.PHP INTO ADMIN.PHP IN THE ACTION= -->
                        <div class="form-group">

                            <h2 style="text-align: center; padding-top: 15px;">Delete Deliverables Employee</h2>
                        <div class="del_table">
                <table style="width: 1000px; margin: auto;">
                            <th style="background-color: #663399;">Database ID</th>                                
                            <th style="background-color: #663399;">Employee Name</th>
                            <th style="background-color: #663399;">Employee Task 1 </th>
                            <th style="background-color: #663399;">Employee Task 2  </th>
                            <th style="background-color: #663399;">Note </th>
                            <tr>                                                      
                                    <td><input type="text" name="id"/></td>            
                                    <td colspan="4">                                       
                                         <button type="submit" class="button" name="delete">Delete Employee Row</button>
                                    </td>
                            </tr>
                </table>        
                           </div>
                        </div>
                    </form>
       <?php
        //php of delete

                    if(isset($_POST['delete'])){

                            $id = $_POST['id'];

                if(!empty($id)) {
           

                $deletequery = "DELETE FROM deliverables WHERE id=$id"; 
              
                $delete = mysqli_query($conn, $deletequery) or die('Error:' . mysqli_error($conn)); 

                if ($delete)
                {
                   echo "<script> alert('Error NOT Deleted) </script>";
                }
                   echo "<script> alert('Record Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID to be deleted') </script>";
                }
            }     

        ?>       
        </div>

        <!-- End of DELETE DELIV-->
    
                    <!-- Add employee table --> 
                <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- CHANGE DELIVERABLES.PHP INTO ADMIN.PHP IN THE ACTION= -->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add Deliverables Employee</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto;">

                        <th style="background-color: #663399;">Database ID Auto</th>
                        <th style="background-color: #663399;">Employee Name</th> <!-- dropdown or combobox -->
                        <th style="background-color: #663399;">Employee Task 1 </th>
                        <th style="background-color: #663399;">Employee Task 2  </th>
                        <th style="background-color: #663399;">Note </th>
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit">Add Employee</button>
                        </td>
                        <td><input type="text" name="employee_name" id="employee_name" /></td>                 
                        <td><input type="text" name="employee_task1" id="employee_task1" /></td>
                        <td><input type="text" name="employee_task2" id="employee_task2" /></td>
                        <td><input type="text" name="note" id="note" /></td>
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add

            if(isset($_POST['submit'])){

                $employee_name = $_POST['employee_name'];
                $employee_task1 = $_POST['employee_task1'];
                $employee_task2 = $_POST['employee_task2'];
                $note = $_POST['note']; 

                if(!empty($employee_name)) {
           

                $insertquery = "INSERT INTO deliverables(employee_name, employee_task1, employee_task2, note) 
                                  VALUES  ('$employee_name', '$employee_task1', '$employee_task2', '$note') "; 
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 
                
                if($insert){

                    echo "<script> alert('Employee Added') </script>";
                }else {
                    echo "<script> alert('Unsuccessful') </script>";
                }

                }else {
                    echo "<script> alert('Employee name required. Tasks are editable') </script>";
                }
            }         
        ?>        
        </div>

        <!--End of ADD DEL-->

    </section>
<hr>
       <!-------------------------------------End of  Deliverables---------------------------------------->

       <!-- ------------------------------------------------------------------EDIT FORMS----------------------------------------------------- -->
<hr>
        <!-- Forms -->

      <section id = "forms">

                    <h1 style="text-align: center; font-weight: 800;">Forms</h1>

        <!-- output forms table from database -->

        <div class="output">
            
            <table style="width: 1400px;margin: auto;">
                    <th>Database ID</th>                                
                    <th>Form Name</th>
                    <th>Form Link</th>

                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM forms"; 
                     $result = mysqli_query($conn, $query);
                                
                    while ($row = mysqli_fetch_array($result)) { 
                        ?>

                    <tr style="text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row['id_forms'] ?></td>
                        <td><?php echo $row['name_forms'] ?></td> 
                        <td><a                          
                               href="forms/<?php echo $row['file_forms']; ?>" download>
                               <?php echo $row['file_forms']; ?>                                 
                            </a>
                        </td>        
                    </tr>
                    <?php } ?>
            </table>
        </div>
                           
        <!-- Update forms table  download="<?php// echo $row['file_forms']; ?>"  -->

                    <div class="up">
                        <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed action from forms.php to admin.ph -->
                            <div class="form-group">
                                    <h2 style="text-align: center; padding-top: 15px; margin: auto;">Update File Forms</h2>
                                    <div class="del_table">
                        <table style="width: 1000px;margin: auto;">
                                                    
                            <th style="background-color:  #A0522D;">Database ID</th>             
                            <th style="background-color:  #A0522D;">Form Name</th>
                            <th style="background-color:  #A0522D;">Form Link</th>
                            <tr>
                                        <td><input type="text" name="id_forms" id="id" /></td>
                                        <td><input placeholder="May leave blank if you do not wish to change" type="text" name="name_forms" id="name_forms" /></td>
                                        <td><input type="file" name="file_forms" id="file_forms" /></td>                
                                        <td><button type="submit" name="update_forms">Update</button></td> 
                            </tr>
                        
                        </table>
                        <?php
                        // php of update change chuchu

                        if(isset($_POST['update_forms']))
                        {

                            $id_forms = $_POST['id_forms'];
                            $name_forms = $_POST['name_forms'];
                            $file_forms = basename($_FILES['file_forms']['name']); 

                                            //checking if file exsists
                                            if(file_exists("forms/$file_forms")){ 
                                            unlink("forms/$file_forms");

                                            $path =  __DIR__ .'/forms/';
                                            //makes the directory exact. the first error was when the directory was not in the proper directory

                                            //Place it into your "uploads" folder mow using the move_uploaded_file() function
                                            $folder = move_uploaded_file($_FILES['file_forms']['tmp_name'], "forms/$file_forms");

                                    if(!empty($id)){

                                    $updatequery = "UPDATE forms
                                                    SET 
                                                    name_forms = CASE
                                                        WHEN '$name_forms' = '' THEN name_forms
                                                            ELSE '$name_forms'
                                                                END
                                                    , 
                                                    file_forms = CASE
                                                        WHEN '$file_forms' = '' THEN file_forms
                                                            ELSE '$file_forms'
                                                                END
                                                    
                                                    WHERE id_forms = '$id_forms' ";

                                // case so the blank input will not overwrite as blank

                                 $update = mysqli_query($conn, $updatequery) or die('Error:' . mysqli_error($conn));  

                                        if ($update) {
                                            echo "<script> alert('Record Successfully Updated') </script>";
                                        } else {
                                            echo "<script> alert('Error updating' . mysqli_error($con)) </script>";
                                        }                            
                                } else {
                                    echo "<script> alert('Input Database ID to be deleted') </script>";
                                }

                                }else {echo "<script> alert('Error overwriting and updating files in folder and DB ') </script>";}

                        }    
        ?> 
                   
                                     </div> <!-- end of del_table -->
                                </div> <!-- end of form group -->
                        </form>   
            </div>

            <!-- END OF UPDATE forms -->

                    <!-- ------------- DELETE froms  ----------------- --> 
                <div class="delete">
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                            <h2 style="text-align: center; padding-top: 15px;">Delete Form</h2>
                        <div class="del_table">
                <table style="width: 1000px; margin: auto;">
                            <th style="background-color: #A0522D;">Database ID</th>                                
                            <th style="background-color: #A0522D;">Form Delete by ID</th>
                            <tr>                                                      
                                    <td><input type="text" name="id_forms" placeholder="ID from above table required*"/></td>        
                                    <td><button type="submit" class="button" name="delete_forms">Delete Forms</button></td>
                            </tr>
                </table>        
                           </div>
                        </div>
                    </form>
       <?php
        //php of delete

                    if(isset($_POST['delete_forms'])){

                            $id_forms = $_POST['id_forms'];
                            $path =  __DIR__ .'/forms/'; 



                if(!empty($id_forms)) {

                    //getting the file from the id of the database
           
                $res = mysqli_query($conn ,"SELECT file_forms FROM forms WHERE id_forms = $id_forms ");
                //always 2 parameters, the connection to DB and then the selecct from db

                $row = mysqli_fetch_array($res);

                
                $deletefile = unlink($path.$row['file_forms']);
                //for $row the arguement is the column name from the DB
                //error no quotes surrounding var of unlink
                //division by zero error fixed by: making unlink($path/$row['file_forms']); INTO unlink($path.$row['file_forms']);
                //non numeric value encountered fixed by: making unlink($path/$row['file_forms']); INTO unlink($path.$row['file_forms']);
                //unlink(NAN): No such file or directory fixed by: making unlink($path/$row['file_forms']); INTO unlink($path.$row['file_forms']);

                if($deletefile){

                $deletequery = "DELETE FROM forms WHERE id_forms = $id_forms "; 
              
                $delete = mysqli_query($conn, $deletequery) or die('Error:' . mysqli_error($conn)); 

                            if ($delete)
                            {
                               echo "<script> alert('Error NOT Deleted) </script>";
                            } else {
                               echo "<script> alert('Record Deleted!') </script>";             
                            }

                }else {
                    echo "<script> alert('Data in folder and DB are deleted') </script>";
                }
                        }  

                                        }

        ?>       
        </div>

        <!-- End of DELETE form-->
    
                    <!-- Add employee table --> 
                <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- dont forget enctype="multipart/form-data"-->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add Form</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto;">

                        <th style="background-color: #A0522D;">Database ID Auto</th>
                        <th style="background-color: #A0522D;">Form Name</th> 
                        <th style="background-color: #A0522D;">Form Link</th> 
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit_forms">Add Form</button>
                        </td>
                        <td><input type="text" name="name_forms" id="name_forms" /></td>
                        <td><input type="file" name="file_forms" id="file_forms" /></td>                 
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add

            if(isset($_POST['submit_forms'])){

                $name_forms = $_POST['name_forms']; //dont forget semicolon or else it will be an parse error
                $file_forms = basename($_FILES['file_forms']['name']);       
                // dont forget enctype="multipart/form-data" or else the file_forms will be an unidentified index    

                if(!empty($name_forms) && !empty($file_forms)) {


                $path =  __DIR__ .'/forms/';
                //makes the directory exact. the first error was when the directory was not in the proper directory

                $folder = move_uploaded_file($_FILES['file_forms']['tmp_name'], "$path/$file_forms");
                //uploads the uploaded file in the forms folder

                if ($folder) {

                    echo "<script> alert('File Added to Folder') </script>";

                    $insertquery = "INSERT INTO forms (name_forms, file_forms) 
                                  VALUES  ('$name_forms', '$file_forms') "; 
                    $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn));

                    if($insert){

                    echo "<script> alert('File Added to Database') </script>";

                    }else {
                    echo "<script> alert('Unsuccessful') </script>";
                    }

                } else {
                    echo "<script> alert('Unsuccessful Folder Transfer therefore unsuccesfful database register') </script>";
                }

                }else {
                    echo "<script> alert('File Name & File required.' ) </script>";
                }
            }         
        ?>        
        </div>
                <!--End of ADD forms-->
         
      </section>
              <!---------------------------------------------End of FORMS---------------------------------------->
<hr>
       <!-- ---------------------------------------EDIT ORG CHART------------------- -->
               <!--Start of ORG CHart -->
    <section style="margin-left: 23%;" id="orgchart">    
            <h1 style="margin-left: 15%;">Unahco Central Credit Organizational Chart</h1>

        <div class="orgchart">
                <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed orgchart.php to admin.php -->
                <span>
                <input type="file" name="file" id="file">
                <input type="submit" value="Upload Image" name="upload">
                </span>

                </form>
        </div>

        <?php
            if(isset($_POST["upload"])){
                $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['file']['tmp_name'];
                $img_orgchart = addslashes(file_get_contents($image));
                
                $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
                $insertquery = "INSERT into orgchart (img_orgchart, img_timedate) VALUES ('$img_orgchart', '$dataTime')";
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 

            if($insert){
                echo "<script> alert('File uploaded successfully.')</script>";

            }else{
                echo "<script> alert(File upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }
            ?>
            <?php
               // orgchart last image uploaded
                // get last inserted ID SELECT MAX(id_orgchart) FROM orgchart

                $img_sql = "SELECT img_orgchart FROM orgchart WHERE id_orgchart = (SELECT MAX(id_orgchart) FROM orgchart) ";
                $img_result = mysqli_query($conn, $img_sql);
                $row = mysqli_fetch_assoc($img_result) ;//or die(mysqli_error($conn)); nawawala buo page
                ?>
                <span>
            <?php
                echo "<img src=data:image/jpeg;base64," . (base64_encode(($row['img_orgchart'])));
                // . " style='width:850px;height:800px; margin-left: 15%;'>"
            ?>
            </span>
        </section>

       <!-- -------------------------------------EDIT GALLERY------------------------------------ -->
       <hr>


        <!--Start of gallery section -->
  <section id="gallery">    
  <h1>Most Beautiful Faces Gallery Credit Department</h1>

            <div class="edit_slider">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action from credit.php to admin.php so when uploaded it will use the admin.php below -->
                <span>
                    <label for="name_gallery">Product Name</label>
                <input type="text" name="name_gallery" placeholder="Gallery Name Required*" required>
                <input style="width: 210px;" type="file" name="file_gallery" id="file">
                <input type="submit" value="Upload Product" name="upload_gallery">
                </span>
                <h3 class="head_product2">Delete Gallary Image from Slideshow</h3>
                <span>
                    <input type="text" name="id_gallery" placeholder="Database ID of Gallery Image from below.">
                    <input type="submit" name="delete_gallery">
                </span>

                </form>
        

        <?php
            if(isset($_POST["upload_gallery"])){
                if(!empty($_POST['name_gallery'])){
                $check_gallery = getimagesize($_FILES["file_gallery"]["tmp_name"]);
            if($check_gallery !== false){
                $image_gallery = $_FILES['file_gallery']['tmp_name'];
                $img_gallery = addslashes(file_get_contents($image_gallery));

        
        //Insert image content into database
                $insertquery_g = "INSERT into gallery (name_gallery, img_gallery) VALUES ('$name_gallery','$img_gallery')";
                $insert_g = mysqli_query($conn, $insertquery_g) or die('Error:' . mysqli_error($conn)); 

            if($insert_g){
                echo "<script> alert('Gallery uploaded successfully.')</script>";

            }else{
                echo "<script> alert(Gallery upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }else{echo "<script> alert('Empty Name')</script>";}
        }
            ?>



            <?php 
//DELETE PRODUCT PHP

                    if(isset($_POST['delete_gallery'])){

                            $id_p = $_POST['id_gallery'];

                if(!empty($id_gallery)) {
           

                $deleteprod = "DELETE FROM gallery WHERE id_gallery = $id_gallery"; 
              
                $deletep = mysqli_query($conn, $deleteprod) or die('Error:' . mysqli_error($conn)); 

                if ($deletep)
                {
                   echo "<script> alert('Error Gallery NOT Deleted) </script>";
                }
                   echo "<script> alert('Gallery Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID of image to be deleted') </script>";
                }
            }

            ?>

   
<?php   $ImageArray_gallery = array();

                $queryImages_g = "SELECT * FROM gallery ";

                $result_gallery = mysqli_query($conn,$queryImages_g);

                if(mysqli_num_rows($result_gallery) > 0){

                while ($row_gallery = mysqli_fetch_array($result_gallery)){

                $ImageArray_gallery[] = $row_gallery;
                                                            }
                                                }

                ?>
                         <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

                                         <!-- Indicators -->
                                        <ol class="carousel-indicators">

                                        <?php

                                            // creating indicators - note that at least one must be set as active

                                            for ($g = 0; $g < count($ImageArray_gallery); $g++){

                                                    if ($g == 0){
                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$g.'" class="active"></li>';

                                                    }else{

                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$g.'"></li>';

                                                    }
                                            }
                                        ?>


                                        </ol>
                                        <div class="carousel-inner" role="listbox">

                                    <?php

                                          for ($g = 0; $g < count($ImageArray_gallery); $g++){
                                                 //If it is the first image set it as active
                                                  if($g == 0){
                                                      echo '<div class="item active">

                                                            <div  class="slider_overlay">

                                                            <!--Using image id and url  

                                                          <img src="admin.php?id=' .$ImageArray_gallery[$k]['img_gallery'].'" />  -->

                                                           <!-- or using base64_encode -->

                                                           <img src="data:image/jpeg;base64,'.base64_encode($ImageArray_gallery[$g]['img_gallery']).'"/>


                                                    </div>

                                                            </div> 
                                                            <!--End of item With Active--> ';
                                                  }

                                                  else{
                                                      echo '<div class="item">
                                                              <img src="data:image/jpeg;base64,'.base64_encode($ImageArray_gallery[$g]['img_gallery']).'" /> 
                                                            </div>';
                                                  }
                                          }
                                            ?>


                                        </div>
                    <!--End of Item-->

                    
                                                    <!-- ARROW FOR CAROUSEL SLIDERS PRODUCT LIST AKA SLIDESHOW -->
                                 <a class="left carousel-control" data-target="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>                               

                </div>
                <!--End of Carousel Inner-->
            </div>
</div>
</section>


       <hr>
       <!-- EDIT JOIN US -->


 <!--Start of slider section-->
        <section id="slider_partner">

            <h3 class="head_partner">Product Slider</h3>

            <div class="edit_partner">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- changed the action from credit.php to admin.php so when uploaded it will use the admin.php below -->
                <span>
                    <label for="name_partner">Partner Name</label>
                <input type="text" name="name_partner" placeholder="Partner Name Required*" required>
                <input style="width: 210px;" type="file" name="file_partner" id="file">
                <input type="submit" value="Upload Product" name="upload_partner">
                </span>
            </form>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <h3 class="head_partner2">Delete Partner from Slideshow</h3>
                <span>
                    <input type="text" name="id_partner" placeholder="Database ID of Partner from below.">
                    <input type="submit" name="delete_partner">
                </span>

                </form>
        

        <?php
            if(isset($_POST["upload_partner"])){
                $name_partner = $_POST['name_partner'];
                if(!empty($_POST['name_partner'])){
                $check_partner = getimagesize($_FILES["file_partner"]["tmp_name"]);
            if($check_partner !== false){
                $image_partner = $_FILES['file_partner']['tmp_name'];
                $img_partner = addslashes(file_get_contents($image_partner));

        
        //Insert image content into database
                $insertquery_partner = "INSERT into partner (name_partner, img_partner) VALUES ('$name_partner','$img_partner')";
                $insert_partner = mysqli_query($conn, $insertquery_partner) or die('Error:' . mysqli_error($conn)); 

            if($insert_partner){
                echo "<script> alert('Partner uploaded successfully.')</script>";

            }else{
                echo "<script> alert(Partner upload failed, please try again.') </script>";
            } 
            }else{
                echo "<script> alert('Please select an image file to upload.')</script>";
            }
            }else{echo "<script> alert('Empty Name')</script>";}
        }
            ?>



            <?php 
//DELETE PRODUCT PHP

                    if(isset($_POST['delete_partner'])){

                            $id_partner = $_POST['id_partner'];

                if(!empty($id_partner)) {
           

                $deletepartner = "DELETE FROM partner WHERE id_partner = $id_partner"; 
              
                $deletepart = mysqli_query($conn, $deletepartner) or die('Error:' . mysqli_error($conn)); 

                if ($deletepart)
                {
                   echo "<script> alert('Error Partner NOT Deleted) </script>";
                }
                   echo "<script> alert('Partner Deleted!') </script>";             
                }else {
                    echo "<script> alert('Input Database ID of partner to be deleted') </script>";
                }
            }

            ?>


                <?php 
                //output images into slider slideshow

                  $ImageArray_partner = array();

                $queryImages_p = "SELECT * FROM partner ";

                $result_partner = mysqli_query($conn,$queryImages_p);

                if(mysqli_num_rows($result_partner) > 0){

                while ($row_partner = mysqli_fetch_array($result_partner)){

                $ImageArray_partner[] = $row_partner;
                                                            }
                                                }

                ?>
                         <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

                                         <!-- Indicators -->
                                        <ol class="carousel-indicators">

                                        <?php

                                            // creating indicators - note that at least one must be set as active

                                            for ($k = 0; $k < count($ImageArray_partner); $k++){

                                                    if ($k == 0){
                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$k.'" class="active"></li>';

                                                    }else{

                                                        echo ' <li data-target="#carousel-example-generic" data-slide-to="'.$k.'"></li>';

                                                    }
                                            }
                                        ?>


                                        </ol>
                                        <div class="carousel-inner" role="listbox">

                                    <?php

                                          for ($k = 0; $k < count($ImageArray_partner); $k++){
                                                 //If it is the first image set it as active
                                                  if($k == 0){
                                                      echo '<div class="item active">

                                                            <div  class="slider_overlay">

                                                            <!--Using image id and url  

                                                          <img src="admin.php?id=' .$ImageArray_partner[$k]['img_partner'].'" />  -->

                                                           <!-- or using base64_encode -->

                                                           <img src="data:image/jpeg;base64,'.base64_encode($ImageArray_partner[$k]['img_partner']).'"/>

                                                           
                                                            <div class="carousel-caption">
                                                            <div class="slider_text">
                                                                
                                                                <h2>Ceva</h2>
                                                                <h3>Product Price</h3>
                                                                <p>Slogan</p>
                                    
                                                                </div>
                                                        </div>
                                                    </div>

                                                            </div> 
                                                            <!--End of item With Active--> ';
                                                  }

                                                  else{
                                                      echo '<div class="item">
                                                              <img src="data:image/jpeg;base64,'.base64_encode($ImageArray_partner[$k]['img_partner']).'" /> 
                                                            </div>';
                                                  }
                                          }
                                            ?>


                                        </div>
                    <!--End of Item-->

                 <!--   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
                <!--    <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->

            
                                                    <!-- ARROW FOR CAROUSEL SLIDERS PRODUCT LIST AKA SLIDESHOW -->
                                 <a class="left carousel-control" data-target="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>                               

                </div>
                <!--End of Carousel Inner-->

                 <table style="width: 1400px;margin: auto;">
                    <th>Database ID: Partner Slider </th>
                    <th>Partner Name</th>
                    <th>Partner Image</th>

                    <?php
                     $query_partner = "SELECT * FROM partner"; 
                     $result_partner = mysqli_query($conn, $query_partner);
                     
                    while ($row_partner = mysqli_fetch_array($result_partner)) { 
                        ?>

                        <tr style = "text-transform: uppercase; font-weight: 500;">
                        <td><?php echo $row_partner['id_partner'] ?></td>
                        <td><?php echo $row_partner['name_partner'] ?></td>
                        </tr>
                    <?php } ?>
            </table>

            
        </section>
        <!--end of slider section-->


       <!-- end of join -->


       <!-- Privacy Statement -->
       <section id="privacy_statement" style="box-shadow: 1px 2px black; margin-left: 20%;">

        <div class="add">
                    <form action="admin.php" method="post" enctype="multipart/form-data"> <!-- dont forget enctype="multipart/form-data"-->
                        <div class="form-group">

                            <h2 style="text-align: center;">Add Privacy Statement</h2>
                        <div class="del_table">
                <table style="width: 900px;margin: auto;">

                        <th style="background-color: #A0522D;">Database ID Auto</th>
                       
                        <th style="background-color: #A0522D;">Privacy statement Link</th> 
                    <tr> 
                        <td>
                            <button type="submit" class="button" name="submit_privacy">Add Form</button>
                        </td>
                        <td><input type="file" name="file_privacy"  /></td>                 
                    </tr>
                </table>
                           </div>
                        </div>
                    </form>

       <?php
        //php of add

            if(isset($_POST['submit_privacy'])){

               
                $file_privacy = basename($_FILES['file_privacy']['name']);       
                // dont forget enctype="multipart/form-data" or else the file_forms will be an unidentified index    

                if(!empty($file_privacy)) {


                $path_privacy =  __DIR__ .'/privacy/';
                //makes the directory exact. the first error was when the directory was not in the proper directory

                $folder_privacy = move_uploaded_file($_FILES['file_privacy']['tmp_name'], "$path_privacy/$file_privacy");
                //uploads the uploaded file in the forms folder

                if ($folder_privacy) {

                    echo "<script> alert('File Added to Folder') </script>";

                    $insertquery_privacy = "INSERT INTO privacy (file_privacy) 
                                  VALUES  ( '$file_privacy') "; 
                    $insert_privacy = mysqli_query($conn, $insertquery_privacy) or die('Error:' . mysqli_error($conn));

                    if($insert_privacy){

                    echo "<script> alert('File Added to Database') </script>";

                    }else {
                    echo "<script> alert('Unsuccessful') </script>";
                    }

                } else {
                    echo "<script> alert('Unsuccessful Folder Transfer therefore unsuccesfful database register') </script>";
                }

                }else {
                    echo "<script> alert('File Name & File required.' ) </script>";
                }
            }         
        ?>        
        </div>
    </section>
                <!--End of ADD forms-->

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&#169 2018 - Design By <span> CountessErin &#9834</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By CountessErin &#9834</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->

        <!-- Privacy Statement Modal -->
            <!-- Modal -->
                <div class="modal fade" id="myModalps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Privacy Statement</h4>
                            </div>
      <div class="modal-body">



        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
            <h2>Privacy Statement</h2>
                    <br /><br />
            <input type="checkbox" id="checkbox"/>
                <label for="checkbox">I Agree to Privacy Statement</label>
        Checkbox is checked
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



        <!--Scroll to top-->
        <a href="#header" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>

        <!-- cALENDAR FUNCTION JS -->
        <script src="js/function.js"></script>

        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>