<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BRAND-X | Request_Quotation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/NewsBoxStyle.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script src="js/jquery.easy-ticker.js"></script> 
<script src="js/NewsFun.js"></script>
<script src="js/NewsMove.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">&nbsp &nbsp &nbsp <b>Brand-X</b>~<span>ShowRoom</span> <small>No. 131,W.A.D. Ramanayake Mawatha
Colombo 02</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="Home.html"><span>HOME</span></a></li>
          <li><a href="Virtual_Showroom.html"><span>VIRTUAL SHOWROOM</span></a></li>
          <li><a href="Luxury_Vehicles.html"><span>LUXURY VEHICLES</span></a></li>
          <li   class="active"><a href="Request_Quotation.php"><span>REQUEST QUOTATION</span></a></li>
          <li><a href="Contact.php"><span>CONTACT</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="Slide_Img/slide1.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="Slide_Img/slide2.jpg" width="920" height="329" alt="" /> </a> <a href="#"><img src="Slide_Img/slide3.jpg" width="920" height="329" alt="" /> </a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Request a</span> Leasing Quotation</h2><br>
          <h4>Fill in your details to be contacted by a financial representative</h4>
          <div class="clr"></div>
          
          
        </div>
        <div class="article">
          
          <div class="clr"></div>
          
          <div>
          <?php
  $host = "localhost";
  $uname = "root";
  $pwd = "";
  $dbname = "BrandX";

  $conn = mysqli_connect($host,$uname,$pwd,$dbname);


   if(!empty($_POST['file'])){
  $s = "INSERT INTO Request_Form(first_name,email,contact_no,selected_model) VALUE('$_POST[fn]','$_POST[ln]','$_POST[num]','$_POST[model]')";
  mysqli_query($conn,$s);
  }
  ?>

  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <table>
  
    <table align="center">
      <tr>
        <td height="50"><font color="black">Your Name</font></td>
        <td height="50"><input type="text" name="fn"></input></td>
      </tr>
      <tr>
        <td height="50"><font color="black">Email</font></td>
        <td height="50"><input type="email" name="ln"></input></td>
      </tr>
      <tr>
        <td height="50"><font color="black">Phone</font></td>
        <td height="50"><input type="number" name="num"></input></td>
      </tr>
      <tr>
        <td height="50"><font color="black">Selected Model</font></td>
        <td height="50">
          <!-- <input type="radio" name="model"><font color="black">Male</font></input></br>
          <input type="radio" name="model"><font color="black">Female</font></input></br> -->
          <select name="model">
            <option value="Toyota-Land Cruiser">Toyota-Land Cruiser</option>
            <option value="Toyota-Aqua">Toyota-Aqua</option>
            <option value="Toyota-Hiace">Toyota-Hiace</option>
            <option value="Toyota-Yaris">Toyota-Yaris</option>
            <option value="Toyota-Camry">Toyota-Camry</option>
            <option value="Honda-Vezel">Honda-Vezel</option>
            <option value="Honda-Civic">Honda-Civic</option>
            <option value="Honda-CR-V">Honda-CR-V</option>
            <option value="BMW-i8">BMW-i8</option>
            <option value="BMW-x6">BMW-x6</option>
            <option value="BMW-x5">BMW-x5</option>
            <option value="Audi-r8">Audi-r8</option>
            <option value="Audi-A4">Audi-A4</option>
            <option value="Audi-A5">Audi-A5</option>
            <option value="Audi-Rolls Royce-Swaptail">Rolls Royce-Swaptail</option>
            <option value="Nissan-Sunny">Nissan-Sunny</option>
            <option value="Nissan-E200">Nissan-E200</option>
            <option value="Nissan-Datsun">Nissan-Datsun</option>
            <option value="Land Rover-Discovery-4">Land Rover-Discovery-4</option>
            <option value="Land Rover-Defender">Land Rover-Defender</option>
            <option value="Maruti Suzuki-Swift">Maruti Suzuki-Swift</option>
            <option value="Mahindra-Bollero">Mahindra-Bollero</option>
            <option value="volksWagen-Tiguar">volksWagen-Tiguar</option>
  
           
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p><b>By clicking request a leasing quotation button, you agree to our terms and conditions</b></p>
        </td>
      </tr>
      <tr>
        <td height="50"></td>
        <td height="50"><input type="submit" name="file"></td>
      </tr>
    </table>
  </td>
  <td></td>
  </tr>
  </table>
  </form>
      </div>

      <div class="article">
          <h2><span>Ordered</span> Details</h2><br>
          <h4></h4>
          <div class="clr"></div>
          
          
        </div>

      <div>
        <?php
  $host = "localhost";
  $uname = "root";
  $pwd = "";
  $dbname = "BrandX";

  $conn = mysqli_connect($host,$uname,$pwd,$dbname);

  $sql2 = "SELECT * FROM Request_Form";
  $res = mysqli_query($conn,$sql2);

  echo "<table border = '1' bgcolor = 'white' width = '100%'>";
  echo "<tr>";
  echo "<th>Name</th><th>Email</th><th>Contact Number</th><th>Selected Model</th>";
  echo "</tr>";

  while($row = mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['first_name']."</td><td>".$row['email']."</td><td>".$row['contact_no']."</td><td>".$row['selected_model']."</td>";
    echo "</tr>";
  }

  echo "</table>";

  ?>
      </div> 
          
        </div>
        
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="get" action="http://www.google.com/search">
            <span>
            <input name="q" class="editbox_search" id="editbox_search" maxlength="80" value="" type="text" />
            </span>
            <input name="button_search" src="images/search.jpg" class="button_search" type="image" />
          </form>
          <center><p>Google Search</p></center>
        </div>
        <div class="clr"></div>


        
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <center><h2><span>Image</span> Gallery</h2></center>
        <a href="ImageGalaryWebPages/bmw.html" target="_blank"><img src="images/1.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="ImageGalaryWebPages/fluence.html" target="_blank"><img src="images/2.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="ImageGalaryWebPages/maruthi.html" target="_blank"><img src="images/3.jpg" width="75" height="75" alt="" class="gal" /></a> 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="ImageGalaryWebPages/nissan.html" target="_blank"><img src="images/4.jpg" width="75" height="75" alt="" class="gal" /></a> 
        <a href="ImageGalaryWebPages/toyota_yaris.html" target="_blank"><img src="images/5.jpg" width="75" height="75" alt="" class="gal" /></a>  
      </div>
      <div class="col c1">
        <center><h2><span>Contact</span> Us</h2></center>
        <p class="contact_info"> <span>Address:</span>&nbspBrand-X<br />&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp No. 131,W.A.D.</br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp Ramanayake Mawatha
Colombo 02<br />
          <span>Telephone:</span> 011 403 0803<br />
          <span>Web Site:</span> <a href="#">www.brand-x.lk </a><br />
          <span>Twitter:</span> <a href="#"> @brand-x</a><br /> 
          <span>E-mail:</span> <a href="#">brand_x@gmail.com</a> </p>
      </div>
      <div class="col c1">
        <center><h2><span>Location</span></h2></center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.4924349365795!2d80.78956048509555!3d6.715210781525083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38a42a185ec4b%3A0x5dbea652de7045c!2sSabaragamuwa+University+of+Sri+Lanka!5e1!3m2!1sen!2slk!4v1493778386935" width="280" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> 
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
     <p class="lf"></p>
      <p class="rf"></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
