<?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'junglebook';


        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('could not connect:' . mysqli_connect_error());
        }
        else{
            if(isset($_POST['submit']))
  {
    $aname=$_POST['fullName'];
    $cnum=$_POST['email'];
    $fnum=$_POST['phone'];
    $desc=$_POST['address'];
    $avail=$_POST['availability'];
    $inter=$_POST['interests'];
    $ticketid=mt_rand(100000000, 999999999);
    $aimg=$_FILES["image1"]["name"];
    $extension = substr($aimg,strlen($aimg)-4,strlen($aimg));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    
    $aimg=md5($aimg).time().$extension;
     move_uploaded_file($_FILES["image1"]["tmp_name"],"admin/images/".$aimg);
        }
        
       
            //  $query=mysqli_query($con, "insert into  tribel(main_titale, sub_titale, description, image) value('$aname','$cnum','$desc','$aimg')");
            //  $query=mysqli_query($conn, "UPDATE tribel SET main_titale='$aname',sub_titale='$cnum',description='$desc',image='$aimg' WHERE id='$fnum'");
             $query=mysqli_query($conn, "INSERT INTO volunteer(name, e_mail, phone_no, address, images, availability, interests,volunteer_id) VALUES ('$aname','$cnum','$fnum','$desc','$aimg','$avail','$inter','$ticketid')");

        if ($query) {
        
         echo '<script>alert("I-Card is created.")</script>';
        //  header ("Location:index01.php");
        echo "<script>window.location.href='volvo.php?viewid=$ticketid'</script>";
        
      }
      else
        {
           echo '<script>alert("Something Went Wrong. Please try again.")</script>';
        }
     }
    
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junglebook  NGO Volunteer Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Junglebook NGO Volunteer Form</h1>
    <form id="volunteerForm" method="POST" enctype="multipart/form-data">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
<br></br>
      <label for="address">Profile Photo</label>
      <!-- <input type="file" id="address" name="image" required> -->
      <input type="file" class="form-control" id="image" name="image1" aria-describedby="emailHelp" value="" required="true">
      <br></br>

      <label for="availability">Availability:</label>
      <input type="text" id="availability" name="availability" required>

      <label for="interests">Interests:</label>
      <textarea id="interests" name="interests" rows="4" required></textarea>

      <!-- <label for="specializations">Specializations:</label>
      <div class="checkbox-group">
        <input type="checkbox" id="wildlife" name="specializations[]" value="Wildlife">
        <label for="wildlife">Wildlife</label>

        <input type="checkbox" id="conservation" name="specializations[]" value="Conservation">
        <label for="conservation">Conservation</label>

        <input type="checkbox" id="research" name="specializations[]" value="Research">
        <label for="research">Research</label>
      </div> -->

      <button type="submit" name="submit">Join the Jungle book Team!</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>

<?php } ?>
<style>
    body {
  font-family: 'Arial', sans-serif;
  background-color: #f3f3f3;
  margin: 0;
  padding: 20px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #33691e;
  text-align: center;
}

form {
  max-width: 400px;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #33691e;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.checkbox-group {
  margin-bottom: 15px;
}

.checkbox-group input[type="checkbox"] {
  display: none;
}

.checkbox-group label {
  display: inline-block;
  padding: 8px 16px;
  background-color: #b2ff59;
  color: #33691e;
  border-radius: 20px;
  cursor: pointer;
  margin-right: 10px;
}

.checkbox-group label:hover {
  background-color: #8bc34a;
}

.checkbox-group input[type="checkbox"]:checked + label {
  background-color: #33691e;
  color: #fff;
}

button {
  display: block;
  width: 100%;
  padding: 12px;
  background-color: #33691e;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #558b2f;
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('volunteerForm');

  form.addEventListener('submit', function (event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });

  function validateForm() {
    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
    const availability = document.getElementById('availability').value.trim();
    const interests = document.getElementById('interests').value.trim();

    if (fullName === '' || email === '' || phone === '' || address === '' || availability === '' || interests === '') {
      alert('Please fill in all fields');
      return false;
    }

    return true;
  }
});

