<?php require_once('_tools.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>header</title>
    <style>

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptug8zYS_SKggPNyCMIT4ttDfCmxA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v13/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;;
        }
        header{
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 99;
        }
        * {
            box-sizing: border-box;
        }

        .globalContainer {
           /* background-color: rgba(146, 148, 151, 0.76);*/
            background-color: #929497;

        }

        .secondGlobalContainer {
            height: 12vh;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            margin: 0;

        }

        li {
            list-style-type: none;
        }

        .logoParis {
            width: 10%;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }

        a:hover {
            text-decoration-line: underline;
        }

        img {
            width: 100%;
            height: auto;
        }
        .btnDeconnexion{
            background-color: #CD0018;
            color: white;
            padding: 10px;
        }
        .userName{
            color: #2B329B;
        }

        /* responsive menu */

        html, body {
            overflow-x: hidden;
            height: 100%;
        }
        body {
            background: #fff;
            padding: 0;
            margin: 0;
        }
        .mainInner div{
            display:table-cell;
            vertical-align: middle;
            font-size: 3em;
            font-weight: bold;
            letter-spacing: 1.25px;
        }
        #sidebarMenu {
            height: 100%;
            position: fixed;
            left: 0;
            width: 250px;
            margin-top: 60px;
            transform: translateX(-250px);
            transition: transform 250ms ease-in-out;
            background-color: rgba(128, 128, 128, 0.91);
            text-align: center;
            z-index: 99999;
        }
        .sidebarMenuInner{
            margin:0;
            padding:0;
            border-top: 1px solid rgba(255, 255, 255, 0.10);
        }
        .sidebarMenuInner li{
            list-style: none;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            padding: 20px;
            cursor: pointer;
            border-bottom: 1px solid rgba(255, 255, 255, 0.10);
        }
        .sidebarMenuInner li span{
            display: block;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.50);
        }
        .sidebarMenuInner li a{
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }
        input[type="checkbox"]:checked ~ #sidebarMenu {
            transform: translateX(0);
        }

        input[type=checkbox] {
            transition: all 0.3s;
            box-sizing: border-box;
            display: none;
        }
        .sidebarIconToggle {
            transition: all 0.3s;
            box-sizing: border-box;
            cursor: pointer;
            position: absolute;
            z-index: 99;
            height: 100%;
            width: 100%;
            top: 22px;
            left: 15px;
            height: 22px;
            width: 22px;
        }
        .spinner {
            transition: all 0.3s;
            box-sizing: border-box;
            position: absolute;
            height: 3px;
            width: 100%;
            background-color: #fff;
        }
        .horizontal {
            transition: all 0.3s;
            box-sizing: border-box;
            position: relative;
            float: left;
            margin-top: 3px;
        }
        .diagonal.part-1 {
            position: relative;
            transition: all 0.3s;
            box-sizing: border-box;
            float: left;
        }
        .diagonal.part-2 {
            transition: all 0.3s;
            box-sizing: border-box;
            position: relative;
            float: left;
            margin-top: 3px;
        }
        input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
            transition: all 0.3s;
            box-sizing: border-box;
            opacity: 0;
        }
        input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
            transition: all 0.3s;
            box-sizing: border-box;
            transform: rotate(135deg);
            margin-top: 8px;
        }
        input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
            transition: all 0.3s;
            box-sizing: border-box;
            transform: rotate(-135deg);
            margin-top: -9px;
        }
        .sidebarIconToggle{
            display: none;
        }
        .imgRes{
            width: 75%;
            height: auto;
        }
        @media (max-width: 780px) {
            .globalContainer{
                display: none;
            }
            .sidebarIconToggle{
                display: block;
            }
        }
    </style>
</head>
<body>
<header>
    <section class="globalContainer">
        <nav>
            <ul class="secondGlobalContainer">
                <div class="logoParis">
                    <li><a href="./index.php"><img src="./assets/img/partials/logo.png"></a></li>
                </div>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./new_list.php">Actualités</a></li>
                <li><a href="./presentation_services.php">Présentation et services</a></li>
                <li><a href="./event_list.php">Evenements</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="./espace_personnel.php" class="userName"><i class="fas fa-user"></i></a></li>
                    <li><a href="moncompte.php?logout"><button name="deconnection" class="btnDeconnexion">Deconnexion</button></a></li>

                <?php else: ?>
                    <li><a href="./moncompte.php">Mon compte</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </section>
    <!--responsive menu !-->


    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner">
            <li><a href="./index.php"><img src="./assets/img/partials/logo.png" class="imgRes"></a></li>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./new_list.php">Actualités</a></li>
            <li><a href="./presentation_services.php">Présentation et services</a></li>
            <li><a href="./event_list.php">Evenements</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="./espace_personnel.php" class="userName"><i class="fas fa-user"></i></a></li>
                <li><a href="moncompte.php?logout"><button name="deconnection" class="btnDeconnexion">Deconnexion</button></a></li>

            <?php else: ?>
                <li><a href="./moncompte.php">Mon compte</a></li>
            <?php endif; ?>
        </ul>
    </div>

</header>
</body>
</html>