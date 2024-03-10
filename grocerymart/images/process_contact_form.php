<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Data</title>
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

        .contact-details {
            text-align: left;
        }

        .contact-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: center">
            <h2>Contact Form Data</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $country = $_POST["country"];
                $subject = $_POST["subject"];

                echo "<div class='contact-details'>";
                echo "<p><strong>First Name:</strong> $firstname</p>";
                echo "<p><strong>Last Name:</strong> $lastname</p>";
                echo "<p><strong>Country:</strong> $country</p>";
                echo "<p><strong>Subject:</strong> $subject</p>";
                echo "</div>";
            }
            ?>
            <p>Thank you for contacting us. We will reach out to you soon.</p>
        </div>
    </div>
</body>
</html>
