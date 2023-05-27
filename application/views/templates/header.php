<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul;  ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&family=Righteous&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark1: '#010101',
                        dark2: '#191919',
                        light: '#fff',
                        breaker: '#5D9798',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        righteous: ['Righteous', 'cursive'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-dark1 font-poppins">

    <header class="top-0 fixed w-full backdrop-blur-xl bg-dark1 bg-opacity-50 flex justify-between items-center shadow-xl p-5 sm:px-10 lg:px-16">
        <div class="logo">
            <h1 class="text-white text-center text-xs lg:text-sm">kampung<p class="uppercase text-base font-righteous lg:text-lg">ciherang</p>
            </h1>
        </div>

        <div id="hamburger" class="cursor-pointer md:hidden">
            <i class="fa-solid fa-bars text-white text-xl"></i>
        </div>

        <div id="close" class="cursor-pointer hidden">
            <i class="fa-solid fa-xmark text-white text-xl"></i>
        </div>

        <div id="navbar" class="hidden absolute right-5 top-20 bg-dark2 p-10 cursor-pointer rounded-xl">
            <ul class="text-white capitalize text-center text-sm">
                <li class="menu pb-4"><a href="<?= base_url(); ?>">beranda</a></li>
                <li class="menu pb-4"><a href="#tiket">tiket</a></li>
                <li class="menu pb-4"><a href="#destinasi">destinasi</a></li>
            </ul>
        </div>

        <div class="hidden md:inline-block">
            <ul class="text-white text-sm capitalize flex text-center gap-10 justify-center lg:text-base">
                <li class="menu"><a href="<?= base_url(); ?>">beranda</a></li>
                <li class="menu"><a href="#tiket">tiket</a></li>
                <li class="menu"><a href="#destinasi">destinasi</a></li>
            </ul>
        </div>

        <div class="hidden md:inline-block">
            <a href="<?= site_url('home/login'); ?>" class="button font-medium text-dark2 text-sm capitalize px-5 py-1 rounded-full cursor-pointer lg:text-base">masuk</a>
        </div>
    </header>