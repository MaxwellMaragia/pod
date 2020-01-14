<?php
include('includes/config.php');


if(isset($_POST['btn_action']))
{
  if(isset($_POST['radiotype'])){
  	$radiotype = $_POST['radiotype'];
  }
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
      // validation
  $db->where ('email', $email);
  if($db->get ('users'))
  {

      $_SESSION['response']="Action cannot be completed! try again";
      $_SESSION['res_type']="danger";
  }else
  {
  	$data = array("name"=>$name,"email"=>$email,"mobile"=>$phone,"password"=>$password,"user"=>$radiotype);
    if($db->insert('users',$data))
    {
        $_SESSION['response']="Account successfully created";
        $_SESSION['res_type']="success";
    }
    else
    {

          $_SESSION['response']="Error while inserting";
          $_SESSION['res_type']="danger";
    }
  }
}


if (isset($_POST['reg_check'])) {
  	$emailaddress = $_POST['email'];
  	$db->where ('email', $emailaddress);
  	$results = $db->get ('users');
  	if ($results) {
  	  echo "exist";	
  	}else{
  	  echo 'not_exist';
  	}
  	exit();
  }
?>