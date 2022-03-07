<?php
if (isset($_POST['btn-send']))
{
    $FirstName = $_POST['FName'];
    $SecondName = $_POST['SName'];
    $county = $_POST['Ccounty'];
    $StreetAdress =$_POST['SAdress'];
    $Town = $_POST['town'];
    $Zip= $_POST['zip'];
    $phone = $_POST['phone'];
    $Email = $_POST['Email'];




    if (empty($FirstName) || empty($SecondName) || empty($county) || empty($StreetAdress) || empty($Town) || empty($Zip) || empty($phone) || empty($Email))
    {
        header('Location: checkout.php? error');
    }
    else{
        $to = "dianaauma2@gmail.com";

        if (mail($to,$FirstName,$county,$StreetAdress,$phone));
        {
            header("Location: checkout.php? success");
        }
    }
}
else{
    header('Location: checkout.php');
}