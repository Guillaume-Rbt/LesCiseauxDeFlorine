<?php
$title = "Accueil";
require("elements/header.php"); ?>

<section class="container">
    <div class="img-animed"><img src="images/coiffure à domicile.jpg" alt="Coiffure à domicile" class="img-medium"></div>
    <div class="concept">
        <h2>Le concept de la coiffure à <span>domicile <span class="iconify" data-icon="maki:hairdresser"></span> </span></h2>
        <p>Un rendez-vous de coiffure à domicile ne présente que des avantages puisque c'est l'artisan coiffeur
            qui se déplace sur le lieu de votre choix.</p>
        <p>Fini le déplacement et l'attente en salon. Plus besoin de faire garder les enfants ou ressortir
            après votre journée de travail.</p>
        <p>Profitez du confort du lieu que vous aurez choisi tout en bénéficiant d'un service 100%
            personnalisé.</p>
    </div>
</section>

<section class="container">
    <h2>Mais comment ça <span> marche ?<img class="iconify" src="images/43984-e63e6f.svg"></span></h2>

    <div class="card-wrapper">

        <div class="card">
            <span class="iconify" data-icon="clarity:car-solid"></span>
            <h3>Zone de déplacement</h3>
            <p>Je me déplace à 20km autour de Corre en Haute-Saône</p>
            <p>Disponible du lundi au vendredi de 9h à 18h. Ainsi que le samedi de 9h à 12h.</p>
        </div>

        <div class="card">
            <span class="iconify" data-icon="bi:calendar-week-fill"></span>
            <h3>Prise de rendez vous</h3>
            <p>Vous pouvez prendre rendez-vous par téléphone ou par SMS au 06.31.10.42.07.</p>
            <p>Nous programmerons ensemble le jour et l'heure de votre rendez-vous.</p>
        </div>

        <div class="card">
            <span class="iconify" data-icon="maki:hairdresser"></span>
            <h3>Le jour-J</h3>
            <p>Avant de commencer, j'effectue un diagnostic sur vos envies et vous conseille en fonction de votre style et de vos petits rituels capillaires. Ensuite ? </p>
            <p>Glissez vos pieds sous la table, japporte tout le matériel nécessaire.</p>
        </div>

        <div class="card">
            <span class="iconify" data-icon="octicon:comment-discussion-24"></span>
            <h3>Partagez</h3>
            <p>Si vous êtes satisfait de mon travail, n'hésitez pas à partager votre nouvelle tête et votre expérience de la coiffure à domicile auprès de vos proches.</p>
        </div>

    </div>
</section>

<section class="container">
    <div class="zone">
        <h2>Suis-je dans la zone de <span>déplacement ? <img src="images/iconFichier 1.svg" class="iconify rotate-45"></span></h2>
        <p class="p1" id="depl">Je me déplace dans un périmètre de 20 kilomètres autour du petit village de Corre situé en Haute-Saône.</p>
        <p>N'hésitez pas à cliquer sur la carte afin de voir si vous vous trouvez dans ma zone de déplacement.</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d85566.82323387885!2d5.990539999999989!3d47.917749!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1643210079942!5m2!1sfr!2sfr" width="300" height="300" style="border:0; filter:saturate(50%);" allowfullscreen=""></iframe>
</section>

<?php require("elements/footer.php"); ?>