<?php 
require "../cfg/config.php"; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta hhtp-equiv="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../img/SOI_remove.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>juste_ozan</title>
</head>

<body>
    <!-- NAVBAR FIX -->
    <nav>
        <div class="back-color flex flex-row justify-around items-center pb-4 pt-4" data-target-in="#sticky-banner-target">
            <div>
                <a href="games.html"><img class="w-10" onclick="topFunction()" src="../img/SOI_remove.png" alt="SOI"></a>
            </div>
            <div>
                <ul id="menubar" class="hidden md:flex flex-row gap-12 text-lg">
                    <li>
                        <a class="hover-underline-animation" href="../index.php">Accueil</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="../index.php">Ambition</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="../index.php">Rencontre</a>
                    </li>
                    
                </ul>
            </div>
            <div class="md:hidden">
                <button id="bar-icon" class="change flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- ERREUR 404 -->
    <section class="py-16 px-0">
        <div class="w-[calc(100%_-_3rem)] max-w-3xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl mb-6"><strong>Error 404: Page non trouvé</strong></h1>
                <p class="mb-4">Désolé, mais la page est soit en construction, soit une mauvaise redirection, soyez patient</p>
                <p><a href="../index.php" class="text-orange-800 no-underline bg-[linear-gradient(to_right,_#9a3412_50%,_hsla(15_79%_34%/0.2)_50%)] bg-[length:200%_1px] bg-no-repeat bg-[position:100%_100%] transition-all duration-200 hover:bg-[position:0%_100%]">Aller à la page d'acueil</a></p>
            </div>

            <div aria-label="404 animation">
            <svg class="block max-w-[520px] mx-auto" id="i-fof" viewBox="0 0 520 450"><g id="i-fof-ship"><path id="i-fof-capsule" d="M260,9a53,53,0,0,0-53,53H313A53,53,0,0,0,260,9Z" fill="hsl(240, 4%, 85%)"/><path id="i-fof-ship-top" d="M448,73H72s78-37,188-37S448,73,448,73Z" fill="hsl(240, 4%, 65%)"/><path id="i-fof-ship-bottom" d="M448,73A1185.633,1185.633,0,0,0,72,73c80.173,34.484,144.2,37,188,37C370,110,448,73,448,73Z" fill="hsl(230, 7%, 23%)"/></g><g id="i-fof-browser"><rect id="i-fof-browser-canvas" x="179" y="243" width="160" height="109" rx="6" transform="translate(131.361 -75.723) rotate(22.162)" fill="hsl(230, 13%, 9%)"/><g id="i-fof-browser-dots" fill="hsl(0, 0%, 100%)"><circle cx="211.713" cy="228.029" r="3"/><circle cx="221.9" cy="232.179" r="3"/><circle cx="232.088" cy="236.328" r="3"/></g><rect id="i-fof-browser-body" x="180.737" y="258.557" width="152" height="89" rx="2" transform="translate(133.29 -74.459) rotate(22.162)" fill="hsl(0, 0%, 100%)"/><g id="i-fof-emoji"><path d="M248.626,322.968A22,22,0,1,1,277.3,310.893,22,22,0,0,1,248.626,322.968Z" fill="hsl(35, 79%, 66%)"/><path d="M264.3,311a7,7,0,1,1,9.124-3.843A7,7,0,0,1,264.3,311Z" fill="hsl(0, 0%, 100%)"/><path d="M245.778,303.452a7,7,0,1,1,9.123-3.842A7,7,0,0,1,245.778,303.452Z" fill="hsl(0, 0%, 100%)"/><path d="M258.5,317.274l-12.966-5.281a1,1,0,0,1,.755-1.853l12.966,5.282a1,1,0,0,1-.755,1.852Z" fill="hsl(230, 7%, 23%)"/><path d="M247.287,299.747a3,3,0,1,1,3.91-1.646A3,3,0,0,1,247.287,299.747Z" fill="hsl(230, 7%, 23%)"/><path d="M265.809,307.292a3,3,0,1,1,3.91-1.647A3,3,0,0,1,265.809,307.292Z" fill="hsl(230, 7%, 23%)"/></g></g><polygon id="i-fof-radar-body" points="415 410 105 410 196 106 324 106 415 410" fill="hsl(170, 78%, 36%)" opacity="0.5"/><ellipse id="i-fof-radar-bottom" cx="260" cy="410" rx="155" ry="28" fill="hsl(170, 78%, 36%)"/><ellipse id="i-fof-shadow" cx="282" cy="410" rx="72" ry="10" opacity="0.4" fill="hsl(230, 13%, 9%)"/><ellipse id="i-fof-radar-top" cx="260" cy="106" rx="64" ry="6" fill="hsl(170, 78%, 36%)"/></svg>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="main-footer relative z-[1] pt-12 lg:pt-20">
        <div class="w-[calc(100%_-_2.5rem)] lg:w-[calc(100%_-_4rem)] mx-auto max-w-7xl">
            <div class="grid grid-cols-12 gap-y-8 lg:gap-12">
                <div class="col-span-12 xl:col-span-3 xl:order-2 xl:text-right">
                    <a href="games.html"><img class="w-20" onclick="topFunction()" src="../img/SOI_remove.png" alt="SOI"></a>
                </div>
            
                <nav class="col-span-12 xl:col-span-9 xl:order-1">
                    <ul class="grid grid-cols-12 gap-y-8 sm:gap-8 lg:gap-12">
                        <li class="col-span-12 sm:col-span-6 lg:col-span-3">
                            <h4 class="mb-3 lg:mb-5 lg:text-xl"><strong>Made by</strong></h4>
                            <ul class="grid grid-cols-12 gap-2 lg:gap-3 lg:text-base">
                                <li class="col-span-12"><a href="#0" class="main-footer__link">Ozan</a></li>
                                <li class="col-span-12"><a href="#0" class="main-footer__link">Juste_ozan</a></li>
                                <li class="col-span-12"><a href="#0" class="main-footer__link">SOI</a></li>
                            
                            </ul>
                        </li>

                        <li class="col-span-12 sm:col-span-6 lg:col-span-3">
                            <h4 class="mb-3 lg:mb-5 lg:text-xl"><strong>D'autres pages</strong></h4>
                            <ul class="grid grid-cols-12 gap-2 lg:gap-3 lg:text-base">
                                <li class="col-span-12"><a href="path.php" class="main-footer__link">Chemin</a></li>
                                <li class="col-span-12"><a href="ambition.html" class="main-footer__link">Ambition</a></li>
                                <li class="col-span-12"><a href="ambition.html" class="main-footer__link">Rencontre</a></li>
                            
                            </ul>
                        </li>

                        <li class="col-span-12 sm:col-span-6 lg:col-span-3">
                            <h4 class="mb-3 lg:mb-5 lg:text-xl"><strong>Autres</strong></h4>
                            <ul class="grid grid-cols-12 gap-2 lg:gap-3 lg:text-base">
                                <li class="col-span-12"><a href="#0" class="main-footer__link">TryHackMe</a></li>
                                <li class="col-span-12"><a href="#0" class="main-footer__link">CYNERGY</a></li>
                                <li class="col-span-12"><a href="#0" class="main-footer__link">ELIVACY</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        
            <div class="flex flex-col border-t border-gray-300 py-2 lg:py-3 mt-8 lg:mt-12 lg:flex-row lg:justify-between lg:items-center">
                <div class="mb-3 lg:mb-0">
                    <div class="text-sm lg:text-xs text-gray-500 flex flex-wrap gap-2 lg:gap-3">
                        <span>&copy; myWebsite</span>
                        <a href="#0" class="text-gray-700">Terms</a>
                        <a href="#0" class="text-gray-700">Privacy</a>
                    </div>
                </div>

                <div class="flex items-center gap-2 lg:gap-3">
                    <a href="404.php" class="main-footer__social">
                        <svg class="icon block h-[1em] w-[1em] text-inherit fill-current leading-none shrink-0" viewBox="0 0 16 16"><title>Follow us on Twitter</title><g><path d="M16,3c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8c-0.6-0.6-1.5-1-2.4-1 C9.3,1.5,7.8,3,7.8,4.8c0,0.3,0,0.5,0.1,0.7C5.2,5.4,2.7,4.1,1.1,2.1c-0.3,0.5-0.4,1-0.4,1.7c0,1.1,0.6,2.1,1.5,2.7 c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,9.4,2.7,9.4,2.4,9.4c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3 c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0c1.5,0.9,3.2,1.5,5,1.5c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,4.3,15.6,3.7,16,3z"></path></g></svg>
                    </a>

                    <a href="404.php" class="main-footer__social">
                        <svg class="icon block h-[1em] w-[1em] text-inherit fill-current leading-none shrink-0" viewBox="0 0 16 16"><title>Follow us on Youtube</title><g><path d="M15.8,4.8c-0.2-1.3-0.8-2.2-2.2-2.4C11.4,2,8,2,8,2S4.6,2,2.4,2.4C1,2.6,0.3,3.5,0.2,4.8C0,6.1,0,8,0,8 s0,1.9,0.2,3.2c0.2,1.3,0.8,2.2,2.2,2.4C4.6,14,8,14,8,14s3.4,0,5.6-0.4c1.4-0.3,2-1.1,2.2-2.4C16,9.9,16,8,16,8S16,6.1,15.8,4.8z M6,11V5l5,3L6,11z"></path></g></svg>
                    </a>

                    <a href="https://github.com/osahinGuardia" class="main-footer__social">
                        <svg class="icon block h-[1em] w-[1em] text-inherit fill-current leading-none shrink-0" viewBox="0 0 16 16"><title>Follow us on Github</title><g><path  d="M8,0.2c-4.4,0-8,3.6-8,8c0,3.5,2.3,6.5,5.5,7.6 C5.9,15.9,6,15.6,6,15.4c0-0.2,0-0.7,0-1.4C3.8,14.5,3.3,13,3.3,13c-0.4-0.9-0.9-1.2-0.9-1.2c-0.7-0.5,0.1-0.5,0.1-0.5 c0.8,0.1,1.2,0.8,1.2,0.8C4.4,13.4,5.6,13,6,12.8c0.1-0.5,0.3-0.9,0.5-1.1c-1.8-0.2-3.6-0.9-3.6-4c0-0.9,0.3-1.6,0.8-2.1 c-0.1-0.2-0.4-1,0.1-2.1c0,0,0.7-0.2,2.2,0.8c0.6-0.2,1.3-0.3,2-0.3c0.7,0,1.4,0.1,2,0.3c1.5-1,2.2-0.8,2.2-0.8 c0.4,1.1,0.2,1.9,0.1,2.1c0.5,0.6,0.8,1.3,0.8,2.1c0,3.1-1.9,3.7-3.7,3.9C9.7,12,10,12.5,10,13.2c0,1.1,0,1.9,0,2.2 c0,0.2,0.1,0.5,0.6,0.4c3.2-1.1,5.5-4.1,5.5-7.6C16,3.8,12.4,0.2,8,0.2z"></path></g></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>