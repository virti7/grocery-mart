<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #04AA6D;
        }

        p {
            font-size: 18px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
        }

        .order-details {
            text-align: left;
        }

        .order-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You for Ordering</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $country = $_POST["country"];
            $pincode = $_POST["pincode"];
            $payment = $_POST["payment"];
            
            

            echo "<div class='order-details'>";
            echo "<p><strong>Name:</strong> $firstname $lastname</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Contact Number:</strong> $phone</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Country:</strong> $country</p>";
            echo "<p><strong>Pincode:</strong> $pincode</p>";
            echo "<p><strong>Payment Method:</strong> $payment</p>";
           
            
            echo "</div>";
        }
        ?>

        <p>Your product will be in few hours!</p>
    </div>
</body>
</html>
