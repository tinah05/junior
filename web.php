
<?php
session_start();
// initializing variables
$id ="";
$fname = "";
$lname = "";
$genger ="";
$status ="";
$class ="";
$subject ="";
$email ="";
$phone ="";
$message ="";
$errors = array();

// connect to the database
$student = mysqli_connect('localhost', 'root', '', 'students');

// REGISTER USER
if (isset($_POST['submit'])) {
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){}
  // receive all input values from the form
  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
  $fname= mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $status = mysqli_real_escape_string($conn, $_POST['status']);
  $class = mysqli_real_escape_string($conn, $_POST['class']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id)) { array_push($errors, "id is required"); }
  if (empty($fname)) { array_push($errors, "fname is required"); }
  if (empty($lname)) { array_push($errors, "lname is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($status)) { array_push($errors, "status is required"); }
  if (empty($class)) { array_push($errors, "class is required"); }
  if (empty($subject)) { array_push($errors, "subject is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }

  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE id='$id' OR email='$email' LIMIT 1";
  $result = mysqli_query($connect, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['password'] === $password) {
      array_push($errors, "password already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users  (id, email, fname,lname, gender, status, class, subjet, email, phone, message,)
  			  VALUES('$id', '$email', '$fname','$lname','$gender','$status','$class','$subject','$email','$phone','$message')";
  	if(mysqli_query($conn, $query))
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now registered";
  	header('location: config.php');
  }

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($student, $_POST['email']);
    $password = mysqli_real_escape_string($student, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now registered";
          header('LOCATION: config.php');
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
    
  }
  ?>
</body>
</html>