</script>
<!--php
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('volunteerForm');

  form.addEventListener('submit', function (event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });

  function validateForm() {
    const fullName = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
    const availability = document.getElementById('availability').value.trim();
    const interests = document.getElementById('interests').value.trim();

    if (fullName === '' || email === '' || phone === '' || address === '' || availability === '' || interests === '') {
      alert('Please fill in all fields');
      return false;
    }

    return true;
  }
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forest NGO Volunteer Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Forest NGO Volunteer Form</h1>
    <form id="volunteerForm" action="process_form.php" method="POST">
      <!-- Personal Information -->
      <!-- <fieldset>
        <legend>Personal Information</legend>
        <div class="form-group">
          <label for="fullName">Full Name:</label>
          <input type="text" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob">
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </fieldset> -->

      <!-- Availability -->
      <!-- <fieldset>
        <legend>Availability</legend>
        <div class="form-group">
          <label for="daysAvailable">Days Available:</label>
          <input type="text" id="daysAvailable" name="daysAvailable" placeholder="E.g., Monday, Wednesday">
        </div>
        <div class="form-group">
          <label for="timesAvailable">Times Available:</label>
          <input type="text" id="timesAvailable" name="timesAvailable" placeholder="E.g., Morning, Afternoon">
        </div>
      </fieldset> -->

      <!-- Skills and Experience -->
      <!-- <fieldset>
        <legend>Skills and Experience</legend>
        <div class="form-group">
          <label for="workExperience">Work Experience:</label>
          <textarea id="workExperience" name="workExperience" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="volunteerExperience">Volunteer Experience:</label>
          <textarea id="volunteerExperience" name="volunteerExperience" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="education">Education and Qualifications:</label>
          <textarea id="education" name="education" rows="4"></textarea>
        </div>
      </fieldset> -->

      <!-- Interests -->
      <!-- <fieldset>
        <legend>Interests</legend>
        <div class="form-group">
          <label for="areasOfInterest">Areas of Interest:</label>
          <textarea id="areasOfInterest" name="areasOfInterest" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="projectsOfInterest">Projects of Interest:</label>
          <textarea id="projectsOfInterest" name="projectsOfInterest" rows="4"></textarea>
        </div>
      </fieldset> -->

      <!-- Languages -->
      <!-- <fieldset>
        <legend>Languages</legend>
        <div class="form-group">
          <label for="languages">Languages Spoken:</label>
          <input type="text" id="languages" name="languages">
        </div>
      </fieldset> -->

      <!-- Emergency Contact -->
      <!-- <fieldset>
        <legend>Emergency Contact</legend>
        <div class="form-group">
          <label for="emergencyContactName">Emergency Contact Name:</label>
          <input type="text" id="emergencyContactName" name="emergencyContactName">
        </div>
        <div class="form-group">
          <label for="emergencyContactPhone">Emergency Contact Phone:</label>
          <input type="tel" id="emergencyContactPhone" name="emergencyContactPhone">
        </div>
        <div class="form-group">
          <label for="relationship">Relationship to Contact:</label>
          <input type="text" id="relationship" name="relationship">
        </div>
      </fieldset> -->

      <!-- Physical Fitness -->
      <!-- <fieldset>
        <legend>Physical Fitness</legend>
        <div class="form-group">
          <label for="fitnessLevel">Fitness Level:</label>
          <input type="text" id="fitnessLevel" name="fitnessLevel">
        </div>
        <div class="form-group">
          <label for="medicalConditions">Medical Conditions or Allergies:</label>
          <textarea id="medicalConditions" name="medicalConditions" rows="4"></textarea>
        </div>
      </fieldset> -->

      <!-- References -->
      <!-- <fieldset>
        <legend>References</legend>
        <div class="form-group">
          <label for="referenceName">Reference Name:</label>
          <input type="text" id="referenceName" name="referenceName">
        </div>
        <div class="form-group">
          <label for="referenceContact">Reference Contact Information:</label>
          <input type="text" id="referenceContact" name="referenceContact">
        </div>
        <div class="form-group">
          <label for="referenceRelationship">Relationship to Reference:</label>
          <input type="text" id="referenceRelationship" name="referenceRelationship">
        </div>
      </fieldset> -->

      <!-- Social Media Handles -->
      <!-- <fieldset>
        <legend>Social Media Handles</legend>
        <div class="form-group">
          <label for="linkedin">LinkedIn Profile:</label>
          <input type="text" id="linkedin" name="linkedin">
        </div>
        <div class="form-group">
          <label for="twitter">Twitter Handle:</label>
          <input type="text" id="twitter" name="twitter">
        </div>
        <div class="form-group">
          <label for="instagram">Instagram Handle:</label>
          <input type="text" id="instagram" name="instagram">
        </div>
      </fieldset> -->

      <!-- Transportation -->
      <!-- <fieldset>
        <legend>Transportation</legend>
        <div class="form-group">
          <label for="ownTransportation">Own Transportation Availability:</label>
          <input type="text" id="ownTransportation" name="ownTransportation">
        </div>
        -->
