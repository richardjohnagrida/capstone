<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/signup_member" method="POST" enctype="multipart/form-data">
        @csrf
      
        <label>First name</label>
        <input type="text" name="fname"></input><br>
        <label>Last name</label>
        <input type="text" name="lname"></input><br>
        <label>Date of Birth</label>
        <input type="date" name="dob"></input><br>
        <label>Email</label>
        <input type="email" name="email"></input><br>
        <label>Password</label>
        <input type="text" name="password"></input><br>
        <label>Confirm Password</label>
        <input type="text" name="confirmPass"></input><br>
        <label>Contact Number</label>
        <input type="text" name="contact"></input><br>
        <label>Address</label>
        <input type="text" name="address"></input><br>
        <label>Upload profile photo:</label>
        <input type="file" name="profile"></input>
        <label>Upload governement ID:</label>
        <input type="file" name="id"></input>
        <label>Upload Proof of Billing:</label>
        <input type="file" name="proof"></input>
        <button type="submit">Submit</button>
    </form>
</body>
</html>