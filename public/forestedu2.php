<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forest Education Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Forest Education Form</h1>
    <form id="educationForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
      <small>Please enter a 10-digit phone number.</small>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="10" max="21" required>
      <small>Age must be between 10 and 21.</small>

      <label for="college">Institute Name:</label>
      <input type="text" id="college" name="college" required>

      <label for="image">Upload Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>

      <label for="fees">Fees:</label>
      <input type="text" id="fees" name="fees" readonly>

      <button type="submit">Submit</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>

<style>body {
  font-family: Arial, sans-serif;
  background-color: #f0fff0; /* Light green background */
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #8fbc8f; /* Dark green container */
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #fff; /* White text color */
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
  color: #fff; /* White text color */
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
input[type="file"] {
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #556b2f; /* Dark olive border */
  border-radius: 5px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
input[type="file"]:focus {
  outline: none;
  border-color: #8fbc8f; /* Light green border when focused */
}

button {
  padding: 10px;
  background-color: #556b2f; /* Dark olive button */
  color: #fff; /* White text color */
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #8fbc8f; /* Light green button on hover */
}

small {
  color: #fff; /* White text color for validation messages */
}

  </style>
  <script>document.getElementById('educationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const age = parseInt(document.getElementById('age').value);
    let fees = 0;
    
    if (age >= 10 && age <= 12) {
      fees = 50;
    } else if (age >= 13 && age <= 15) {
      fees = 70;
    } else if (age >= 16 && age <= 18) {
      fees = 90;
    } else if (age >= 19 && age <= 20) {
      fees = 100; // Fee for students aged 19 to 20
    } else if (age === 21) {
      fees = 120; // Fee for students aged 21
    } else {
      alert("Age must be between 10 and 21.");
      return;
    }
    
    document.getElementById('fees').value = '$' + fees;
    // Here you can add further logic to submit the form data to a server or display a confirmation message
    // For demonstration purpose, let's just log the form data
    console.log("Form submitted with the following data:");
    console.log("Name: " + document.getElementById('name').value);
    console.log("Email: " + document.getElementById('email').value);
    console.log("Phone: " + document.getElementById('phone').value);
    console.log("Age: " + age);
    console.log("Institute Name: " + document.getElementById('college').value);
    console.log("Fees: $" + fees);
  });
  
  
  </script>