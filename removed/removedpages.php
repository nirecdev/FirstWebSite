<?php

 $conn = mysqli_connect('localhost','root','','credit');

/* check if server is alive */
if (mysqli_ping($conn)) {
 echo '<script language="javascript">';
 echo 'confirm("Connection to Database is ok!")';
 echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'confirm("Error", mysql_error($conn))';
    echo '</script>';
}
/*if ('confirm('Agree to terms')') {
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('');
    window.history.back()
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You pressed Cancel you are now being redirected');
    window.history.back()
    </script>");
}*/

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->






<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Gallery</title>

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
                                 <a href="credit.php"><img src="../credit/img/logo.jpg"></a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>#17 Sheridan, Mandaluyong City 1550</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
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
                                <a class="navbar-brand custom_navbar-brand" href="#header"><img src="img/ucc.jpg" alt=""></a>
                                
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
            <a href="admin.php">Administrator</a>
            </div>
            </div></li>

         
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
<!-- <div class="row">

                    <div class="col-md-10">
                        <div class="lin_header">
                            <h2>QuickLinks</h2>
                            <p>Our mission is to provide you with nutrition and healthcare, because we care</p>
                        </div>
                    </div> 

                </div> -->
                <!--End of row--> 
             
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
        </section>
        <!--end of link section-->

            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
            </div>
                </div>
                </div>
            </li> 

            <li><div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" style="border-radius: 5px 5px 5px 5px; color: #008000"><i class="fa fa-search"></i></button>
    </form>
  </div></li>


            
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


<!-------------------------------------------------------------------BODY------------------------------------------------------------------------->

        <!--Start of gallery section PRODUCT LIST-->
  <section id="gallery">    
  <h1>Most Beautiful Faces Gallery Credit Department</h1>
<div class="gallery cf">
  <div>
    <img src="img/gallery1.jpg" />
  </div>
  <div>
    <img src="img/gallery2.jpg" />
  </div>
  <div>
    <img src="img/gallery3.jpg" />
  </div>
   <div>
    <img src="img/gallery4.jpg" />
  </div>
  <div>
    <img src="img/gallery5.jpg" />
  </div>
  <div>
    <img src="img/gallery6.jpg" />
  </div>
  <div>
    <img src="/img/gallery7.jpg" />
  </div>
  <div>
    <img src="img/gallery8.jpg" />
  </div>
  <div>
    <img src="img/gallery9.jpg" />
  </div>
  <div>
    <img src="img/gallery10.jpg" />
  </div>
  <div>
    <img src="img/gallery11.jpg" />
  </div>
  <div>
    <img src="img/gallery12.jpg" />
  </div>
  <div>
    <img src="img/gallery13.jpg" />
  </div>
  <div>
    <img src="img/gallery14.jpg" />
  </div>
    <div>
    <img src="img/gallery15.jpg" />
  </div>
  <div>
    <img src="img/gallery16.jpg" />
  </div>
  <div>
    <img src="img/gallery17.jpg" />
  </div>
    <div>
    <img src="img/gallery18.jpg" />
  </div>
  <div>
    <img src="img/gallery19.jpg" />
  </div>
  <div>
    <img src="img/gallery20.jpg" />
  </div>
    <div>
    <img src="img/gallery21.jpg" />
  </div>
  <div>
    <img src="img/gallery22.jpg" />
  </div>
  <div>
    <img src="img/gallery23.jpg" />
  </div>
    <div>
    <img src="img/gallery24.jpg" />
  </div>
    <div>
    <img src="img/gallery25.jpg" />
  </div>



