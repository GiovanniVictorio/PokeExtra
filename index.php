<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poké Extra</title>

    <!-- Links CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/pokemons.css">
    <link rel="stylesheet" href="assets/css/about.css">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Codigo del menu -->
    <?php include 'assets/html/menu.html' ?>

    <main>
        <!-- Seccion de inicio -->
        <section class="container section section__height" id="home">
            <h2 class="section__title">Home</h2>
        </section>

        <!-- Seccion de Acerca de -->
        <section class="container section section__height" id="about">
            <h2 class="section__title">About</h2>
            <?php include 'assets/html/about.html' ?>
        </section>

        <!-- Seccion de Pokemones -->
        <section class="container section section__height" id="skills">
            <h2 class="section__title">Pokédex</h2>
            <?php include 'assets/html/pokemones.html' ?>
        </section>

        <!-- Seccion de Contacto-->
        <section class="container section section__height" id="contactme">
            <h2 class="section__title">Contact me</h2>
            <?php include 'assets/html/contacto.html' ?>
        </section>
    </main>

    <!-- Archivo JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/pokeapi.js"></script>
</body>
</html>