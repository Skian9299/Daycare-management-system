<?php
include('includes/config.php');
session_start();
error_reporting(0);

if(isset($_POST['submit']))
  {
    $yname=$_POST['yname'];
    $phone=$_POST['phone'];
    $aphone=$_POST['aphone'];
    $email=$_POST['email'];
    $childname=$_POST['childname'];
     $dob=$_POST['dob'];
    $childgender=$_POST['childgender'];
    $program=$_POST['program'];
    $address=$_POST['address'];
    $zipcode=$_POST['zipcode'];
     $city=$_POST['city'];
    $state=$_POST['county'];
    $country=$_POST['country'];
    $landmark=$_POST['landmark'];
    $landmark=$_POST['landmark'];
    $enrollnum=mt_rand(100000000, 999999999);
    $_SESSION['enrollnum']=$enrollnum;
    $query=mysqli_query($con, "insert into tblenrollment(EnrollmentNumber,YourName,PhoneNumber,AlternateNumber,Email,ChildName,DOB,ChildGender,ProgramName,Address,Zipcode,City,State,Country,Landmark) value('$enrollnum','$yname','$phone','$aphone','$email','$childname','$dob','$childgender','$program','$address','$zipcode','$city','$state','$country','$landmark')");
    if ($query) {


 echo "<script>window.location.href='thank-you.php'</script>"; 
  
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Baby Day Care Management System | Enrollment Page</title>
      <!--meta tags -->
      
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
   </head>
   <body>
      <div class="main-top" id="home">
         <!-- header -->
         <?php include_once("includes/navbar.php");?>
         <!-- //header -->
      
    
      <!-- contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" >
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color:blue;padding-top: 20px;">Enroll Form</h3>
            
            <div class="wthree-info-para">
               <!--contact-map -->
               <form method="post">
                  <h6 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color:blue;padding-top: 20px;">Primary Detail</h6>
                  <div class="contact-mid row">

                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Your Name:</label>
                        <input type="text" class="form-control" placeholder="Your Name" required="" name="yname">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Mobile Number:</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" required="" name="phone" pattern="[0-9]+" maxlength="10">
                     </div>
                  </div>
                  <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Alterate Mobile Number:</label>
                        <input type="text" class="form-control" placeholder="Alternate Number" required="" name="aphone" pattern="[0-9]+" maxlength="10">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Email:</label>
                        <input type="email" class="form-control" placeholder="Email" required="" name="email">
                     </div>
                  </div>
                   <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Child Name:</label>
                        <input type="text" class="form-control" placeholder="Child Name" required="" name="childname">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Date of Birth:</label>
                        <input type="date" class="form-control" placeholder="Date of Birth" required="" name="dob">
                     </div>
                  </div>
                  <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Child Gender:</label>
                        <select type="text" class="form-control" placeholder="Child Name" required="" name="childgender">
                           <option value="">Choose Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Program:</label>
                        <select type="text" class="form-control" placeholder="Child Name" required="" name="program">
                           <option value="">Choose Program</option>
                           <option value="Play Group">Play Group(1.5-2.5 yrs)</option>
                           <option value="Nursery">Nursery(2.5-3.5 yrs)</option>
                            <option value="Lower KG">Lower KG(3.5-4.5 yrs)</option>
                           <option value="Upper KG">Upper KG(4.5-6 yrs)</option>
                        </select>
                     </div>
                  </div>
                  <h6 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color:blue;padding-top: 20px;">Address Detail</h6>
                 <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Address:</label>
                        <input type="text" class="form-control" placeholder="Address" required="" name="address">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Zipcode:</label>
                        <input type="text" class="form-control" placeholder="Zipcode" required="" name="zipcode">
                     </div>
                  </div>
                  <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>City:</label>
                        <input type="text" class="form-control" placeholder="City" required="" name="city">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>County:</label>
                        <select type="text" class="form-control" placeholder="County" required="" name="County">
                        <option value="">Choose County</option>
                        <option value="baringo">Baringo</option>
    <option value="bomet">Bomet</option>
    <option value="bungoma">Bungoma</option>
    <option value="busia">Busia</option>
    <option value="elgeyo marakwet">Elgeyo Marakwet</option>
    <option value="embu">Embu</option>
    <option value="garissa">Garissa</option>
    <option value="homa bay">Homa Bay</option>
    <option value="isiolo">Isiolo</option>
    <option value="kajiado">Kajiado</option>
    <option value="kakamega">Kakamega</option>
    <option value="kericho">Kericho</option>
    <option value="kiambu">Kiambu</option>
    <option value="kilifi">Kilifi</option>
    <option value="kirinyaga">Kirinyaga</option>
    <option value="kisii">Kisii</option>
    <option value="kisumu">Kisumu</option>
    <option value="kitui">Kitui</option>
    <option value="kwale">Kwale</option>
    <option value="laikipia">Laikipia</option>
    <option value="lamu">Lamu</option>
    <option value="machakos">Machakos</option>
    <option value="makueni">Makueni</option>
    <option value="mandera">Mandera</option>
    <option value="meru">Meru</option>
    <option value="migori">Migori</option>
    <option value="marsabit">Marsabit</option>
    <option value="mombasa">Mombasa</option>
    <option value="muranga">Muranga</option>
    <option value="nairobi">Nairobi</option>
    <option value="nakuru">Nakuru</option>
    <option value="nandi">Nandi</option>
    <option value="narok">Narok</option>
    <option value="nyamira">Nyamira</option>
    <option value="nyandarua">Nyandarua</option>
    <option value="nyeri">Nyeri</option>
    <option value="samburu">Samburu</option>
    <option value="siaya">Siaya</option>
    <option value="taita taveta">Taita Taveta</option>
    <option value="tana river">Tana River</option>
    <option value="tharaka nithi">Tharaka Nithi</option>
    <option value="trans nzoia">Trans Nzoia</option>
    <option value="turkana">Turkana</option>
    <option value="uasin gishu">Uasin Gishu</option>
    <option value="vihiga">Vihiga</option>
    <option value="wajir">Wajir</option>
    <option value="pokot">West Pokot</option>
      </select>
                     </div>
                  </div>
                   <div class="contact-mid row">
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Country:</label>
                        <input type="text" class="form-control" placeholder="Country" required="" name="country">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms"><label>Landmark:</label>
                        <input type="text" class="form-control" placeholder="Landmark" required="" name="landmark">
                     </div>
                  </div>
                  <div class="text-left click-subscribe">
                     <button type="submit" class="btn click-me" type="submit" name="submit">Enroll</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//contact -->

      <!-- footer -->
     <?php include_once('includes/footer.php');?>
      <!--//footer -->
   </body>
</html>