</div>
</section>
        


        <!--Start of welcome section (white area)-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to Credit</h2>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-envelope-o"></a></i>
                                    </div>
                                    <h4>chat room</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-bell"></a></i>
                                    </div>
                                    <h4>announcement</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-calendar"></a></i>
                                    </div>
                                    <h4>calendar</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                       <a href="../unahco/chat.htm"> <i class="fa fa-cog"></a></i>
                                    </div>
                                    <h4>administrator</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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



    <section id="deliverables">

        <!-- output employee table from database -->

        <div class="output">
            
            <table>
                    <th>Employee Name</th>
                    <th>Employee Task 1 </th>
                    <th>Employee Task 2  </th>
                    <th>Note </th>


                    <!-- populate html table from mysql database using php -->

                    <?php
                     $query = "SELECT * FROM deliverables"; 
                     $result = mysqli_query($conn, $query);
                                
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <tr>
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
        <form action="deliverables.php" method="post">
        <div class="form-group">
            <h2>Deliverables</h2>
                <div class="del_table">
                <table>
                    <th>Employee Name</th>
                    <?php

                    $sql = "SELECT * FROM deliverables";
                    $result = mysqli_query($conn, $sql);

                    ?>
                    <th>Employee Task 1 </th>
                    <th>Employee Task 2  </th>
                    <th>Note </th>

                    <tr>
                        <td><select name="employee_name">
                            <?php 
                            while ($row = mysqli_fetch_array($result)):;
                            ?>

                            <option><?php echo $row[0]; ?></option>
                        <?php endwhile; ?>
                            
                        </select></td>


                    </tr>
                    
                </table>
            <button type="submit" class="button" name="update">Update Employee Task</button>
        </div>
        </div>
        </form>
        
       <?php

           

        ?> 
        </div>
    
        <!-- Add employee table --> 
        <div class="add">
       <form action="deliverables.php" method="post">
        <div class="form-group">
            <h2>Add Employee</h2>
                <div class="del_table">
                <table>
                    <th>Employee Name</th> <!-- dropdown or combobox -->
                    <th>Employee Task 1 </th>
                    <th>Employee Task 2  </th>
                    <th>Note </th>
                    <tr> 
                        <td><input type="text" name="employee_name" id="employee_name" /></td>                 
                        <td><input type="text" name="employee_task1" id="employee_task1" /></td>
                        <td><input type="text" name="employee_task2" id="employee_task2" /></td>
                        <td><input type="text" name="note" id="note" /></td>
                    </tr>
                </table>
            <button type="submit" class="button" name="submit">Add Employee</button>
        </div>
        </div>
        </form>

       <?php

            if(isset($_POST['submit'])){

                $employee_name = $_POST['employee_name'];
                $employee_task1 = $_POST['employee_task1'];
                $employee_task2 = $_POST['employee_task2'];
                $note = $_POST['note']; 

                if(!empty($employee_name)) {
           

                $insertquery = "INSERT INTO deliverables(employee_name, employee_task1, employee_task2, note) 
                                  VALUES  ('$employee_name', '$employee_task1', '$employee_task2', '$note') "; 
                $insert = mysqli_query($conn, $insertquery) or die('Error:' . mysqli_error($conn)); 
   

                }else {
                    echo "<script> alert('Employee name required. Tasks are editable') </script>";
                }
            }        
        ?> 
        
        </div>
    </section>


<!--End of  Deliverables-->



        <!--Start of volunteer/WARRIOR-->
        <section id="warrior">
            <div class="container">
                <div class="row war_area">
                    <div class="col-md-8">
                        <div class="warrior_content">
                            <h3>Become a <span>Warrior</span></h3>
                            <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="#" class="button">join us</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and war_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->



 
     

        <!--Start of counter-->
        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header">
                                <h2>OUR achivement</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                   <a href="../unahco/chat.htm"><i class="fa fa-tree"></i>
                                    <div class="counter_text">
                                        <span class="counter">1542</span>
                                        <p>tree planted</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-paw"></i>
                                    <div class="counter_text">
                                        <span class="counter">1458</span>
                                        <p>animal rescued</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-flash"></i>
                                    <div class="counter_text">
                                        <span class="counter">9854</span>
                                        <p>energy saved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-tint"></i>
                                    <div class="counter_text">
                                        <span class="counter">5412</span>
                                        <p>water saved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-eyedropper"></i>
                                    <div class="counter_text">
                                        <span class="counter">458</span>
                                        <p>medicine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-smile-o"></i>
                                    <div class="counter_text">
                                        <span class="counter">958</span>
                                        <p>employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
        </section>
        <!--end of counter-->

 <!--make hr admin other webpage--> 



        <!--Start of testimonial  CHANGE TO FINANCE OR COPY WHITE PART OF WELCOME/ABOUT-->
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>testimonials</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Magaling. Good Job</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Unilab</h5>
                                                            <p>Head Office </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Napakasipag. Wala na ko masabi..</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Bayanihan</h5>
                                                            <p>Supervisor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End of item with active-->
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>They always exceed our expectations.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>J.Y Campos</h5>
                                                            <p>CEO, Founder</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Bravo! </p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>M.K. Tan</h5>
                                                            <p>CEO, Founder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ENd of item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->


