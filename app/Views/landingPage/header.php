<!DOCTYPE hmtl>
<html lang="rw">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Kigali Art College" />
    <meta name="keywords" content="Kigali Art College" />
    <meta name="author" content="RICA" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="favorite icon" href="<?= base_url(); ?>assets/images/logo.png"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/css/main2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/main.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5 !important;
        }

        button.login {
            border: 1px solid #3B82F6;
        }

        button.login:hover {
            color: #036e9d !important;
            background-color: #EBF8FF;
        }

        #main-menu .menu-item:hover .submenu,
        #main-menu2 .menu-item:hover .submenu {
            display: block;
        }

        #main-menu .submenu,
        #main-menu2 .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            border: none;
            width: 300px;
            padding: 0;
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
            padding: 0;
            background-color: #3B82F6;
            z-index: 1000;
        }

        #main-menu .submenu li,
        #main-menu2 .submenu li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #main-menu .submenu a,
        #main-menu2 .submenu a {
            display: block;
            padding: 10px 10px;
            text-decoration: none;
            color: #fff;
            text-align: center;
            font-size: 15px;
            font-family: 'Trebuchet MS', sans-serif;
            border-bottom: 1px solid rgba(3, 110, 157, 1) !important;
        }

        #main-menu .submenu a:hover,
        #main-menu2 .submenu a:hover {
            color: #036e9d;
            background: #fff !important;
        }

        .box .service-icon i {
            transform: rotate(45deg);
        }

        .text-white {
            color: #fff !important;
        }

        .fab {
            font-family: "Font Awesome 5 Brands";
        }

        .contact-container {
            width: 99%;
            border-radius: 5px;
            padding: 10px 0 30px;
        }


        @media screen and (max-width: 768px) {
            * {
                margin: auto !important;
            }

            .small-none {
                display: none;
            }

            .logo-small img {
                width: 100px auto !important;
                margin-left: 0 !important;
            }

            .login-small {
                margin-right: 0 !important;
                margin-top: -60px !important;
                display: block !important;
            }

            .nav-small {
                z-index: 1000;
                width: 100% !important;
            }

            .submenu {
                width: 100% !important;
            }

            .login-small button {
                border-radius: 5px;
                font-size: 15px !important;
                padding: 5px !important;
                height: 40px !important;
                width: 100px;
            }

            .bg-custom-gradient {
                width: 90% !important;
                margin: 0 auto;
            }

            .col-lg-5 {
                margin: 0 auto !important;
            }

            .txt-service {
                text-align: center;
            }

            .small-block {
                display: block !important;
            }

            .small-padding {
                padding: 0 !important;
            }

            .small-block .column {
                width: 90% !important;
                margin: 0 auto !important;
            }

            .sub-arrow {
                margin-top: -17px !important;
            }

            .main-nav {
                padding: 10px !important;
                margin-bottom: -7.5em !important;
                margin-top: 15px !important;
            }

            .column form input[type=text],
            .column form input[type=file],
            .column form input[type=email],
            .column form select,
            .column form textarea {
                margin-bottom: 5px !important;
                width: 100% !important;
            }

            .small-top {
                padding-top: 20px;
            }

            .small-topp {
                margin-top: 30px !important;
            }

            .content1,
            .login-small {
                order: 2;
            }

            .content2,
            .logo-small {}

                {
                order: 1;

            }

            .content3,
            .nav-small {
                order: 3;
            }

            .content1,
            .content2,
            .content3 {
                width: 100% !important;
            }

            .container-main {
                padding: 5px !important;
            }

        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
</body>

</html>