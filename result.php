
<?php
$username="";
$errors = array();
$pid = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '','iplinks');
//(isset($_POST['reg_user']))
//
$username=$_POST['user'];
//echo $username;

$user_check_query = "SELECT * FROM linlist WHERE url='$username'";
$result = mysqli_query($db, $user_check_query);

$row=mysqli_fetch_array($result);

if ($username==$row['url'])
{
	if ($row['p_id']==1)
	{
		echo "Unsafe";
	}
	else
	{
		echo "Safe";
	}
}
else
{
	header ("Location:abc.py");
}


//  if (empty($username)) { array_push($errors, "URL Required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

/*
  $user_check_query = "SELECT * FROM linlist WHERE url='$username' and p_id='1'";
  $result = mysqli_query($db, $user_check_query);

$user_check_query1 = "SELECT * FROM linlist WHERE url='$username'";
$result1 = mysqli_query($db, $user_check_query1);
$res1=mysqli_num_rows($result1);

if ($res1==0)
{
    header ("Location:abc.py");
}

$res=mysqli_num_rows($result);



if ($res>0)
{
    echo "Unsafe";
}
else
if ($res==0)
{
    echo "Safe";
}

header ("Location:abc.py");
*/


?>