<!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
        <li data-target="#carousel-example-generic" data-slide-to="9"></li>
        <li data-target="#carousel-example-generic" data-slide-to="10"></li>
        <li data-target="#carousel-example-generic" data-slide-to="11"></li>
        <li data-target="#carousel-example-generic" data-slide-to="12"></li>
        <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="13"></li>
        <li data-target="#carousel-example-generic" data-slide-to="14"></li>
        <li data-target="#carousel-example-generic" data-slide-to="15"></li>
        <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="17"></li>
        <li data-target="#carousel-example-generic" data-slide-to="18"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>winston t. young</h2>
            <h3>position: pinaka pogi</h3>
                                    <p>winston, ang winner sa mga puso<br> birthday: <br>Local: 8582 </p>
        
                                    <a href="" class="custom_btn">Read  More/social media</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>mabee n. melegrito</h2>
            <h3>position: pinaka maganda</h3>
                                    <p>will you mabee my lover<br> birthday: <br>Local: 7350</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   
                                    <h2>mae-anne o. lodripas</h2>
            <h3>position: pinaka pretty</h3>
                                    <p>mae- anne or wala? <br> birthday: <br>Local: 8583</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>ma. elisa padasdas</h2>
            <h3>position: pinaka cute</h3>
                                    <p>elisa, dalawa, tatlo magtago na kayo.<br> birthday: <br>Local: 1520</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>erickson g. martin</h2>
            <h3>position: pinaka gwapo</h3>
                                    <p>erickson, ang superhero ng buhay mo.<br> birthday: <br>Local: 7733</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>elener d. ceremonia</h2>
            <h3>position: pinaka macho</h3>
                                    <p>mas macho pa kay ely buendia.<br> birthday: <br>Local: 7993</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>marinelle y. berces</h2>
            <h3>position: pinaka hot</h3>
                                    <p>ingat ka, nakaktunaw ang tingin ko.<br> birthday: <br>Local: 7992</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>lester r. dimapilis</h2>
            <h3>position: pinaka cute</h3>
                                    <p>elisa, dalawa, tatlo magtago na kayo.<br> birthday: <br>Local: 8834</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>robert gonzalo</h2>
            <h3>position: pinaka sexy</h3>
                                    <p>ako ang pinaka sexy sa lahat ng robert na kilala niyo.<br> birthday: <br>Local: 7985</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>jimmar furton</h2>
            <h3>position: pinaka ma appeal</h3>
                                    <p>jim ba hanap mo? don't worry, andito na ko.<br> birthday: <br>Local: 1529</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>edson bernardo</h2>
            <h3>position: pinaka makisig</h3>
                                    <p>sino pa ba hinahanap mo? ed-ito naman ako.<br> birthday: <br>Local: 1524</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>simon boquiren</h2>
            <h3>position: pinaka cute na chinito</h3>
                                    <p>chinito ba? say no more, say simon.<br> birthday: <br>Local: 7997</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>mikee ivy trangia</h2>
            <h3>position: pinaka cutiepatootie</h3>
                                    <p>walang laban sila anne curtis at sandara park sakin.<br> birthday: <br>Local: 7994</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>countess erin mariano</h2>
            <h3>position: pinaka astig na ojt</h3>
                                    <p>ako lang at wala ng iba<br> birthday: <br>Local: 7994</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">

            <h2>andrew</h2>
            <h3>position: pinaka leather jacket</h3>
                                    <p>robin padilla? wala yan.<br> birthday: <br>Local: ----</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>elvi</h2>
            <h3>position: pinaka bago</h3>
                                    <p>malalim na boses ba hanap mo? say no more<br> birthday: <br>Local: ----</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                                                      
                                                                      
                                   
                    
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



