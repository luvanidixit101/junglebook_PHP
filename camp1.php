<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jungle Book NGO Camping Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Jungle Book NGO Camping Form</h1>
    <form id="campingForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>

      <label for="destination">Destination:</label>
      <select id="destination" name="destination" required>
        <option value="">Select Destination</option>
        <option value="leh">Leh Ladakh - $100</option>
        <option value="saputara">Saputara - $60</option>
        <option value="gir">Gir - $70</option>
        <option value="kaziranga">Kaziranga - $90</option>
        <option value="massuurri">Mussourie - $85</option>
        <option value="munner">Munner - $75</option>
      </select>

    

      <label for="image">Upload your Image:</label>
<input type="file" id="image" name="image" accept="image/*">


      <div id="totalFee" style="display: none;">
        <label>Total Fee:</label>
        <input type="text" id="fee" name="fee" readonly>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>


<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f0f7f4;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #cce5cc;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #195e28;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
textarea {
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px;
  background-color: #195e28;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #13401d;
}

</style>
<script>
    document.getElementById('destination').addEventListener('change', function() {
  const destination = this.value;
  let fee = 0;

  switch(destination) {
    case 'leh':
      fee = 100;
      break;
    case 'saputara':
      fee = 80;
      break;
    case 'gir':
      fee = 60;
      break;
      case 'kaziranga':
      fee = 60;
      break;
      case 'massuurri':
      fee = 60;
      break;
      case 'munner':
      fee = 60;
      break;
    default:
      fee = 0;
  }
  
  
  if (fee > 0) {
    document.getElementById('totalFee').style.display = 'block';
    document.getElementById('fee').value = '$' + fee;
  } else {
    document.getElementById('totalFee').style.display = 'none';
    document.getElementById('fee').value = '';
  }
});
document.getElementById('image').addEventListener('change', function() {
  const file = this.files[0]; // Get the selected file
  const reader = new FileReader(); // Create a FileReader object

  reader.onload = function(event) {
    // Set the src attribute of an image element to the uploaded image
    document.getElementById('imagePreview').src = event.target.result;
  };

  // Read the uploaded file as a URL
  reader.readAsDataURL(file);
});


document.getElementById('campingForm').addEventListener('submit', function(event) {
  event.preventDefault();
  // You can add form submission logic here, like sending data to a server or displaying a confirmation message
  alert('Your camping form has been submitted successfully!');
});

</script>