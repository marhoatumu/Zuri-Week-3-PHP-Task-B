<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-id-card"></i>
      <h1>Register to our website</h1>
      <p>Create a free account to enjoy all the benefits of our website.</p>
    </div>
    <form action="user_data.php" method="$_GET">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Please fill in your information below:</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" name="firstName" placeholder="First name" required>
        <input class="fname" type="text" name="lastName" placeholder="Last name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="date" name="birthDate" required max="2022-10-10">
        <label for="Gender">Choose your gender:</label>
        <select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <input class="fname" type="text" name="country" placeholder="Country" required> 
      </div>
      <button type="submit" href="/">Submit</button>
    </form>
  </div>
</body>

</html>