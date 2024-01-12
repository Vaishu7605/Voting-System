<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration </title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <style>
        #Imagepart{
                border: 2px solid black;
                border-radius: 5px;
                padding: 10px;
                width: 30%;
            }
            #role{
                border: 2px solid black;
                border-radius: 5px;
                padding: 10px;
                width: 30%;
            }
            #role select{
                padding: 15px;
                border-radius: 5px;
            }
    </style>
    <center>
    <h1>Online Voting System</h1>
    <hr>
    <h3>Registration</h3>
    <form action="../api/register.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter name">
        <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
        <input type="address" name="address" placeholder="Address" style="width: 30%;"><br><br>
        <div id="Imagepart">
            Upload image:<input type="file" name="photo">
        </div>
        <br>
        <div id="role">
            Select your role:<select name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select>
        </div>
        <br>
        <button style="padding: 5px;border-radius: 5px;background-color: blue;color: white;font-size: 15px;">Register</button><br><br>
        Already user?<a href="../index.html">Login here</a>
    </form>
    </center>
</body>
</html>