<!--Start of contact-->
        <section id="promote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_area text-center">
                            <h3>Advertise your Products on Us</h3>
                            <p>Leave a copy of your proposal below and write a message</p>
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
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>Or email your products at</h5>
                            </div>
                            <div class="office_location">
                                <div class="email">
                                    <i class="fa fa-envelope"><span>unahcocentralcredit@gmail.com</span></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->       



        
<!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                <div id="map"></div>
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
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
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
        </section>
        <!--End of contact-->


        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&#169 2018 - Design By <span> cerin &#9834</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By Cerin &#9834</p>
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

    <body data-spy="scroll" data-target="#header">

        <!--Start Header Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>#17 Sheridan, Mandaluyong City 1550</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
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
                                <a class="navbar-brand custom_navbar-brand" href="../unahco/unahco.html"><img src="img/logo.jpg" alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
			<li><div class="dropdown">
			<button class="dropbtn">What We Do
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="#">Roles</a>
			<a href="#">Policies / FAQs</a>
            <a href="#">Deliverables</a>
			<a href="#">Forms</a>

			</div>
			</div></li>
                                    
                                    
            <li><div class="dropdown">
            <button class="dropbtn">Who We Are
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="#">Org Chart</a>
            <a href="#gallery">Gallery</a>
            <a href="#warrior">Join Us</a>
            <a href="#contact">Administrator</a>
            </div>
            </div></li>

		 
		   <li><a href="#" >Advertise On Us</a>

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
<!-- <div class="row">

                    <div class="col-md-10">
                        <div class="lin_header">
                            <h2>QuickLinks</h2>
                            <p>Our mission is to provide you with nutrition and healthcare, because we care</p>
                        </div>
                    </div> 

                </div> -->
                <!--End of row--> 
             
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
        </section>
        <!--end of link section-->

      		</div>
      		<!--<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>-->
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




        <!--Start of gallery section PRODUCT LIST-->
  <section id="gallery">    
  <h1>Most Beautiful Faces Gallery Credit Department</h1>
<div class="gallery cf">
  <div>
    <img src="../credit/img/small_nature1.jpg" />
    <p> Sandara Park <br> Age: 30</p>
  </div>
  <div>
    <img src="../credit/img/small_nature2.jpg" />
    <p> Gal Gadot <br> Age: 30</p>
  </div>
  <div>
    <img src="../credit/img/small_nature3.jpg" />
    <p> Gigi Hadid <br> Age: 30</p>
  </div>
   <div>
    <img src="../credit/img/small_nature4.jpg" />
    <p> Emma Stone <br> Age: 30</p>
  </div>
  <div>
    <img src="../credit/img/small_nature5.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature6.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature7.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature8.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature9.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature10.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature11.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature12.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature13.jpg" />
  </div>
  <div>
    <img src="../credit/img/small_nature14.jpg" />
  </div>
</div>
</section>
        


        <!--Start of welcome section (white area)-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to Credit</h2>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-envelope-o"></a></i>
                                    </div>
                                    <h4>chat room</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-bell"></a></i>
                                    </div>
                                    <h4>announcement</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                        <a href="../unahco/chat.htm"><i class="fa fa-calendar"></a></i>
                                    </div>
                                    <h4>calendar</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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
                                       <a href="../unahco/chat.htm"> <i class="fa fa-cog"></a></i>
                                    </div>
                                    <h4>administrator</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
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


