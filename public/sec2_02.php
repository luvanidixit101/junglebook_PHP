<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <script>
        function showInputBasedOnContactMethod() {
            var contactMethod = document.getElementById("contactMethod");
            var emailInput = document.getElementById("emailInput");
            var phoneInput = document.getElementById("phoneInput");

            if (contactMethod.value === "email") {
                emailInput.style.display = "block";
                phoneInput.style.display = "none";
            } else if (contactMethod.value === "phone") {
                emailInput.style.display = "none";
                phoneInput.style.display = "block";
            } else {
                emailInput.style.display = "none";
                phoneInput.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Access the selected value from the dropdown list
        $selectedOption = $_POST['contactMethod'];

        // Access the email and phone number if present
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';

        // Do whatever you want with the selected value and contact details
        echo "Selected contact method: " . $selectedOption . "<br>";
        if ($selectedOption === "email") {
            echo "Email: " . $email;
        } elseif ($selectedOption === "phone") {
            echo "Phone number: " . $phoneNumber;
        }
    }
    ?>

    
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forest Justice and Reporting/Inquiry Form</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  color:#33691e;
}

form {
  background: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #33691e;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
textarea,
select {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
</head>
<body>
  <div class="container">
    <h1>Forest Justice and Reporting/Inquiry Form</h1>
    <form id="forestForm" action="submit_form.php" method="POST">
      <!-- Personal Information -->
      <fieldset>
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
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required>
        </div>
      </fieldset>

      <!-- Nature of Inquiry -->
      <fieldset>
        <legend>Nature of Inquiry</legend>
        <div class="form-group">
          <label for="incidentDescription">Description of Incident:</label>
          <textarea id="incidentDescription" name="incidentDescription" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label for="incidentDate">Date of Incident:</label>
          <input type="date" id="incidentDate" name="incidentDate" required>
        </div>
        <div class="form-group">
          <label for="incidentLocation">Location of Incident:</label>
          <input type="text" id="incidentLocation" name="incidentLocation" required>
        </div>
        <div class="form-group">
          <label for="violationType">Type of Violation:</label>
          <input type="text" id="violationType" name="violationType" required>
        </div>
      </fieldset>

      <!-- Legal Details -->
      <fieldset>
        <legend>Legal Details</legend>
        <div class="form-group">
          <label for="legalDocumentation">Legal Documentation:</label>
          <input type="file" id="legalDocumentation" name="legalDocumentation">
        </div>
        <div class="form-group">
          <label for="legalViolations">Description of Legal Violations:</label>
          <textarea id="legalViolations" name="legalViolations" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label for="witnesses">Witnesses (if any):</label>
          <input type="text" id="witnesses" name="witnesses">
        </div>
      </fieldset>

      <!-- Environmental Impact -->
      <fieldset>
        <legend>Environmental Impact</legend>
        <div class="form-group">
          <label for="impactDescription">Description of Impact:</label>
          <textarea id="impactDescription" name="impactDescription" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="endangeredSpecies">Endangered Species Affected:</label>
          <input type="text" id="endangeredSpecies" name="endangeredSpecies">
        </div>
        <div class="form-group">
          <label for="damageAssessment">Damage Assessment:</label>
          <input type="text" id="damageAssessment" name="damageAssessment">
        </div>
      </fieldset>

      <!-- Previous Actions Taken -->
      <fieldset>
        <legend>Previous Actions Taken</legend>
        <div class="form-group">
          <label for="previousReports">Previous Reports Filed:</label>
          <textarea id="previousReports" name="previousReports" rows="4 "></textarea>
        </div>
        <div class="form-group">
          <label for="response">Response from Authorities/Organizations:</label>
          <textarea id="response" name="response" rows="4"></textarea>
        </div>
      </fieldset>

      <!-- Desired Outcome -->
      <fieldset>
        <legend>Desired Outcome</legend>
        <div class="form-group">
          <label for="desiredAction">Desired Action or Resolution:</label>
          <textarea id="desiredAction" name="desiredAction" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label for="supportNeeded">Support Needed:</label>
          <textarea id="supportNeeded" name="supportNeeded" rows="4"></textarea>
        </div>
      </fieldset>

      <!-- Supporting Evidence -->
      <fieldset>
        <legend>Supporting Evidence</legend>
        <div class="form-group">
          <label for="evidence">Upload Photos or Videos:</label>
          <input type="file" id="evidence" name="evidence">
        </div>
        <div class="form-group">
          <label for="reports">Upload Reports or Studies:</label>
          <input type="file" id="reports" name="reports">
        </div>
      </fieldset>

      <!-- Contact Information -->
      <fieldset>
        <legend>Contact Information for Follow-up</legend>
        <div class="form-group">
          <!-- <label for="contactMethod">Preferred Contact Method:</label>
          <select id="contactMethod" name="contactMethod" required>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="mail">Mail</option>
          </select>
        </div> -->
        <!-- <form method="post"> -->
        <div class="form-group">
            <label for="contactMethod">Preferred Contact Method:</label>
            <select id="contactMethod" name="contactMethod" required onchange="showInputBasedOnContactMethod()">
                <option value="mail">  </option>
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                
            </select>
        </div>
        <div class="form-group" id="emailInput" style="display: none;">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group" id="phoneInput" style="display: none;">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber">
        </div>
        <!-- <button type="submit">Submit</button> -->
    <!-- </form> -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Access the selected value from the dropdown list
          $selectedOption = $_POST['contactMethod'];
      
          // Do whatever you want with the selected value
          echo "Selected contact method: " . $selectedOption;
      }
        ?>

        <div class="form-group">
          <label for="bestTime">Best Time to Contact:</label>
          <input type="text" id="bestTime" name="bestTime">
        </div>
      </fieldset>

      <!-- Confidentiality and Consent -->
      <fieldset>
        <legend>Confidentiality and Consent</legend>
        <div class="form-group">
          <label for="shareInfo">Consent to Share Information:</label>
          <input type="checkbox" id="shareInfo" name="shareInfo" required>
          <span>I agree to share the provided information with relevant authorities or organizations.</span>
        </div>
        <div class="form-group">
          <label for="keepConfidential">Agreement to Keep Information Confidential:</label>
          <input type="checkbox" id="keepConfidential" name="keepConfidential">
          <span>I understand that the provided information will be kept confidential as needed.</span>
        </div>
      </fieldset>

      <!-- Additional Comments -->
      <fieldset>
        <legend>Additional Comments or Details</legend>
        <div class="form-group">
          <label for="additionalComments">Additional Comments:</label>
          <textarea id="additionalComments" name="additionalComments" rows="4"></textarea>
        </div>
      </fieldset>

      <!-- Submit Button -->
      <div class="form-group">
        <button type="submit" name="submit">Submit</button>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
<script>
    // Basic form validation
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("forestForm");

  form.addEventListener("submit", function(event) {
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const incidentDescription = document.getElementById("incidentDescription").value;
    const incidentDate = document.getElementById("incidentDate").value;
    const incidentLocation = document.getElementById("incidentLocation").value;
    const violationType = document.getElementById("violationType").value;
    const legalViolations = document.getElementById("legalViolations").value;
    const desiredAction = document.getElementById("desiredAction").value;
    const contactMethod = document.getElementById("contactMethod").value;
    const shareInfo = document.getElementById("shareInfo").checked;

    // Simple validation example, you can add more complex validation as needed
    if (!fullName || !email || !phone || !incidentDescription || !incidentDate || !incidentLocation || !violationType || !legalViolations || !desiredAction || !contactMethod || !shareInfo) {
      alert("Please fill out all required fields.");
      event.preventDefault();
    }
  });
});

