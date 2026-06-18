<?php
include "includes/config.php";
include "mail/class.phpmailer.php";
//include("mail/class.smtp.php");
/*if(isset($_POST['submit']))	
{*/
$startdate = $_POST["startdate"];
	$pickuptime = $_POST["pickuptime"];
	$PersonName = $_POST["PersonName"];
	$ContactNo = $_POST["ContactNo"];	
	$Mobile = $_POST["Mobile"];
	$Email = $_POST["Email"];
	$Address = $_POST["Address"];
	$Pincode = $_POST["Pincode"];
	$PlaceToGo = $_POST["PlaceToGo"];
	$Location = $_POST["Location"];
	$LandMark = $_POST["LandMark"];
	$Return = $_POST["Return"];
	$NoOfPersons = $_POST["NoOfPersons"];
	$NoOfVehicles = $_POST["NoOfVehicles"];
	
			$Comments = "	<tr>
						<td>Vehicles Required On</td><td> : </td><td>$startdate</td>
					</tr>
					<tr>
						<td>Pick up Time</td><td> : </td><td>$pickuptime</td>
					</tr>
					<tr>
						<td>Person Name</td><td> : </td><td>$PersonName</td>
					</tr>
					<tr>
						<td>Contact No.</td><td> : </td><td>$ContactNo</td>
					</tr>
					<tr>
						<td>Mobile No.</td><td> : </td><td>$Mobile</td>
					</tr>
					<tr>
						<td>Email Id.</td><td> : </td><td>$Email</td>
					</tr>
					<tr>
						<td>Address</td><td> : </td><td>$Address</td>
					</tr>
					<tr>
						<td>Pin Code</td><td> : </td><td>$Pincode</td>
					</tr>
					<tr>
						<td>Where to GO</td><td> : </td><td>$PlaceToGo</td>
					</tr>
					<tr>
						<td>Local / Out Station</td><td> : </td><td>$Location</td>
					</tr>
					<tr>
						<td>Landmark</td><td> : </td><td>$LandMark</td>
					</tr>
					<tr>
						<td>Return</td><td> : </td><td>$Return</td>
					</tr>
					<tr>
						<td>No of Persons</td><td> : </td><td>$NoOfPersons</td>
					</tr>
					<tr>
						<td>No of Vehicles</td><td> : </td><td>$NoOfVehicles</td>
					</tr>
				</table>
						";	


	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = SMTP_SECURE; // secure transfer enabled REQUIRED for GMail
	$mail->Host = SMTP_HOST;
	$mail->Port = SMTP_PORT;
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASS;
	$mail->Priority = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = '8bit';
	$mail->ContentType = 'text/html; charset=utf-8\r\n';
	//$mail->AddAddress("deivakanni@jbcs.co.in");//andal@vastushastram.com gd.generaldrive@gmail.com
	$mail->AddAddress(MAIL_TO);//pchockalingam@gmail.com
	$mail->AddReplyTo($Email, $PersonName); 
	$mail->SetFrom(SMTP_USER, $PersonName); //admin@generaldrive.in
	$mail->Subject = "Velloretravels.com contact form";
	$mail->Body = $Comments;
	$mail->IsHTML(true);
	 if(!$mail->Send()){

           // echo "<script>window.location.href='contact.php?error=There was an error trying to send your message. Please try again later.  ';</script>"; /*. 
	 	$mail->ErrorInfo; 
	}
	else{
		echo "<script>window.location.href='thanks.php?msg=Thank you for your message. It has been sent. ';</script>";

	}
	$mail->SmtpClose();


?>