<!-- Table/ deliverables/ to do list -->
<table id="deliverables" class="table-editable">

  <h2>Deliverables</h2>

  <tr>
    <th>Name</th>	
    <th>Activity</th>
    <th>Activity 2</th>
    <th>Activity 3</th>
    <th>Notes</th>
  </tr>
  <tr>
    <td contenteditable="true">Ely</td>
    <td contenteditable="true">Overdue/Shortpayment Collection Report</td>
    <td contenteditable="true">Credit Line Uploading</td>
    <td contenteditable="true">Summary of Small Claims & Legal Filed</td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Nelle</td>
    <td contenteditable="true">Open CM sending to ROO</td>
    <td contenteditable="true">ASR with Sales & Discount</td>
    <td contenteditable="true">Fill Rate</td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Cha</td>
    <td contenteditable="true">SOA Sending Monitoring</td>
    <td contenteditable="true">Summary of R.S.</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Mikee</td>
    <td contenteditable="true">Scanning/Indexing of Credit Documents</td>
    <td contenteditable="true">Invoices not yet received from Warehouses Report</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Cath</td>
    <td contenteditable="true">Pricelist Update & Upload to Sharepoint</td>
    <td contenteditable="true">Order Drop Report & Summary of Booked Orders</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Andro</td>
    <td contenteditable="true">Printing of CM</td>
    <td contenteditable="true">NRC Leter Status Reports</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Robert</td>
    <td contenteditable="true">Credit Line Computation</td>
    <td contenteditable="true">Promo/Rebate Summary</td>
    <td contenteditable="true">Credit Scoring-Existing Account</td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Elvin</td>
    <td contenteditable="true">Argas Valuation</td>
    <td contenteditable="true">Invoice Adjustment Summary</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Lester</td>
    <td contenteditable="true">Summary of SR Commitment & G Monitoring</td>
    <td contenteditable="true">Summary of witholding Tax</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Edson</td>
    <td contenteditable="true">Summary of SR Commitment & G Monitoring</td>
    <td contenteditable="true">Summary of witholding Tax</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Jim</td>
    <td contenteditable="true">Summary of SR Commitment & G Monitoring</td>
    <td contenteditable="true">Summary of witholding Tax</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Simon</td>
    <td contenteditable="true">Summary of SR Commitment & G Monitoring</td>
    <td contenteditable="true">Summary of witholding Tax</td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <td contenteditable="true">Vacant</td>
    <td contenteditable="true"> </td>
    <td contenteditable="true"> </td>
    <td contenteditable="true"></td>
    <td contenteditable="true"></td>
  </tr>
</table>  


        <!--Start of volunteer/WARRIOR-->
        <section id="warrior">
            <div class="container">
                <div class="row war_area">
                    <div class="col-md-8">
                        <div class="warrior_content">
                            <h3>Become a <span>Warrior</span></h3>
                            <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="#" class="button">join us</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and war_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->



 
     

        <!--Start of counter-->
        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header">
                                <h2>OUR achivement</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                   <a href="../unahco/chat.htm"><i class="fa fa-tree"></i>
                                    <div class="counter_text">
                                        <span class="counter">1542</span>
                                        <p>tree planted</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-paw"></i>
                                    <div class="counter_text">
                                        <span class="counter">1458</span>
                                        <p>animal rescued</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-flash"></i>
                                    <div class="counter_text">
                                        <span class="counter">9854</span>
                                        <p>energy saved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-tint"></i>
                                    <div class="counter_text">
                                        <span class="counter">5412</span>
                                        <p>water saved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
	        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-eyedropper"></i>
                                    <div class="counter_text">
                                        <span class="counter">458</span>
                                        <p>medicine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
	        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <a href="../unahco/chat.htm"><i class="fa fa-smile-o"></i>
                                    <div class="counter_text">
                                        <span class="counter">958</span>
                                        <p>employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
        </section>
        <!--end of counter-->

 <!--make hr admin other webpage--> 



        <!--Start of testimonial  CHANGE TO FINANCE OR COPY WHITE PART OF WELCOME/ABOUT-->
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>testimonials</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Magaling. Good Job</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Unilab</h5>
                                                            <p>Head Office </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Napakasipag. Wala na ko masabi..</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Bayanihan</h5>
                                                            <p>Supervisor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End of item with active-->
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>They always exceed our expectations.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>J.Y Campos</h5>
                                                            <p>CEO, Founder</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Bravo! </p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>M.K. Tan</h5>
                                                            <p>CEO, Founder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ENd of item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->


