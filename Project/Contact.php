<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BRAND-X | Contact</title>
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
          <li><a href="Request_Quotation.php"><span>REQUEST QUOTATION</span></a></li>
          <li  class="active"><a href="Contact.php"><span>CONTACT</span></a></li>
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
          <center><h2>Brand-X</h2></center><br><br>
          <table>
          <tr>
            <td id="photo"><img src="images/contact.png" alt="Riyaz" /></td>
            <td id="photo1">
              <b>Head office - Colombo</b><br>
              Manager<br>
              077-403 0803<br>
              riyazsalaam@gmail.com<br>
              <a href="#"><img src="images/ShooraMembers/f.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/g.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/t.jpg" id="img" /></a>
            </td>
          </tr>
          <tr>
            <td id="photo"><img src="images/contact.png" alt="Rusaith" /></td>
            <td id="photo1">
              <b>Kandy</b><br>
              Manager<br>
              076-303 1325<br>
              rusaith.sm@gmail.com<br>
              <a href="#"><img src="images/ShooraMembers/f.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/g.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/t.jpg" id="img" /></a>
            </td>
          </tr>
          <tr>
            <td id="photo"><img src="images/contact.png" alt="Zaheer" /></td>
            <td id="photo1">
              <b>Gampola</b><br>
              Manager<br>
              075-269 2511<br>
              zaheerm50@gmail.com<br>
              <a href="#"><img src="images/ShooraMembers/f.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/g.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/t.jpg" id="img" /></a>
            </td>
          </tr>
          <tr>
            <td id="photo"><img src="images/contact.png" alt="Sujah" /></td>
            <td id="photo1">
              <b>Jaffna</b><br>
              Manager<br>
              075-566 2229<br>
              ameersujah@gmail.com<br>
              <a href="#"><img src="images/ShooraMembers/f.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/g.jpg" id="img" /></a>
              <a href="#"><img src="images/ShooraMembers/t.jpg" id="img" /></a>
            </td>
          </tr>
          <tr>

            <?php
  $host = "localhost";
  $uname = "root";
  $pwd = "";
  $dbname = "BrandX";

  $conn = mysqli_connect($host,$uname,$pwd,$dbname);

   if(!empty($_POST['file'])){
  $s = "INSERT INTO feedback(first_name,email,website,message) VALUE('$_POST[name]','$_POST[email]','$_POST[website]','$_POST[message]')";
  mysqli_query($conn,$s);
  }
  ?>

            <td colspan="2">
            <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="leavereply">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="website">Website</label>
                <input id="website" name="website" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="submit" name="file">
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
              
            </td>
          </tr>
          
    </table>
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
          <center><p>Type Your brand</p></center>
        </div>
        <div class="clr"></div>


        <center>
                <h2>Latest Brands</h2>
    <div class="demo5 demof">
      <ul>
          <li><a href=""><img src="images/c2.jpg" /></a>
          <p><b>Rolls Royce </b></p><p><b>Swaptail</b><br>Introducing new arrival Only for 80crores</p>
          </li>
          <li class="odd"><a href="#"><img src="images/c3.jpg" /></a>
          <p><b>Dodge Viper</b></p><p><b>V11</b><br>Introducing new arrival Only for 30crores</p>
          </li>
          <li><a href="#"><img src="images/c1.jpg" /></a>
          <p><b>Jaguar</b></p><p><b>E110</b><br>Introducing new arrival Only for 28crores</p>
          </li>
      </ul>
    </div>
        </center>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.836193213994!2d79.87400131386451!3d6.9101813204665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2599d329e6923%3A0x9fa1c83006c07c94!2sBrandix+i3!5e0!3m2!1sen!2slk!4v1494148219203" width="280" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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