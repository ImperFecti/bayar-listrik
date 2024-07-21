<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- title -->
    <title><?= $title; ?></title>
</head>

<body>
    <!-- import navbar from layout/navbar.php -->
    <?= $this->include('layout/navbar'); ?>

    <?= $this->include('layout/hero'); ?>


    <!-- import content from pages -->
    <?= $this->renderSection('content'); ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="/js/script.js"></script>
</body>

<!-- Footer -->
<?= $this->include('layout/footer'); ?>


</html>