<!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="11"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="12"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="13"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="14"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="15"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="17"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="18"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>winston t. young</h2>
		    <h3>position: pinaka pogi</h3>
                                    <p>winston, ang winner sa mga puso<br> birthday: <br>Local: 8582 </p>
		
                                    <a href="" class="custom_btn">Read  More/social media</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>mabee n. melegrito</h2>
		    <h3>position: pinaka maganda</h3>
                                    <p>will you mabee my lover<br> birthday: <br>Local: 7350</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   
                                    <h2>mae-anne o. lodripas</h2>
		    <h3>position: pinaka pretty</h3>
                                    <p>mae- anne or wala? <br> birthday: <br>Local: 8583</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>ma. elisa padasdas</h2>
		    <h3>position: pinaka cute</h3>
                                    <p>elisa, dalawa, tatlo magtago na kayo.<br> birthday: <br>Local: 1520</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>erickson g. martin</h2>
		    <h3>position: pinaka gwapo</h3>
                                    <p>erickson, ang superhero ng buhay mo.<br> birthday: <br>Local: 7733</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>elener d. ceremonia</h2>
		    <h3>position: pinaka macho</h3>
                                    <p>mas macho pa kay ely buendia.<br> birthday: <br>Local: 7993</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>marinelle y. berces</h2>
		    <h3>position: pinaka hot</h3>
                                    <p>ingat ka, nakaktunaw ang tingin ko.<br> birthday: <br>Local: 7992</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>lester r. dimapilis</h2>
		    <h3>position: pinaka cute</h3>
                                    <p>elisa, dalawa, tatlo magtago na kayo.<br> birthday: <br>Local: 8834</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>robert gonzalo</h2>
		    <h3>position: pinaka sexy</h3>
                                    <p>ako ang pinaka sexy sa lahat ng robert na kilala niyo.<br> birthday: <br>Local: 7985</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>jimmar furton</h2>
		    <h3>position: pinaka ma appeal</h3>
                                    <p>jim ba hanap mo? don't worry, andito na ko.<br> birthday: <br>Local: 1529</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>edson bernardo</h2>
		    <h3>position: pinaka makisig</h3>
                                    <p>sino pa ba hinahanap mo? ed-ito naman ako.<br> birthday: <br>Local: 1524</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>simon boquiren</h2>
		    <h3>position: pinaka cute na chinito</h3>
                                    <p>chinito ba? say no more, say simon.<br> birthday: <br>Local: 7997</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>mikee ivy trangia</h2>
		    <h3>position: pinaka cutiepatootie</h3>
                                    <p>walang laban sila anne curtis at sandara park sakin.<br> birthday: <br>Local: 7994</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>countess erin mariano</h2>
		    <h3>position: pinaka astig na ojt</h3>
                                    <p>ako lang at wala ng iba<br> birthday: <br>Local: 7994</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">

		    <h2>andrew</h2>
		    <h3>position: pinaka leather jacket</h3>
                                    <p>robin padilla? wala yan.<br> birthday: <br>Local: ----</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    
                                    <h2>elvi</h2>
		    <h3>position: pinaka bago</h3>
                                    <p>malalim na boses ba hanap mo? say no more<br> birthday: <br>Local: ----</p>
                                    <a href="" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                                                      
                                                                      
                                   
                    
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->


<!--Start of promote-->
        <section id="promote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_area text-center">
                            <h3>Advertise your Products on Us</h3>
                            <p>Leave a copy of your proposal below and write a message<br>Or email your products at<br>unahcocentralcredit@gmail.com</p>
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
                                            <?php echo readfile('customer.txt') ?>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                <div id="map"></div>
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
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
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
        </section>
        <!--End of contact-->


        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>&#169 2018 - Design By <span> cerin &#9834</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By Cerin &#9834</p>
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