<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER -->
    <?php include('header.php'); ?>

    <div class="confirmation-container">
        <h1 class="heading">Thank you for your Purchase!</h1>
        <Strong>Your Order:</Strong>
        <div class="confirmation-content">
            <span>Adult: <?php echo $_POST['adult']; ?></span>
            <span>Child: <?php echo $_POST['child']; ?></span>
            <span>Name: <?php echo $_POST['name']; ?></span>
            <span>Phone Number: <?php echo $_POST['phone']; ?></span>
            <span>Special Instructions: <?php echo $_POST['add']; ?></span>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>