<!--<!?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Personal Information
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];

  // Availability
  $daysAvailable = $_POST['daysAvailable'];
  $timesAvailable = $_POST['timesAvailable'];

  // Skills and Experience
  $workExperience = $_POST['workExperience'];
  $volunteerExperience = $_POST['volunteerExperience'];
  $education = $_POST['education'];

  // Interests
  $areasOfInterest = $_POST['areasOfInterest'];
  $projectsOfInterest = $_POST['projectsOfInterest'];

  // Languages
  $languages = $_POST['languages'];

  // Emergency Contact
  $emergencyContactName = $_POST['emergencyContactName'];
  $emergencyContactPhone = $_POST['emergencyContactPhone'];
  $relationship = $_POST['relationship'];

  // Physical Fitness
  $fitnessLevel = $_POST['fitnessLevel'];
  $medicalConditions = $_POST['medicalConditions'];

  // References
  $referenceName = $_POST['referenceName'];
  $referenceContact = $_POST['referenceContact'];
  $referenceRelationship = $_POST['referenceRelationship'];

  // Social Media Handles
  $linkedin = $_POST['linkedin'];
  $twitter = $_POST['twitter'];
  $instagram = $_POST['instagram'];

  // Transportation
  $ownTransportation = $_POST['ownTransportation'];

  // You can perform further validation or processing here
  // For demonstration purposes, just displaying the received data

  echo "<!DOCTYPE html>";
  echo "<html lang='en'>";
  echo "<head>";
  echo "<meta charset='UTF-8'>";
  echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  echo "<title>Thank You!</title>";
  echo "<link rel='stylesheet' href='styles.css'>";
  echo "</head>";
  echo "<body>";
  echo "<div class='container'>";
  echo "<h1>Thank You for Volunteering!</h1>";
  echo "<h2>Personal Information</h2>";
  echo "<p><strong>Name:</strong> $fullName</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Address:</strong> $address</p>";
  echo "<p><strong>Date of Birth:</strong> $dob</p>";
  echo "<p><strong>Gender:</strong> $gender</p>";

  echo "<h2>Availability</h2>";
  echo "<p><strong>Days Available:</strong> $daysAvailable</p>";
  echo "<p><strong>Times Available:</strong> $timesAvailable</p>";

  echo "<h2>Skills and Experience</h2>";
  echo "<p><strong>Work Experience:</strong> $workExperience</p>";
  echo "<p><strong>Volunteer Experience:</strong> $volunteerExperience</p>";
  echo "<p><strong>Education and Qualifications:</strong> $education</p>";

  echo "<h2>Interests</h2>";
  echo "<p><strong>Areas of Interest:</strong> $areasOfInterest</p>";
  echo "<p><strong>Projects of Interest:</strong> $projectsOfInterest</p>";

  echo "<h2>Languages</h2>";
  echo "<p><strong>Languages Spoken:</strong> $languages</p>";

  echo "<h2>Emergency Contact</h2>";
  echo "<p><strong>Emergency Contact Name:</strong> $emergencyContactName</p>";
  echo "<p><strong>Emergency Contact Phone:</strong> $emergencyContactPhone</p>";
  echo "<p><strong>Relationship to Contact:</strong> $relationship</p>";

  echo "<h2>Physical Fitness</h2>";
  echo "<p><strong>Fitness Level:</strong> $fitnessLevel</p>";
  echo "<p><strong>Medical Conditions or Allergies:</strong> $medicalConditions</p>";

  echo "<h2>References</h2>";
  echo "<p><strong>Reference Name:</strong> $referenceName</p>";
  echo "<p><strong>Reference Contact Information:</strong> $referenceContact</p>";
  echo "<p><strong>Relationship to Reference:</strong> $referenceRelationship</p>";

  echo "<h2>Social Media Handles</h2>";
  echo "<p><strong>LinkedIn:</strong> $linkedin</p>";
  echo "<p><strong>Twitter:</strong> $twitter</p>";
  echo "<p><strong>Instagram:</strong> $instagram</p>";

  echo "<h2>Transportation</h2>";
  echo "<p><strong>Own Transportation Availability:</strong> $ownTransportation</p>";

  echo "</div>";
  echo "</body>";
  echo "</html>";
} else {
  // Redirect back to the form if accessed directly
  header("Location: index.html");
  exit();
}
?>
-->