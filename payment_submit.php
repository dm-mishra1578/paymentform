0<?php
 $db_hostname="127.0.0.1";
 $db_username="root";
 $db_password="";
 $db_database="test";

 $conn = mysqli_connect($db_hostname, $db_username,$db_password,$db_database);
 if(!$conn){
    echo "connection field !" .mysqli_connect_error();
    exit;
 }
 else {
   echo"connection succesful ";
 }
 if (isset($_POST['name'])) {
   $name = $_POST['name'];
} else {
   $name = '';
}if (isset($_POST['Contact_no'])) {
   $Contact_no = $_POST['Contact_no'];
} else {
   $Contact_no= '';
}if (isset($_POST['Gender'])) {
   $Gender = $_POST['Gender'];
} else {
   $Gender = 'Male';
}if (isset($_POST['address'])) {
   $address = $_POST['address'];
} else {
   $address = '';
}
if (isset($_POST['email'])) {
   $email = $_POST['email'];
} else {
   $email = '';
}
if (isset($_POST['Pincode'])) {
   $Pincode = $_POST['Pincode'];
} else {
   $Pincode = '';
}
if (isset($_POST['card_Type'])) {
   $card_Type = $_POST['card_Type'];
} else {
   $card_Type = '';
}
if (isset($_POST['card_no'])) {
   $card_no = $_POST['card_no'];
} else {
   $card_no = '';
}
if (isset($_POST['card_expiration_date'])) {
   $card_expiration_date = $_POST['card_expiration_date'];
} else {
   $card_expiration_date= '';
}
if (isset($_POST['CVV'])) {
   $CVV = $_POST['CVV'];
} else {
   $CVV= '';
}
 
 $sql ="INSERT INTO payment (name, Contact_no, Gender, address, email, Pincode, card_Type, card_no, card_expiration_date , CVV)
 values ('$name', '$Contact_no' ,'$Gender' , '$address' ,'$email' ,'Pincode', '$card_Type' ,'$card_no', '$card_expiration_date' ,'$CVV')";

 $result = mysqli_query($conn,$sql);
  
 if(!$result){
    echo "connection failed !" .mysqli_error($conn);
    exit;
 }
 else
{
 echo "payment succesfully";
 mysqli_close($conn);

}
?>