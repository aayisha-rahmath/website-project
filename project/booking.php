<?php
$connection = mysqli_connect('localhost', 'root', '', 'projectdb');
if (!$connection) {
    die(mysqli_connect_error());
}

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];
    $num_adults = $_POST['num_adults'];
    $num_children = $_POST['num_children'];
    $message = $_POST['message'];
}

    $sql = "INSERT INTO Booking_Form (Name, Email, Phone, Destination, Departure_Date, Return_Date, Number_of_Adults, Number_of_Children, Additional_Message) 
    VALUES ('name', 'email', 'phone', 'destination', 'departure_date', 'return_date', 'num_adults', 'num_children', 'message')";

    $results = mysqli_query($connection, $sql);
	
if ($results) {
        // Redirect to the home page after successful submission
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('images/img.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

/* Container */
.container {
  background-color: rgba(255, 255, 255, 0.8); 
  padding: 20px;
  border-radius: 10px;
  width: 400px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}

/* Header */
h1 {
  text-align: center;
  font-family: 'Roboto Serif', serif;

}

/* Form */
form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  font-family: 'Roboto Serif', serif;
  text-align: left;
  margin-left: 15px;
}

/* Label */
label {
  font-weight: bold;
  font-family: 'Roboto Serif', serif;
  font-size: 25px;

}

/* Input and textarea */
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="number"],
textarea {
  width: 40%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: 'Roboto Serif', serif;
}

/* Submit button */
input[type="submit"] {
  background-color:#FFCC70;
  color: black;
  border: 2px solid #70AFFF; 
  padding: 20px;
  width: 20%;
  border-radius: 10px;
  font-family: 'Roboto Serif', serif;
  font-size: 20px;
  cursor: pointer;
}
</style>
</head>
<body>
	<form action="booking.php" method="POST">
	<h1>Travel Agent Booking Form</h1>

        <label for="name">Name:</label>
        <input type="text" class="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" class="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" class="phone" name="phone" required><br><br>

        <label for="destination">Destination:</label>
        <input type="text" class="destination" name="destination" required><br><br>

        <label for="departure-date">Departure Date:</label>
        <input type="date" class="departure_date" name="departure_date" required><br><br>

        <label for="return-date">Return Date:</label>
        <input type="date" class="return_date" name="return_date" required><br><br>

        <label for="num-adults">Number of Adults:</label>
        <input type="number" class="num_adults" name="num_adults" min="1" required><br><br>

        <label for="num-children">Number of Children:</label>
        <input type="number" class="num_children" name="num_children" min="0" required><br><br>

        <label for="message">Additional Message:</label><br>
        <textarea class="message" name="message" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>