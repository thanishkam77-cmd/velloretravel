<?php
$page_title = "Vellore Travels - Online Booking alagamparai Water Falls, Falls with Park, vellore sanctuary, Vellore info, Tourist places near to vellore, important places n vellore, Vellore River, Attaru River, Vellore Fort, Golden Temple, Government Museum, Kavalur Observatory, Yelagiri, Amrithi Forest, hotels in vellore, vellore hotel, atm in vellore, vellore atm centre, banks in vellore, vellore banks, colleges, college in vellore";
$body_id = "online";
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
          <h1>Online <span>Booking</span></h1>
<div align="center">
	<div class="table-responsive"><table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111"  id="table1" bgcolor="#FFFFFF">
      <form name="OnlineBookingForm" action="mail1.php"  onSubmit="return OnlineCheck();" method = "post">
        <!--<input type="hidden" name="_redirect" value="http://www.velloretravels.com/thanks.php">
        <input type="hidden" name="Subject" value="[ Online Booking ] Vellore Travels.com">
		<input type="hidden" name="To" value="admin@vellorecity.com">- -->
            
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
        <td  colspan="3">
        <p>
    <font face="Arial" style="font-size: 10pt" color="#CC3300"><span style="font-weight: 700">
        *&nbsp; </span>Please Leave Your All Information here.<span style="font-weight: 700"><br>
        *&nbsp; </span>Our Customer Support Executive Will Contact Soon.</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">&nbsp;        </td>
        <td >&nbsp;</td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Vehicles Required On </font></td>
        <td >
       <!-- <SELECT class=OPTION name=RequestDate> 
        <OPTION value="------" selected>--</OPTION> 
        <OPTION value=1>1</OPTION> 
        <OPTION value=2>2</OPTION> 
        <OPTION value=3>3</OPTION> 
        <OPTION value=4>4</OPTION> 
        <OPTION value=5>5</OPTION> 
        <OPTION value=6>6</OPTION> 
        <OPTION value=7>7</OPTION> 
        <OPTION value=8>8</OPTION> 
        <OPTION value=9>9</OPTION> 
        <OPTION value=10>10</OPTION> 
        <OPTION value=11>11</OPTION>
        <OPTION value=12>12</OPTION> 
        <OPTION value=13>13</OPTION> 
        <OPTION value=14>14</OPTION> 
        <OPTION value=15>15</OPTION> 
        <OPTION value=16>16</OPTION> 
        <OPTION value=17>17</OPTION> 
        <OPTION value=18>18</OPTION> 
        <OPTION value=19>19</OPTION> 
        <OPTION value=20>20</OPTION> 
        <OPTION value=21>21</OPTION> 
        <OPTION value=22>22</OPTION>
        <OPTION value=23>23</OPTION> 
        <OPTION value=24>24</OPTION> 
        <OPTION value=25>25</OPTION> 
        <OPTION value=26>26</OPTION> 
        <OPTION value=27>27</OPTION> 
        <OPTION value=28>28</OPTION> 
        <OPTION value=29>29</OPTION> 
        <OPTION value=30>30</OPTION> 
        <OPTION value=31>31</OPTION></SELECT>
        <SELECT class=OPTION name=RequestMonth size="1"> 
        <OPTION value="---" selected>---</OPTION> 
        <OPTION value=Jan>Jan</OPTION> 
        <OPTION value=Feb>Feb</OPTION> 
        <OPTION value=Mar>Mar</OPTION> 
        <OPTION value=Apr>Apr</OPTION> 
        <OPTION value=May>May</OPTION> 
        <OPTION value=Jun>Jun</OPTION> 
        <OPTION value=Jul>Jul</OPTION> 
        <OPTION value=Aug>Aug</OPTION> 
        <OPTION value=Sep>Sep</OPTION> 
        <OPTION value=Oct>Oct</OPTION> 
        <OPTION value=Nov>Nov</OPTION> 
        <OPTION value=Dec>Dec</OPTION></SELECT>
        <SELECT class=OPTION name=RequestYear size="1" tabindex="1"> 
		<option>------</option>
                                <OPTION value=2008>2008</OPTION>
		<option>2009</option>
		<option>2010</option>
		</SELECT>--><input id="startdate" value="" class="date" maxlength="40" name="startdate" size="20" readonly="" />&nbsp;
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Pick up Time</font></td>
        <td >
        <!--<SELECT 
                                class=OPTION name=Hour size="1"> <OPTION value=0 selected>00</OPTION>
                                <OPTION value=1 selected>01</OPTION> <OPTION value=2>02</OPTION> 
                                <OPTION value=3>03</OPTION> <OPTION 
                                value=4>04</OPTION> <OPTION value=5>05</OPTION> 
                                <OPTION value=6>06</OPTION> <OPTION 
                                value=7>07</OPTION> <OPTION value=8>08</OPTION> 
                                <OPTION value=9>09</OPTION> <OPTION 
                                value=10>10</OPTION> <OPTION 
                                value=11>11</OPTION> <OPTION 
                                value=12>12</OPTION> <OPTION 
                                value=13>13</OPTION> <OPTION 
                                value=14>14</OPTION> <OPTION 
                                value=15>15</OPTION> <OPTION 
                                value=16>16</OPTION> <OPTION 
                                value=17>17</OPTION> <OPTION 
                                value=18>18</OPTION> <OPTION 
                                value=19>19</OPTION> <OPTION 
                                value=20>20</OPTION> <OPTION 
                                value=21>21</OPTION> <OPTION 
                                value=22>22</OPTION> <OPTION 
                                value=23>23</OPTION></SELECT>
		<SELECT 
                                class=OPTION name=Minute size="1"> 
		<OPTION value=00 
                                selected>00</OPTION> <OPTION value=05>05</OPTION> 
                                <OPTION value=10>10</OPTION> <OPTION 
                                value=15>15</OPTION> <OPTION 
                                value=20>20</OPTION> <OPTION 
                                value=25>25</OPTION> <OPTION 
                                value=30>30</OPTION> <OPTION 
                                value=35>35</OPTION> <OPTION 
                                value=40>40</OPTION> <OPTION 
                                value=45>45</OPTION> <OPTION 
                                value=50>50</OPTION> <OPTION 
                                value=55>55</OPTION></SELECT>--><input type="text" name="pickuptime" size="10">
		<font style="font-size: 8pt" face="Tahoma">[hh:mm AM or PM]&nbsp; Ex: 
		03:45 PM</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt">Person Name</font></td>
        <td >
        <INPUT class=inpbox 
                              name=PersonName size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Contact No.</font></td>
        <td >
        <INPUT class=inpbox 
                              name=ContactNo size="20"></td>
      </tr>
            <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt">Mobile</font><font face="Tahoma" style="font-size: 8pt; "> No.</font></td>
        <td >
        <INPUT class=inpbox 
                              name=Mobile size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; "> Email Id.</font></td>
        <td >
        <INPUT class=inpbox 
                              name="Email" size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>

      <tr>
        <td  align="justify">&nbsp;        </td>
        <td  align="left" valign="top">
        <font face="Tahoma" style="font-size: 8pt; ">Address</font></td>
        <td >
        <TEXTAREA class=textarea name=Address rows="6" cols="32"></TEXTAREA>&nbsp;
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt">Pin Code</font></td>
        <td >
        <INPUT class=inpbox name=Pincode size="20"></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Where to GO</font></td>
        <td >
        <INPUT class=inpbox name=PlaceToGo size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Local / Out 
        Station</font></td>
        <td >
        <SELECT class=option 
                              name=Location> 
        <OPTION value=Local 
                                selected>Local</OPTION> 
        <OPTION 
                                value=OutStation>Out Station</OPTION></SELECT></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Landmark</font></td>
        <td >
        <INPUT class=inpbox 
                              name=LandMark size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt; ">Return</font></td>
        <td ><input type="radio" name="Return" value="Yes" checked><font style="font-size: 8pt; font-weight: 700" face="Tahoma">Yes</font><input type="radio" name="Return" value="No"><font style="font-size: 8pt; font-weight: 700" face="Tahoma">No</font></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt">No of Persons</font></td>
        <td >
        <INPUT class=inpbox 
                              name="NoOfPersons" size="20"></td>
      </tr>
      <tr>
        <td >&nbsp;        </td>
        <td  align="left">
        <font face="Tahoma" style="font-size: 8pt">No of Vehicles</font></td>
        <td >
        <INPUT class=inpbox name=NoOfVehicles size="20">
		<font color="#FF0000" size="2">*</font></td>
      </tr>
      <tr>
        <td  colspan="2">&nbsp;        </td>
        <td >
        <INPUT class=SUBBTN1 type=submit value=Submit> <input type="reset" value="Reset" name="Resetbut" class="SUBBTN1"></td>
      </tr>
    </form></table></div>
    	</div>
        </div>
      
  </main>

  <?php require_once 'includes/footer.php'; ?>

