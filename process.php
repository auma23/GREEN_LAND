<?php
if (isset($_POST['btn-send']))
{
$UserName = $_POST['UName'];
$Email = $_POST['Email'];
$subject = $_POST['subject'];
$Msg = $_POST['msg'];

if (empty($UserName) || empty($Email) || empty($subject) || empty($Msg))
{
    header('Location: contact.php? error');
}
else{
    $to = "dianaauma2@gmail.com";

    if (mail($to,$subject,$Msg,$Email));
    {
        header("Location: contact.php? success");
    }
}
}
else{
    header('Location: contact.php');
}