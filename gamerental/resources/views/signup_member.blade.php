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
<<<<<<< HEAD
        
=======

>>>>>>> 38a382c4dd9ae29f3fe007d3ae31a1d98d345a7b
        <label>First name</label>
        <input type="text" name="fname"><br>
        <label>Last name</label>
        <input type="text" name="lname"><br>
        <label>Date of Birth</label>
        <input type="date" name="dob"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Password</label>
<<<<<<< HEAD
        <input type="password" name="password"><br>
=======
        <input type="password" name="password">><br>
>>>>>>> 38a382c4dd9ae29f3fe007d3ae31a1d98d345a7b
        <label>Confirm Password</label>
        <input type="password" name="confirmPass"><br>
        <label>Contact Number</label>
        <input type="text" name="contact"><br>
        <label>Address</label>
        <input type="text" name="address"><br>
        <label>Upload profile photo:</label>
<<<<<<< HEAD
        <input type="file" name="profile" accept="{{ $allowed_img_format }}">
=======
        <input type="file" name="profile" accept="{{ $allowed_img_format }}"></input>
>>>>>>> 38a382c4dd9ae29f3fe007d3ae31a1d98d345a7b
        <label>Upload governement ID:</label>
        <input type="file" name="id">
        <label>Upload Proof of Billing:</label>
        <input type="file" name="proof">
        <button type="submit">Submit</button>
<<<<<<< HEAD
=======

>>>>>>> 38a382c4dd9ae29f3fe007d3ae31a1d98d345a7b
    </form>
</body>

</html>
