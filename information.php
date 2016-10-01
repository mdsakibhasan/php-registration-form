<?php

$to=$_POST['to'];
$from=$_POST['from'];
$subject="WoLLIC Registion information";
$message="<h1>WoLLIC 2009 Registraion</h1>";
$message.="<p>please enter the following information. A stericks (*) indicate required field. use <span style=\"color:red\">ASCII</span> characters only.</p>";
$message.= "<table><tr><td><b>First Name*</b></td><td>". $_POST['firstname'] ."</td></tr>";
$message.="<tr><td><b>Middle Name/Initial</b></td><td>".$_POST['middlename']."</td></tr>";
$message.="<tr><td><b>Last Name*</b></td><td>". $_POST['lastname'] ."</td></tr>";
$message.="<tr><td><b>Affiliation*</b></td><td>". $_POST['affiliation'] ."</td></tr>";
$message.="<tr><td><b>Mailing Address (Work/Home)*</b></td><td>". $_POST['mailingaddressworkhome'] ."</td></tr>";
$message.="<tr><td><b>Mailing Address (Line 1)* </b></td><td>". $_POST['mailingaddressline1'] ."</td></tr>";
$message.="<tr><td><b>Mailing Address (Line 2) </b></td><td>". $_POST['mailingaddressline2'] ."</td></tr>";
$message.="<tr><td><b>City* </b></td><td>". $_POST['city'] ."</td></tr>";
$message.="<tr><td><b>State/Provinace/Area </b></td><td>". $_POST['State'] ."</td></tr>";
$message.="<tr><td><b>Zip Code/Postal Code </b></td><td>". $_POST['zip'] ."</td></tr>";
$message.="<tr><td><b>Country* </b></td><td>". $_POST['country'] ."</td></tr>";
$message.="<tr><td><b>Telephone* </b></td><td>". $_POST['telephone'] ."</td></tr>";
$message.="<tr><td><b>Registration Type* </b></td><td>". $_POST['registrationtype'] ."</td></tr></table>";
$headers="From:".$from."\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";






mail($to, $subject, $message, $headers );

  ?>