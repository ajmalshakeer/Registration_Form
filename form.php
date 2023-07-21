<?php
$pass = "12345";
$password = $_POST["password"];
if( $password == $pass){
    $check_pass = "Correct Password";
}
else{
    $check_pass = "Incorrect Password";
}



$radioVal = $_POST["gender"];;

if($radioVal == "female")
{
    $gender = "Female";
}
else if ($radioVal == "male")
{
    $gender = "Male";
}

?>

<h2> Form Handling</h2>
<b>Student Name:</b> <?php echo $_POST["name"]; ?><br>
Password: <?php echo $check_pass; ?><br>
Address: <?php echo $_POST["address"]; ?><br>
Gender: <?php echo $gender; ?><br>
Skill Set: 

<?php
$sname = $_POST['skill'];
foreach ($sname as $skill){ 
    echo $skill;
}
?>