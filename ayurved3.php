<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ayurveda Research Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Ayurveda Research Form</h1>
    <form id="researchForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="18" required>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="address">Address:</label>
      <textarea id="address" name="address" rows="4" required></textarea>

      <label for="destination">Destination:</label>
      <select id="destination" name="destination" required>
        <option value="">Select Destination</option>
        <option value="rishikesh">Rishikesh - Rs.120</option>
        <option value="haridwar">Haridwar - RS.100</option>
      </select>

      <label for="image">Upload Image:</label>
      <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
      

     
      <label for="fee">Fees:</label>
      <input type="text" id="fee" name="fee" readonly>

      <button type="submit">Submit</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0fff0; /* Light green background */
  margin: 0;
  padding: 0;
  margin-top: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #8fbc8f; /* Dark green container */
  padding: 20px;
  border-radius: 10px;
  height:670px;
  width: 400px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #fff; /* White text color */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for better readability */
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
select,
textarea {
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #556b2f; /* Dark olive border */
  border-radius: 5px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
select:focus,
textarea:focus {
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

</style>
<script>
    document.getElementById('destination').addEventListener('change', function() {
  const destination = this.value;
  let fee = 0;

  switch(destination) {
    case 'rishikesh':
      fee = 120; // Fee for Rishikesh
      break;
    case 'haridwar':
      fee = 100; // Fee for Haridwar
      break;
    default:
      fee = 0;
  }

  document.getElementById('fee').value = 'Rs' + fee;
});

  function previewImage(event) {
    const imageFile = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      const imgElement = document.getElementById('preview');
      imgElement.src = reader.result;
    }

    reader.readAsDataURL(imageFile);
  }



document.getElementById('researchForm').addEventListener('submit', function(event) {
  event.preventDefault();
  // You can add form submission logic here, such as sending data to a server or displaying a confirmation message
  alert('Your Ayurveda research form has been submitted successfully!');
});

</script>