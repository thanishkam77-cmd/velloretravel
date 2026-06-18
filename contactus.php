<?php
$page_title = "vellore travels - Contact Us, Yelagiri, Amrithi Forest, hotels in vellore, vellore hotel, atm in vellore, vellore atm centre, banks in vellore, vellore banks, colleges, college in vellore";
$body_id = "contact";
require_once 'includes/header.php';
?>

<!-- Hero Slideshow Banner -->
    <section class="hero-slideshow">
      <div class="slides-container">
        <div class="my-slide fade">
          <img src="slides/p_0001.jpg" alt="Vellore Fort Panorama">
          <div class="slide-caption">Explore The Rich Dravidian Heritage</div>
        </div>
        <div class="my-slide fade">
          <img src="slides/p_0002.jpg" alt="Golden Temple Sripuram">
          <div class="slide-caption">Experience Divine Peace at Golden Temple</div>
        </div>
      </div>
      <!-- Slider navigation controls -->
      <button class="slide-prev" onclick="changeSlide(-1)" aria-label="Previous Slide">&#10094;</button>
      <button class="slide-next" onclick="changeSlide(1)" aria-label="Next Slide">&#10095;</button>
    </section>

<div class="main-content-grid">
  <?php require_once 'includes/left_sidebar.php'; ?>

  <main class="page-content">

        <div class="content-card">
          <h1>Contact <span>Us</span></h1>

<form name="cntctus" method="post" action="mail.php" onsubmit="return ValidateForm12();">
         <!-- <input name="subject" type="hidden" value="[Contact Us] Vellore Travels">
          <input name="_redirect" type="hidden" value="www.velloretravels.com">
          <input name="To" type="hidden" value="admin@vellorecity.com">-->
          <div class="table-responsive"><table border="0" cellpadding="0px" cellspacing="5" class="contact-us">
            <tr>
              <td  colspan="2" class="mandatory"><span style="color:#cc0000">* Mandatory Fields</span></td>
            </tr>
            <tr>
              <td   align="right"><span class="red">*</span> Name :</td>
              <td  ><input type="text" id="FullName" name="FullName" size="28" class="textfield" required></td>
            </tr>
            <tr>
              <td   align="right" valign="top"> Address :</td>
              <td  ><textarea rows="3" name="Address" cols="24" class="list-selectfield" required></textarea></td>
            </tr>
            <tr>
              <td   align="right">City :</td>
              <td  ><input type="text" name="City" size="20" class="textfield" required></td>
            </tr>
            <tr>
              <td   align="right">Pin Code / 
                Zip Code :</td>
              <td  ><input type="text" name="Zip_Code" size="8" class="textfield" required></td>
            </tr>
            <tr>
              <td   align="right"><span class="red">*</span> Phone No :</td>
              <td  ><input type="text" id="PhoneNo" name="PhoneNo" size="14" class="textfield" required></td>
            </tr>
            <tr>
              <td   align="right"><span class="red">*</span> Email :</td>
              <td  ><input type="text" name="Email" size="29" class="textfield" required></td>
            </tr>
            <tr>
              <td   align="right" valign="top"><span class="red">*</span>Comments :</td>
              <td  ><textarea rows="6" name="Comments" cols="31" class="list-selectfield " required></textarea></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
                        <td colspan="2">
            <div class="g-recaptcha" data-sitekey="6LdZyZwUAAAAAJ5mYjNVs5ONEJIAylQxEmkmeL79"></div>
            </td>
            </tr>
            <tr>
              <td   align="right"></td>
              <td  ><input type="Submit" value=" Send " class="button bg-color1 ui-corner-all">
                &nbsp;&nbsp;
                <input type="reset" value="Clear" class="button bg-color1 ui-corner-all">
              </td>
            </tr>
          </table></div>
        </form>
        <script type="text/javascript">
  function ValidateForm12()
  {
var captcha_response = grecaptcha.getResponse();
    if(captcha_response.length == 0)
    {
      alert("Captcha cannot be empty");
        // Captcha is not Passed
        return false;
    }
    return true;
    }
    </script>

<br />
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

