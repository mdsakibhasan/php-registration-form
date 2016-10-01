<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registion</title>
</head>
<body>
	<h1>WoLLIC 2009 Registraion</h1>
	<p>please enter the following information. A stericks (*) indicate required field. use <span style="color:red;">ASCII</span> characters only.</p>
	<form action="information.php" method="POST">
		<table>
			<tr>
				<td><label for="firstname"><b>First Name*</b></label></td>
				<td><input type="text" id="firstname" name="firstname" placeholder="your first name"></td>
			</tr>
			<tr>
				<td><label for="middlename"><b>Middle Name/Initial</b></label></td>
				<td><input type="text" id="middlename" name="middlename" placeholder="your middle name"></td>
			</tr>
			<tr>
				<td><label for="lastname"><b>Last Name*</b></label></td>
				<td><input type="text" id="lastname" name="lastname" placeholder="your last name"></td>
			</tr>
			<tr>
				<td><label for="from"><b>From:</b></label></td>
				<td><input type="email" name="from" id="from" placeholder="your email address"></td>
			</tr>
			<tr>
				<td><label for="to"><b>Email*</b></label></td>
				<td><input type="email" id="to" name="to" placeholder="reciver email address"></td>
			</tr>
			<tr>
				<td><label for="affiliation"><b>Affiliation*</b></label></td>
				<td><input type="text" id="affiliation" name="affiliation" placeholder="Enter affiliation"></td>
			</tr>
			<tr>
				<td><label for="mailingaddressworkhome"><b>Mailing Address (Work/Home)*</b></label></td>
				<td><input type="radio" id="mailingaddressworkhome" name="mailingaddressworkhome" value="Work" checked >Work<input type="radio" id="mailingaddressworkhome" name="mailingaddressworkhome" value="Home">Home</td>
			</tr>
			<tr>
				<td><label for="mailingaddressline1"><b>Mailing Address (Line 1)*</b></label></td>
				<td><input type="text" id="mailingaddressline1" name="mailingaddressline1" placeholder="mailing address 1"></td>
			</tr>
			<tr>
				<td><label for="mailingaddressline2"><b>Mailing Address (Line 2)</b></label></td>
				<td><input type="text" id="mailingaddressline2" name="mailingaddressline2" placeholder="mailing address 2"></td>
			</tr>
			<tr>
				<td><label for="city"><b>City*</b></label></td>
				<td><input type="text" id="city" name="city" placeholder="Enter your city"></td>
			</tr>
			<tr>
				<td><label for="State"><b>State/Provinace/Area</b></label></td>
				<td><input type="text" id="State" name="State" placeholder="Enter your status"></td>
			</tr>
			<tr>
				<td><label for="zip"><b>Zip Code/Postal Code</b></label></td>
				<td><input type="text" id="zip" name="zip" placeholder="your zip/postal code"></td>
			</tr>
			<tr>
				<td><label for="country"><b>Country*</b></label></td>
				<td><input type="text" id="country" name="country" placeholder="Enter your country"></td>
			</tr>
			<tr>
				<td><label for="telephone"><b>Telephone*</b></label></td>
				<td><input type="text" id="telephone" name="telephone" placeholder="your telephone"></td>
			</tr>
			<tr>
				<td><label for="registrationtype"><b>Registration Type*</b></label></td>
				<td><input type="radio" id="registrationtype" name="registrationtype" value="Regular" checked>Regular<input type="radio" id="registrationtype" name="registrationtype" value="Student">Student</td>
			</tr>
			<tr>
				<td><br>Please Review the information you</td>
				<td><br>entered carefully and press 'Submit'.</td>
			</tr>
			<tr>
				<td><input type="submit" id="submit" value="Submit" style="border-radius: 20px; cursor:pointer;"><input type="reset" id="reset" name="Reset" style="border-radius: 20px; cursor:pointer;"></td>
				<td></td>
			</tr>
		</table>
	</form>
