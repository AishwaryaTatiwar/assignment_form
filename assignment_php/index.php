<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
<h1>User Information Form</h1>
<form method="post" action="list_user.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female
    <input type="radio" name="gender" value="Other" required> Other<br><br>

    <label for="city">City:</label>
    <select name="city" id="city" required>
        <option value="New York">New York</option>
        <option value="Los Angeles">Los Angeles</option>
        <option value="Chicago">Chicago</option>
        <option value="Houston">Houston</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

