<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'templates/header.html'; ?>

    <main class="default-style">
        <?php include $content; ?>
    </main>

    <?php include 'templates/footer.html'; ?>
    <script src="js/bootstrap.js"></script>
</body>
</html>