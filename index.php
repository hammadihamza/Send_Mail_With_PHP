
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <form action="send_email.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required> 
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
            <br>
            <button>Submit</button>
    </form>
    <?php
session_start();
$msg = $_SESSION['message'];

echo "<script>Swal.fire('$msg')</script>";
?>
</body>
</html>