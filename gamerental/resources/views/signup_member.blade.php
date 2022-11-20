<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/userHead')
    <title>Signup</title>
</head>

<body>

    <form action="/signup_member" method="POST" enctype="multipart/form-data">
        @csrf


        <label>First name</label>
        <input type="text" name="fname"><br>
        <label>Last name</label>
        <input type="text" name="lname"><br>
        <label>Date of Birth</label>
        <input type="date" name="dob"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <label>Confirm Password</label>
        <input type="password" name="confirmPass"><br>
        <label>Contact Number</label>
        <input type="text" name="contact"><br>
        <label>Address</label>
        <input type="text" name="address"><br>
        <label>Upload profile photo:</label>
        <input type="file" name="profile" accept="{{ $allowed_img_format }}">
        <label>Upload governement ID:</label>
        <input type="file" name="id">
        <label>Upload Proof of Billing:</label>
        <input type="file" name="proof">
        <button type="submit">Submit</button>

    </form>
</body>

</html>
