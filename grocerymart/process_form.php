<!DOCTYPE html>
<html>
<head>
    <title>Login Details</title>
    <style>
        .grocery-link {
            text-decoration: none;
        }

        .grocery-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .grocery-button:hover {
            background-color: #2980b9;
        }

        /* CSS for the page layout */
        .f1 {
            text-align: center;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 30px;
            margin: 20px auto;
            max-width: 500px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 22px;
            color: #555;
            margin-bottom: 10px;
            text-align:left;
        }
    </style>
</head>
<body>
    <div class="f1">
        <h1>Sign In Details</h1>
        <div class="card">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $phone = $_POST["phone"];

                echo "<p>Username: $username</p>";
                echo "<p>Password: $password</p>";
                echo "<p>Phone Number: $phone</p>";
            }
            ?>
        </div>
        <a href="new.php" class="grocery-link">
            <button class="grocery-button">Begin Shopping</button>
        </a>
    </div>
</body>
</html>
