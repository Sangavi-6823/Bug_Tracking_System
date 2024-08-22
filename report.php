<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bug Stub</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->


  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index1.php"><b style="color:white; font-size:25px;">BUG STUB</b></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

         <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="1admin.php"> View bug Information</a></li>
		  <li class=""><a href="1admin_ass.php">Assign</a></li>
	
		  <li class=""><a href="fns.php">Final Status</a></li>
		    <li class=""><a href="report.php">Report</a></li>
		  
		           <a href="index.php"> logout</a></li>
               </li>
        </ul>
      </nav>
 
    </div>
	
  </header>
	
  
  <div id="image" style="background: url(megu1.jpg) no-repeat; width: 100%; height: 100%; background-size: 100%;">
<center>
  <form method="post" action=""><br><br>
							<input class="name" type="text" name="id" placeholder=" Enter the bugid"><br><br>
							
							
							<input class="submit-btn" type="submit" name="submit" value="SUBMIT"><br><br><br><br>
						</form>
  <br><br><br><br><br><br>
					 <?php  if(isset($_POST['submit']))
  { ?>
                <table border="5" width="75%"bgcolor="white"  align="center">
                           <tr height="80" align="center" bgcolor="maroon" style="color:white;">
                               <th> Project name</th>
							    <th>Project id</th>
								<th> Bug Description </th>
								 <th>Assign Date</th>
								 <th>Date of Completion</th>
								 <th>status</th>
								


								 
								  </tr>

<?php
include ('db.php');
  //$sqlup="Select * from bill order by bill_id desc";

   //$id1 =  $_POST['id'];
  //$sel="select * from report where id = $id1";
   $id1 =  $_POST['id'];
 $sqlup="Select * from report where id = $id1";

  $we=mysqli_query($con,$sqlup);
while($res=mysqli_fetch_object($we))
{
?>
 <tr>
 <td height="40" align="center"><?php echo $res->pro_name; ?></td>
    <td height="40" align="center"><?php echo $res->pro_id; ?></td>
    <td align="center"><?php echo $res->des; ?></td>
   <td align="center"><?php echo $res->start_date; ?></td>
    <td align="center"><?php echo $res->end_date; ?></td>
	<td align="center"><?php echo $res->status; ?></td>
	

  <?php
  }
  ?>
</table>
<?php  } ?>
					   </center>
  <!-- /About -->
  <!-- Parallax -->

  <!-- /Parallax -->
  <!-- Features -->

 
  <!-- /Features -->
  <!-- Call to Action -->


  <!-- /Call to Action -->
  <!-- Portfolio -->


  <!-- /Portfolio -->
  <!-- Team -->

  <!-- /Team -->
  <!-- @component: footer -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © BUG TRACKING SYSTEM
            </p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
              -->
                         </div>
          </div>

 

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
