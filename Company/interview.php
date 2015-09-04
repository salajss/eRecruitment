<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("monishachandrn@yahoo.co.in","My subject",$msg))
{
echo "mail sended";
}
else
{
print_r(error_get_last());
 echo "mail not send";
}
?>
