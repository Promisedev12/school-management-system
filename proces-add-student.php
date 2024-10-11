<?php
require_once"./connect.php";
if (isset($_POST['submit'])) {
  $fname1 = $_POST['fname'];
  $lname1 = $_POST['lname'];
  $gender1 = $_POST['gender'];
  $dob1 = $_POST['dob'];
  $enrolNum = $_POST['enrolNum'];
  $bloodGroup1 = $_POST['BloodGroup'];
  $religion1 = $_POST['religion'];
  $email1 = $_POST['email'];
  $class1 = $_POST['class'];
  $section1 = $_POST['section'];
  $administrationID1 = $_POST['adminisID'];
  $phoneNum1 = $_POST['phoneNum'];

  if ((empty($fname1) || empty($lname1) || empty($gender1) ||empty($dob1) || empty($enrolNum) || empty($bloodGroup1) || empty($religion1) || empty($email1) || empty($class1) ||empty($section1) || empty($administrationID1) || empty($phoneNum1) )) {
   
    
    header("Location: add-student.php?error=Make sure you fill in all informations");
    die();
    
  }
  elseif(!filter_var($email1, FILTER_VALIDATE_EMAIL)){
    header("Location: add-student.php?error=Invalid email");
    die();
  }
  elseif($religion1 == 'null'){
    header("Location: add-student.php?error=Make sure you chose you religion");
    die();
  }
  elseif ($class1 == 'null') {
    header("Location: add-student.php?error=Make sure you chose you class");
    die();
  }
  elseif ($bloodGroup1 == 'null') {
    header("Location: add-student.php?error=Make sure you chose you blood group");
    die();
  }
  elseif ($section1 == 'null') {
    header("Location: add-student.php?error=Make sure you chose you section");
    die();
  }
  elseif ($_FILES['photo']['error'] !== 0) {
    header("Location: add-student.php?error=No photo added. Make sure add your photo");
    die();
  }
  else {
    $photo = $_FILES['photo'];
    $photoName = $_FILES['photo']['name'];
    $photoTempName = $_FILES['photo']['tmp_name'];
    $photSize = $_FILES['photo']['size'];
    $photoType = $_FILES['photo']['type'];

    $tempExt = explode('.', $photoName);
    $ext = strtolower(end($tempExt));

    $allowed = ['jpg', 'jpeg', 'png'];
    if (!in_array($ext, $allowed)) {
      header("Location: add-student.php?error=You can not upload files of {$ext} extension");
      die();
    }
    else{
      if ($photSize>5000000) {
        header("Location: add-student.php?error=Your file is too big");
        die();
      }
      else{
        $actualPhtoName = $enrolNum . '.' . $ext;
        $photoDestination = 'student_photos/' . $actualPhtoName;
        move_uploaded_file($photoTempName, $photoDestination);
        $sql = "INSERT INTO student VALUES('', '$fname1', '$lname1', '$gender1', '$dob1', '$enrolNum', '$bloodGroup1', '$religion1', '$email1', '$class1', '$section1', '$administrationID1', '$phoneNum1', '$photoDestination' )";
        $results = mysqli_query($connection, $sql);
        if ($results) {
          echo "Student added";
        }
      }
    }

    
  }
}