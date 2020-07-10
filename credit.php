<?php

 $conn = mysqli_connect('localhost','root','','credit')
 or die('Error connecting to MySQL server.');



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

        <title>Credit</title>

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

    <body data-spy="scroll" data-target="#header" onload="$('#myModalps').modal('show')"> <!-- onload="$('#myModalps').modal('show')" -->

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
                                    <p>#17 Sheridan, Mandaluyong City</p>
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
                                <a class="navbar-brand custom_navbar-brand" href="#header"><img src="img/ucc.jpg" alt="">
                                    <ul class="today"><?php echo "Today is " . date("l, F d, Y") . "<br>"; ?></ul></a>
                                
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
                               <form  method="post" enctype="multipart/form-data"> <!-- tinanggal action -->
                                <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="username_admin" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password_admin" required>
                                
                              <button type="submit" name="admin_submit">Login</button>
                              </form> 
                            </div>

                    </div>
                    
                </div>
                
            </div>

           <?php 

                    if(isset($_POST['admin_submit'])){

                        $un = mysqli_real_escape_string($conn,$_POST['username_admin']);
                        $pw = mysqli_real_escape_string($conn,$_POST['password_admin']);

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

            <!-- end of admin modal -->
		 
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
                            <h2 style="font-size: 0.6in;"> Welcome to Unahco Central Credit!</h2>
                        </div>
                        
                </section>
        <!--end of banner section-->


        <!--Start of slider section-->
        <section id="slider">
            <?php   $ImageArray = array();

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
                                                              <img src="data:image/jpeg;base64,'.base64_encode($ImageArray[$j]['img_product']).'" /> 
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

        <!--Start of welcome section (white area)-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to Unahco Central Credit</h2>
                            <p>Our mission is to provide you with nutrition and healthcare, because we care</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">                  
                    
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <a data-toggle="modal" data-target="#calendar_modal"><i class="fa fa-calendar"></a></i>

                                    <!----------------- CALENDAR MODAL ------------------->
                                        <!-- Modal -->
                                    <div style="margin-top: 50px;" id="calendar_modal" class="modal fade" role="dialog">
                                        <div style="max-width: 400px;  display: inline-block;  vertical-align: middle; " class="modal-dialog-cal">

                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Calendar</h4>
                                            <ul class="today"><?php echo "Today is " . date("l, F d, Y") . "<br>"; ?></ul>
                                            </div>
                                        <div class="modal-body">
                                           <div id="calendar">

                                           <form name="calControl" onSubmit="return false;" method="post">
                                        <table cellpadding="0" cellspacing="1" border="0">
    <tr>
        <td colspan=7>
            <select class="month_style" name="month" onChange="selectdate()">
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>

                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
            <input type=text class="year_style" name="year"  size=4 maxlength=4>
            <input style="background-color: #008000; border: 1px #eeee; border-radius: 3px;" type="button" class="build_style" name="Go" value="Go to!" onClick="selectDate()">
        </td>
    </tr>
</form>

<form name="calButtons" method="post">
    <tr>
        <td><textarea font="Courier" class="area_style" name="calPage" WRAP=no rows=8 cols=22 disabled></textarea></td>
            <tr>
                <td>
                    <input type=button class="btn_nav" name="previousYear" value=" <<  "  onClick="setPreviousYear()">
                    <input type=button class="btn_nav" name="previousYear" value="  <  "  onClick="setPreviousMonth()">
                    <input style="background-color: red;" type=button class="btn_nav" name="previousYear" value="Today"  onClick="setToday()">
                    <input type=button class="btn_nav" name="previousYear" value="  >  "  onClick="setNextMonth()">
                    <input type=button class="btn_nav" name="previousYear" value="  >> "  onClick="setNextYear()">
                </td>
            </tr>
    </tr>
</table>
</form>
  

</div>
                                        </div>
                                        <div class="modal-footer">
                                                <button style="background-color: #008000;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <h4>calendar</h4>
                                    <p class="today"><?php echo "Today is " . date("l, F d, Y") . "<br>"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                       <a href="#admin_login" data-toggle="modal" ><i class="fa fa-cog"></a></i>
                                    </div>
                                    <h4>administrator</h4>                                
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End of col-md-3-->
                     <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                       <a href="https://drive.google.com/drive/folders/1D0O0smWK3N8jUQAl8M0DPROk7LJzkkKK" data-toggle="modal" ><i class="fa fa-file-text"></a></i>
                                    </div>
                                    <h4>UNIVET E-FLyers</h4>                                
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--End of col-md-3-->
                    
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->


        <!-- battle cry/banner-->
        <section id="battlecry">
        <div id="banner">
                
                <div class="battlecry">
                   <!-- removed the forms and choose file and uplaod to admin.php only the echo of image is left since it only needs to connect to the databse --> 
            <?php
               // battlecry last image uploaded
                // get last inserted ID SELECT MAX(id_orgchart) FROM battlecry

                $img_sql = "SELECT img_battle FROM battlecry WHERE id_battle = (SELECT MAX(id_battle) FROM battlecry) ";
                $img_result = mysqli_query($conn, $img_sql);
                $row = mysqli_fetch_assoc($img_result) ;

                 echo "<img id='product' src=data:image/jpeg;base64," . (base64_encode(($row['img_battle']))) . " style='width:800px;height:200px; margin-left: 19%; margin-bottom: 30%;'>";
                    //EDIT BATTLE CRY IMAGE STYLE
                ?>

                 </div>
        </div>

        </section>

    <!--Start of promote-->
        <section id="promote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_area text-center">
                            <h3>Advertise your Products on Us</h3>
                            <p>Leave a copy of your proposal below and write a message<br>Or email your products at<br><i class="fa fa-envelope"></i> unahcocentralcredit@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="adv">
                            <div class="adv_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                                <div class="text_area">
                                                    <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                               <div class="col-sm-6">
                                                <input type="file" class="form-control" id="attachment" placeholder="Attachment *"></div>   
                                                <button type="submit" class="btn acustom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->

                    <!---------------- CUSTOMER PHILIPPINE MAP ----------------->
                    <div class="col-md-6">
                        <section id="mapph">
                        <div class="map_ph">
                            <div class="title">
                                <h5>Our Customers All Over The Country</h5>
                            </div>
                            <div class="container-map">
                                <img src="img/map.png" alt="Philippines" style="width:350px; max-height: 400px;">
                                    <div class="scroll-up">  
                                        <p>
<!------------------------------------------------------------EDIT CUSTOMER NAME HERE MAP------------------------------------------------------>
                                            <?php echo nl2br(readfile('customer.txt')) ?>
                                        </p>
                                    </div> <!-- END of div scroll-up -->
                                </div>
                            </div>
                    </section> <!-- End of map section inside promote section -->
                    </div><!--End of col-md-6 MAP-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of promote-->       

        
<!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>
                            <p>Contact us for inquiries or suggestions/comments</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span> #17 Sheridan St., Mandaluyong City, Philippines</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+ 858 1000</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>unahcocentralcredit@gmail.com</span></i>
                                </div>
                                <div id="mappic"> <img src="img/googlemap.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="credit.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name_contact" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email_contact" id="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" name="subject_contact" id="subject" placeholder="Subject">
                                                <div class="text_area">
                                                    <textarea name="message_contact" id="msg" class="form-control" cols="30" rows="8" placeholder="Message *"></textarea>
                                                </div>
                                                <button name="contact_btn" type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->


            <?php

                        //use SMTPValidateEmail\Validator as SMTP_Validate_Email;

                    if(isset($_POST['contact_btn']))
                {
                        //This page should not be accessd directly. Need to submit the form.
                        echo '<script language="javascript">';
                        echo "confirm(you need to submit the form)";
                        echo '</script>';

                            $name_contact = $_POST['name_contact']; 
                            $email_contact = $_POST['email_contact'];
                            $subject_contact = $_POST['subject_contact'];
                            $message_contact = $_POST['message_contact'];

                        //validate first
                    if(empty($email_contact) || empty($message_contact)){
                        
                        echo '<script language="javascript">';
                        echo "confirm(Email and message are mandatory!)";
                        echo '</script>';
                        exit;
                        }

                            $email_to_unahco = 'unahcocentralcredit@gmail.com';
                            $email_subject = "New Message Form Contact Us";
                            $email_body = "User: $name_contact \n Email Address: $email_contact \n Message: $message_contact";
                            $headers = "From: unahcocentralcredit@gmail.com\r\n";

                            if (mail($email_to_unahco, $email_subject, $email_body, $headers))
                            {

                            echo '<script language="javascript">';
                            echo 'alert("Sent")';
                            echo '</script>';
                            } else {
                                echo '<script language="javascript">';
                                echo 'alert("Error NOT Sent")';
                                echo '</script>';
                            }
                }
            ?>


        </section>
        <!--End of contact-->


        <section id="privacy_statement">
        <!-- Privacy Statement Modal -->
            <!-- Modal -->
                <div class="modal fade in" id="myModalps" role="dialog" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Privacy Statement</h4>
                            </div>
            <div class="modal-body">


            <h2>Privacy Statement</h2>
                    <br /><br />

                    Unacho Central Credit Respects your privacy and will keep all your personal and sensitive information secure.
                    <br />
                    Please read the Unahco Central Credit Privacy Statement to understand more.
                    <br />

                    <?php
                     $query_privacy = "SELECT * FROM privacy WHERE id_privacy = (SELECT MAX(id_privacy) FROM privacy)  "; 
                     $result_privacy = mysqli_query($conn, $query_privacy);
                     $row_privacy = mysqli_fetch_array($result_privacy)
                                
                        ?>
                    <a href="privacy/<?php echo $row_privacy['file_privacy']; ?>" download>UCC Privacy Statement </a>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Agree</button>
                
              </div>
            </div>
          </div>
        </div>
        <!-- if uncheck windows previous -->
        <script type='text/javascript'>

            function myModal(){

                var dialogShown = $.cookie('dialogShown');

            if (!dialogShown) {
                $(window).load(function(){
                    $( "#myModalps" ).dialog();
                    $.cookie('dialogShown', 1);
                });
                var modal = document.getElementById('myModalps').showModal;
            }
            else {
                $("#myModalps").hide();
            }
            }
    
</script>
        </section>


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