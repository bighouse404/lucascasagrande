<?php
//variables

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$date = date('d/m/Y');
$hour = date('H:i:s');

//email
$archive = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
<tr>
               <td width='500'>Name:$name</td>
              </tr>
              <tr>
                <td width='320'>Email:<b>$email</b></td>
   </tr>
    <tr>
                <td width='320'>Phone:<b>$phone</b></td>
              </tr>
              <tr>
                <td width='320'>Message:$msg</td>
              </tr>
          </td>
        </tr>
        <tr>
          <td>Email sent on <b>$date</b> at <b>$hour</b></td>
        </tr>
      </table>
  </html>
";

//send

  //for who this form will be send
  $emailsend = "lucas.casagrande0120@gmail.com";
  $destination = $emailsend;
  $subject = "Site Contact";

  //ist necessary to indicate that is a html email
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $name <$email>';

  $sendemail = mail($destination, $subject, $archive, $headers);
  if($sendemail){
  $mgm = "FORM SUBMISSION SUCCESSFUL! <br> The link will be sent to the destination email.";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERROR SENDING THE EMAIL!";
  echo "";
  }
?>