</script>
<!--<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the form data
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $incidentDescription = $_POST['incidentDescription'];
  $incidentDate = $_POST['incidentDate'];
  $incidentLocation = $_POST['incidentLocation'];
  $violationType = $_POST['violationType'];
  $legalViolations = $_POST['legalViolations'];
  $desiredAction = $_POST['desiredAction'];
  $contactMethod = $_POST['contactMethod'];
  $shareInfo = isset($_POST['shareInfo']) ? 'Yes' : 'No';
  $keepConfidential = isset($_POST['keepConfidential']) ? 'Yes' : 'No';
  $additionalComments = $_POST['additionalComments'];

  // Display the submitted data (for demonstration purposes)
  echo "<h1>Submitted Information:</h1>";
  echo "<p><strong>Full Name:</strong> $fullName</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Description of Incident:</strong> $incidentDescription</p>";
  echo "<p><strong>Date of Incident:</strong> $incidentDate</p>";
  echo "<p><strong>Location of Incident:</strong> $incidentLocation</p>";
  echo "<p><strong>Type of Violation:</strong> $violationType</p>";
  echo "<p><strong>Description of Legal Violations:</strong> $legalViolations</p>";
  echo "<p><strong>Desired Action or Resolution:</strong> $desiredAction</p>";
  echo "<p><strong>Preferred Contact Method:</strong> $contactMethod</p>";
  echo "<p><strong>Consent to Share Information:</strong> $shareInfo</p>";
  echo "<p><strong>Agreement to Keep Information Confidential:</strong> $keepConfidential</p>";
  echo "<p><strong>Additional Comments:</strong> $additionalComments</p>";

} else {
  // Redirect back to the form if accessed directly
  header("Location: index.html");
  exit();
}
?>
-->
