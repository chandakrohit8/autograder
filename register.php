<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #060039; /* Dark blue background */
            color: #ECF0F1;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color:#0E0841; /* Dark blue container */
            border-radius: 10px;
            margin: 0 auto;
            padding: 20px;
            width: 400px;
            height: 450px;
        }

        h1 {
            color: #FCFCFD; /* Blue heading text */
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 300px;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff; /* Blue submit button */
            color: #ECF0F1;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 300px;
            margin-top: 25px;
        }

        input[type="submit"]:hover {
            background-color: #2980B9; /* Darker blue on hover */
        }

        .drop-down {
            width: 300px;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 3px;
        }

        .select {
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="front.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Select a Role:</label>
            <select id="role" class="drop-down">
                <option value="student" class="select">Student</option>
                <option value="teacher" class="select">Teacher</option>
            </select>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>





<!-- 
 <!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #34495E; /* Dark blue background */
            color: #ECF0F1;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: #2C3E50; /* Darker blue container */
            border-radius: 10px;
            margin: 0 auto;
            padding: 20px;
            width: 400px;
            height:450px;
            
        }

        h1 {
            color: #FCFCFD; /* Blue heading text */
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 300px;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #3498DB; /* Blue submit button */
            color: #ECF0F1;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 300px;
            margin-top:25px;
        }

        input[type="submit"]:hover {
            background-color: #2980B9; /* Darker blue on hover */
            
        }

        .drop-down{
            width: 300px;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 3px;
        }
        .select{
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="registration.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Select a Role:</label>
 
     <select id="role" class="drop-down">
    <option value="student" class="select">Student</option>
    <option value="teacher" class="select">Teacher</option>

    </select>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
 -->
