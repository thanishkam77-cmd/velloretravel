<div class="grid5-right">
<h2><em></em> Quick Enquiry</h2>
<table border="0" cellspacing="10" cellpadding="0" width="100"  id="table6"  >
      <form action="./mail-right.php" method="post" name="cont" onSubmit="return validate();">
        <!--<input name="subject" type="hidden" value="[Quick Enquiry] www.velloretravels.in">
       <input name="_redirect" type="hidden" value="http://www.velloretravels.in/index.asp" />
        <input name="To" type="hidden" value="admin@vellorecity.com">-->
        <tr>
          <td width="60%">
              <input name="Name"  onfocus="focme(this,'Name')" onBlur="callme(this,'Name')" value="Name" size="25" style="border: 1px solid #C0C0C0; font-family:Verdana; font-size:8pt; float:left; height:20px; ">
          </td>
        </tr>
        <tr>
          <td width="60%">
              <input  onfocus="focme(this,'Mobile No.')" onBlur="callme(this,'Mobile No.')" value="Mobile No." name="Mobile_No" id="Mobile_No" size="25" style="border: 1px solid #C0C0C0; font-family:Verdana; font-size:8pt; float:left; height:20px;">
          </td>
        </tr>
        <tr>
          <td width="60%" >
              <input  onfocus="focme(this,'Email Id.')" onBlur="callme(this,'Email Id.')" value="Email Id." name="EMail" size="25" style="border: 1px solid #C0C0C0; font-family:Verdana; font-size:8pt; float:left; height:20px;">
          </td>
        </tr>
        <tr>
          <td width="60%">
              <textarea rows="5"onfocus="focme(this,'Message')" onBlur="callme(this,'Message')" name="Message"  value="Message"  cols="30" style="height:48;border: 1px solid #C0C0C0; margin-left:1px; font-family:Verdana; font-size:8pt; width:157px">Message</textarea>     </td>
        </tr>
        <tr>
          <td width="94%"><p align="center" style="text-decoration: none; text-align:center;">
            <input type="submit" value="Send" name="Submit"  class="button bg-color1" />
          </td>
        </tr>
      </form>
    </table>
<div class="space"></div>
<h2><em></em> Testimonial</h2>
<div id="newsticker-demo">
      <div class="newsticker-jcarousellite">
	    
        <ul>
		 <li>
            <div class="news-info">
              <h3> Shrine Properties</h3>
              <a href="testimonials.php" target="_top">The marketing consultants of flats and plots dealing with the real estate.</a></div>
            <div class="clear"></div>
          </li>
          <li>
            <div class="news-info">
              <h3> Shrine Properties</h3>
              <a href="testimonials.php" target="_top">The marketing consultants of flats and plots dealing with the real estate.</a></div>
            <div class="clear"></div>
          </li>
          
          
          <li>
            <div class="news-info">
              <h3>Shrine Properties</h3>
              <a href="testimonials.php" target="_top">The marketing consultants of flats and plots dealing with the real estate</a></div>
            <div class="clear"></div>
          </li>
		  
        </ul>
	
      </div>
	 <!-- <div class="button">
  <a href="#" class="prev"><img src="animate/scroll-verti/prev.png" alt="prev" /></a>
  <a href="#" class="next"><img src="animate/scroll-verti/next.png" alt="next" /></a>
   </div>-->
    </div>
  </div>
  
  <link href="animate/scroll-verti/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="animate/scroll-verti/jquery-1.3.js"></script>
<script src="animate/scroll-verti/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript"> 
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 2,
		auto:1500,
		speed:1000,
		btnNext: ".next",
       btnPrev: ".prev"  
	});
});
</script>
  <script>
function ValidateNo( NumStr, String )
{
	for( var Idx = 0; Idx < NumStr.length; Idx ++ )
	{
		 var Char = NumStr.charAt( Idx );
		 var Match = false;

		for( var Idx1 = 0; Idx1 < String.length; Idx1 ++)
		{
		 if( Char == String.charAt( Idx1 ) )
		 Match = true;
		}

		if ( !Match )
		return false;
 	}
   	return true;
}

function callme(a,b)
{
if (a.value=='')
{a.value=b};
}
 function focme(a,b)
{
if (a.value==b)
{a.value=''};
}
 function validate()
 {if ((document.cont.Name.value=='')||(document.cont.Name.value=='Name'))
 {alert('Please enter the Name');
  document.cont.Name.focus()
 return false;}
 if ((document.cont.Mobile_No.value=='')||(document.cont.Mobile_No.value=='Mobile No.'))
 {alert('Please enter the Mobile No.');
  document.cont.Mobile_No.focus()
 return false;}
 
  if (!ValidateNo(document.getElementById('Mobile_No').value,'0123456789')) 
	{		 
	   alert("Please enter the Digits.");
	   document.cont.Mobile_No.focus();
	   return false;
	} 

 if ((document.cont.EMail.value=='')||(document.cont.EMail.value=='Email Id.'))
 {alert('Please enter the EMail');
  document.cont.EMail.focus()
 return false;}
 elem=document.cont.EMail;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){}else{
		alert('Please enter the valid Email Id.');
		elem.focus();
		return false;
	}

  if ((document.cont.Message.value=='')||(document.cont.Message.value=='Message'))
 {alert('Please enter the Message');
  document.cont.Message.focus()
 return false;}
 }
</script>