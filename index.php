<?php 
require "cfg/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
        Etudiant en cybersécurité, en recherche d'innovation et ...">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="assets/images/ico/favicon.png" rel="shortcut icon" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script> -->
    <!-- <script src="assets/js/wow.init.js"></script> -->
    <!-- <script src="assets/js/tailwind.init.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet">

    <!-- <script src="https://kit.fontawesome.com/b23fafd417.js"></script> -->

    <meta charset="UTF-8">
    <meta hhtp-equiv="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="img/SOI_remove.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>juste_ozan</title>
</head>

<!-- RECUP DONNEE + VARIABLE -->
<?php
    $sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT 1";
    $pre = $pdo->prepare($sql);
    $pre->bindParam('id', $_POST['id']);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);

    $id = "#".$data["id"];
    $pseudo = $data["pseudo"];
    $message = $data['message'];
    
?>

<body>

    <!-- NAVBAR FIX -->
    <nav>
        <div class="back-color flex flex-row justify-around items-center pb-4 pt-4" data-target-in="#sticky-banner-target">
            <div>
                <a href="App/games.html"><img class="w-10" onclick="topFunction()" src="img/SOI_remove.png" alt="SOI"></a>
            </div>
            <div>
                <ul id="menubar" class="hidden md:flex flex-row gap-12 text-lg">
                    <li>
                        <a class="hover-underline-animation" href="App/path.php">Chemin</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="App/404.php">Ambition</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="App/ancien.html">Rencontre</a>
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

    <!-- NAVBAR NINJA -->
    <nav>
        <div class="sticky-banner bg-white shadow-md js-sticky-banner back-color flex flex-row justify-around items-center pb-4 pt-4" data-target-in="#sticky-banner-target">
            <div>
                <a href="games.html"><img class="w-10" onclick="topFunction()" src="img/SOI_remove.png" alt="SOI"></a>
            </div>
            <div>
                <ul id="menubar" class="hidden md:flex flex-row gap-12 text-lg">
                    <li>
                        <a class="hover-underline-animation" href="App/path.php">Chemin</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="App/ambition.html">Ambition</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="App/meeting.html">Rencontre</a>
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



    <section class="sticky-hero mb-12 lg:mb-20 js-sticky-hero" id="sticky-banner-target">
        <div class="sticky-hero__media parallax overflow-hidden  js-parallax" aria-hidden="true">
            <figure class="parallax__wrapper relative transition-transform duration-[400ms] ease-out js-parallax__wrapper">
            <img class=" block w-full  js-parallax__item" src="img/ozanmid.jpg" alt="Image description">

            </figure>
        </div>

        <div class="sticky-hero__content">
            <div class="w-screen ">
                <h1 class=" text-2xl md:text-3xl lg:text-8xl font-bold text-white text-right font-serif">Étudiant en Cybersécurité</h1>
                
                <p class="mb-12 text-xl md:text-2xl lg:text-5xl text-white text-right font-serif">Juste Ozan</p>
                <section class="pt-32">
                    <a href="https://www.instagram.com/juste_ozan/"><img class="h-10 mb-3 text-xl md:text-2xl lg:text-4xl" src="img/instagram.png" alt="instagram"></a>
                    <a href="https://www.linkedin.com/in/juste-ozan/"><img  class="h-10 mb-3 text-xl md:text-2xl lg:text-4xl" src="img/linkedin.png" alt="linkedin"></a>
                    <a href="https://github.com/osahinGuardia"><img class="h-10 mb-3 text-xl md:text-2xl lg:text-4xl" src="img/github.png" alt="github"></a>
                </section>
                

                <!-- <p class="mb-3 text-xl md:text-2xl lg:text-4xl text-white font-serif">Linkedin</p>
                <p class="mb-3 text-xl md:text-2xl lg:text-4xl text-white font-serif"><i class="black fi fi-brands-github">github</i></p>
                <p class="mb-3 text-xl md:text-2xl lg:text-4xl text-white font-serif">cynergy</p> -->

            </div>
        </div>
    </section>

    <!-- <section class="w-[calc(100%_-_rem)] mx-auto max-w-lg lg:max-w-20xl xl:max-w-7xl">
        <h2 class="text-4xl font-bold capitalize ">Je suis</h2>
    </section> -->

    <header class=" w-[calc(100%_-_2.5rem)] lg:w-[calc(100%_-_4rem)] mx-auto max-w-xl mb-8 lg:mb-12">
        <div class="text-center mb-5 lg:mb-8">
        <h2 class="text-4xl mb-3 font-bold">Parcourant les mers infinies</h2>
        <p class="text-gray-500 text-lg">Je suis...</p>
        </div>
    </header>

    <!-- LE CHEMIN -->
    
    <!-- AVEC UN PARCOUR -->
    <section class="relative z-[1] my-32">
        <section class="relative z-[1]">
            
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
            <p class="text-sm text-gray-400 capitalize mb-4 lg:mb-4 flex gap-4 items-center after:content-[''] after:h-px after:grow after:bg-gray-900/10">Un chemin</p>
        
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec une histoire</h2>
            </div>
            <div class="grid grid-cols-12 gap-y-6 lg:gap-0">
                <div class="col-span-12 lg:col-span-4">
                <!-- <h2 class="font-bold text-gray-900 text-4xl leading-tight capitalize">Every champion was once a contender who refused to give up</h2> -->
                <img src="img/photo1.jpeg" alt="ozan">
                </div>
            
                <div class="col-span-12 lg:col-span-7 lg:col-start-6">
                    <div class="leading-relaxed">
                        <p class="mb-6">Calme et à l'écoute, je m'impose une discipline de fer pour pouvoir atteindre mes objectifs quotidien, et me rapprocher un peu plus de mes rêves</p>
            
                        <p class="mb-6">Grand fan et passionné de nouvelles technologies et d'innovations high-tech, Guardia est la meilleurs trouvailles ainsi que la meilleurs opportunité de m'investir dans le milieu du numérique à grande échelle</p>

                        <p class="mb-6">De nature curieuse et ambitieuse, j'aime donc découvrir de nouvelles personnes et personnalités, et aussi m'intéresser à de nouveaux projets encore plus diverses, que ce soit de l'art, avec la peinture, la musique et l'écriture, ou alors des projets d'apprentissages, avec les langues étrangères, la science, les maths et voir même la pédagogie en elle-même, en passant par des projets sportifs</p>

                        <p class="mb-6">Malgré une certaine polyvalence j'aime toujours y mêler le digital et le numérique, cela élève le potentiel de chaque projet.</p>
            
                        <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="App/404.php">Mon parcours →</a></p>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- SECTION COMPETENCE -->
        <section class="feature-v20 relative z-[1] py-16">
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
            <h2 class="text-4xl text-center font-bold">Avec des compétence</h2>
            </div>
        
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
            <ul class="feature-v20__list grid grid-cols-12 gap-8">
                
                <!-- COMPETENCE 1 SECU -->
                <li class="feature-v20__item min-w-0 col-span-12 md:col-span-6 lg:col-span-3">
                    <figure class="relative h-[52px] w-[52px]  flex items-center justify-center mx-auto mt-0 mb-6 ">
                        <img src="img/ordinateur.png" alt="Sécurité informatique">
                    </figure>
                    <div class="text-center">
                        <h4 class="font-bold text-2xl mb-3">Sécurité informatique</h4>
                        <p class="text-lg text-gray-400">OS: Windows, Linux, Vm/Hyper-V</p>
                        <p class="text-lg text-gray-400">Réseaux: Apache, NGINX, OPNsense, wireshark</p>
                        <p class="text-lg text-gray-400">Théorie: Modèle OSI, éthique et responsabilité</p>
                    </div>
                </li>
                <!-- COMPETENCE 2 PROG -->
                <li class="feature-v20__item min-w-0 col-span-12 md:col-span-6 lg:col-span-3">
                    <figure class="relative h-[52px] w-[52px]  flex items-center justify-center mx-auto mt-0 mb-6 ">
                        <img src="img/programmation.png" alt="programmation">
                    </figure>
        
                <div class="text-center">
                    <h4 class="font-bold text-2xl mb-3">Programmation</h4>
                    <p class="text-lg text-gray-400">Développement algorithmique: C, C++, Python, Arduino</p>
                    <p class="text-lg text-gray-400">Full-stack Web: Html, Css, Js, Sql, Php</p>
                    <p class="text-lg text-gray-400">Outils: Visual-Studio, Git, Github</p>
                </div>
                </li>
                <!-- COMPETENCE 3 MANAG -->
                <li class="feature-v20__item min-w-0 col-span-12 md:col-span-6 lg:col-span-3">
                    <figure class="relative h-[52px] w-[52px]  flex items-center justify-center mx-auto mt-0 mb-6 ">
                        <img src="img/management.png" alt="management">
                    </figure>
                    <div class="text-center">
                        <h4 class="font-bold text-2xl mb-3">Management</h4>
                        <p class="text-lg text-gray-400">Gestion du temps, prise de décision, leadership, gestion des conflits, planification stratégique, communication</p>
                        <p class="text-lg text-gray-400"></p>
                    </div>
                </li>
                <!-- COMPETENCE 4 MANAG -->
                <li class="feature-v20__item min-w-0 col-span-12 md:col-span-6 lg:col-span-3">
                    <figure class="relative h-[52px] w-[52px]  flex items-center justify-center mx-auto mt-0 mb-6 ">
                        <img src="img/outils.png" alt="outils">
                    </figure>
                    
                    <div class="text-center">
                        <h4 class="font-bold text-2xl mb-3">Outils</h4>
                        <p class="text-lg text-gray-400">Gestion d'équipe avec méthode Agile, SCRUM, Notion, Gantt, Trello/kanban</p>
                        <p class="text-lg text-gray-400">Suite microsoft-office & suite Google</p>
                    </div>
                </li>

            </ul>
                
                <div class="text-right mt-2 leading-relaxed">
                    
                    <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="#0">Mes compétences →</a></p>
                </div>
            </div>
        </section>

        <!-- AVEC DES PROJETS -->
        <section class=" w-[50%] mx-auto">
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec des projets</h2>
            </div>
            <ul class="stack-cards js-stack-cards">
                <li class=" stack-cards__item bg-white rounded-lg shadow-lg overflow-hidden js-stack-cards__item">
                    <img src="img/p1.jpeg" alt="Image description">
                </li>
                <p class="text-center mb-3 3x-l font-bold">Projet Guardia - Introduction à la cybersécurité</p>
                <li class="stack-cards__item bg-white rounded-lg shadow-lg overflow-hidden js-stack-cards__item">
                    <img src="img/p2.jpeg" alt="Image description">
                </li>
                
                <p class="mt-6 text-center 3x-l font-bold">Projet Guardia - Programmation en C</p>
                <li class="stack-cards__item bg-white rounded-lg shadow-lg overflow-hidden js-stack-cards__item">
                    <img src="img/p3.jpeg" alt="Image description">
                </li>
                <p class="mt-12 text-center 3x-l font-bold">Projet Guardia - Réseaux informatiques</p>
            </ul>
            <div class="text-left pt-4 leading-relaxed"> 
                <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="path.php">Mes projets →</a></p>
            </div>
        </section>

    </section>



    <!-- UNE AMBITION -->
    <section class="relative z-[1] my-32">
        
            
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
            <p class="text-sm text-gray-400 capitalize mb-4 lg:mb-4 flex gap-4 items-center after:content-[''] after:h-px after:grow after:bg-gray-900/10">Une ambition</p>
    
            <!-- AVEC DES VALEURS -->
            <section class="testimonial relative z-[1] py-20 lg:py-12">
                <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                    <h2 class="text-4xl text-center font-bold">Avec des valeurs</h2>
                </div>
                <div class="w-[calc(100%_-_2.5rem)] lg:w-[calc(100%_-_4rem)] mx-auto max-w-lg md:max-w-3xl">
                    <div class="testimonial__block-wrapper mb-8 lg:mb-8">
                        <blockquote class="text-2xl lg:text-3xl text-center leading-snug lg:leading-snug">L'ambition, c'est de partager ses rêves sans jugement, pour que le monde devienne le reflet de nos aspirations communes</blockquote>
                        <!-- Sans jugement... -->
                        <svg class="icon inline-block text-inherit fill-current leading-none shrink-0 w-[96px] h-[96px] text-gray-900 opacity-10" aria-hidden="true" viewBox="0 0 64 64"><polygon fill="currentColor" points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36"/><polygon fill="currentColor" points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36"/></svg>
                    </div>
                    <div class="text-center">
                        <p class="uppercase letter-spacing-md leading-tight mb-4"><strong>Juste Ozan</strong></p>
                    </div>
                </div>
                <div class="text-center mt-2 leading-relaxed"> 
                    <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="#0">Mes valeurs →</a></p>
                </div>
            </section>

            <!-- AVEC DES IDEES -->
            <section class="testimonial relative z-[1] py-12 lg:py-12">
                <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-2">
                    <h2 class="text-4xl text-center font-bold">Avec des idées</h2>
                </div>
                <section class="relative z-[1] my-32">
                    <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
                        <div class="grid grid-cols-12 gap-y-8 lg:gap-8 items-center">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="flex flex-col gap-4">
                                    <p class="text-sm text-gray-400 ">B.D.E. officiel de Guardia</p>
                                    <h4 class="font-bold text-gray-900 text-4xl">CYNERGY</h4>
                                    <p class="leading-normal">Suite à la présentation de mon projet, j'ai été sélectionner pour présider le tout premier bureau des étudiants de Guardia.</p>
                                    <p class="leading-normal">Constituer d'une vingtaine de personnes, et de différents pôle, nous produisons des évènements cyber et annexes, une communication internes et externes, un merchandising, des clubs hebdomadaires et bien plus de choses encore..</p>
                                
                                    <div class="flex flex-wrap gap-4 items-center">
                                        <a href="#0" class="no-underline text-indigo-700 bg-[linear-gradient(to_right,_hsl(250,84%,54%)_50%,_hsla(250,84%,54%,0.2)_50%)] bg-[length:200%_1px] bg-no-repeat bg-[100%_100%] transition-all duration-200 hover:bg-[0%_100%]">Site web</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-span-12 lg:col-span-6">
                                <figure>
                                    <img class="  rounded-3xl" data-img-light src="img/cynergy_pres.png" alt="Image description">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative z-[1] my-32">
                    <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
                        <div class="grid grid-cols-12 gap-y-8 lg:gap-8 items-center">
                            <div class="col-span-12 lg:col-span-6 lg:order-2">
                                <div class="flex flex-col gap-4">
                                    <p class="text-sm text-gray-400 capitalize">Associations Cybersécurité</p>
                                    <h4 class="font-bold text-gray-900 text-4xl">ELIVACY</h4>
                                    <p class="leading-normal">En collaboration avec des amies proches et des collègues, nous avons co-fondé, une associations spécialisé dans la cybersécurité.</p>
                                    <p class="leading-normal">On se charges de faire de la prévention dans les écoles, dans les entreprises ou bien sur nos réseaux, en plus de cela nous effectuons une passerelle entre les étudiants et les entreprises dans la cybersécurité afin de leur garantir une sécurité de leur avenir.</p>
                                
                                    <div class="flex flex-wrap gap-4 items-center">
                                    
                                    <a href="#0" class="no-underline text-indigo-700 bg-[linear-gradient(to_right,_hsl(250,84%,54%)_50%,_hsla(250,84%,54%,0.2)_50%)] bg-[length:200%_1px] bg-no-repeat bg-[100%_100%] transition-all duration-200 hover:bg-[0%_100%]">Site web</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-span-12 lg:col-span-6 lg:order-1">
                                <figure>
                                    <img class="w-full rounded-xl" data-img-light src="img/elivacy_pres.png" alt="Image description">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative z-[1] my-12">
                    <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
                        <div class="grid grid-cols-12 gap-y-8 lg:gap-8 items-center">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="flex flex-col gap-4">
                                    <p class="text-sm text-gray-400 ">Entreprise</p>
                                    <h4 class="font-bold text-gray-900 text-4xl">******</h4>
                                    <p class="leading-normal">Après mainte réflexion, j'aboutis enfin au projet le plus secret</p>
                                    <p class="leading-normal">Je ne peux malheuresement pas en dire beaucoup plus pour des soucis de confidentialité et de stratégie marketing..</p>
                                
                                    <div class="flex flex-wrap gap-4 items-center">
                                        <a href="#0" class="no-underline text-indigo-700 bg-[linear-gradient(to_right,_hsl(250,84%,54%)_50%,_hsla(250,84%,54%,0.2)_50%)] bg-[length:200%_1px] bg-no-repeat bg-[100%_100%] transition-all duration-200 hover:bg-[0%_100%]">Site web</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-span-12 lg:col-span-6">
                                <figure>
                                    <img class="  rounded-3xl" data-img-light src="img/secret_pres.png" alt="Image description">
                                </figure>
                            </div>
                            <div class="text-left mt-2 leading-relaxed"> 
                                <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="#0">Mes idées →</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>


        </div>

        <!-- AVEC UNE VISION -->
        <section class="testimonial relative z-[1] py-12 lg:py-12">
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec une vision</h2>
            </div>
            
            <section class="diagonal-section relative z-[1] bg-gray-100 bg-cover bg-no-repeat bg-center" style="background-image: url('img/vision.jpeg');">
                <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl py-44">
            </section>
            <p class="mt-6 drop-cap">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non nisi corrupti est tempora molestias facilis ad in ea consequuntur beatae nemo, atque possimus dicta, distinctio commodi voluptate eum. Aliquam facere obcaecati assumenda quisquam accusamus, excepturi dignissimos, tempora tenetur impedit laboriosam illum pariatur iste? Enim, temporibus praesentium fuga, et, veniam voluptates illum nulla doloribus nemo mollitia excepturi ab possimus. Optio repellat aliquid, ratione sapiente et dolorem atque nostrum tenetur corrupti possimus quas quo qui mollitia incidunt dicta, vitae provident aperiam itaque.</p>
            <div class="text-right  mt-4 leading-relaxed"> 
                <p><a class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-800" href="#0">Ma vision →</a></p>
            </div>
        </section>
    </section>



    <!-- UNE RENCONTRE -->
    <section class="relative z-[1] my-32">
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
        <p class="text-sm text-gray-400 capitalize mb-4 lg:mb-4 flex gap-4 items-center after:content-[''] after:h-px after:grow after:bg-gray-900/10">Une rencontre</p>
    

        <!-- AVEC UN MESSAGE -->
        <section class="testimonial relative z-[1] py-12 lg:py-12">
            
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec un message</h2>
            </div>   
            <!-- FORM (Actuel livre d'or) -->
            <form class="login-form" action="../action/contact.php" method="post">
                <div class="text-center mb-3 lg:mb-5">
                    <h4 class="text-4xl mb-2">Grâce au formulaire de contact</h4>
                    <p class="text-lg">N'hésitez pas à m'envoyer un message, à propos de n'importe quel sujet, les coincidences n'ont pas de limites</p>
                </div>
                <div class="w-[42%] mx-auto">
                    <div class="col-span-12 lg:col-span-6">
                        <label class="inline-block text-sm mb-1.5 lg:mb-2" for="pseudo">Pseudo</label>
                        <input class="appearance-none bg-white border border-gray-300 py-2 px-3 rounded-md text-[1em] leading-tight transition duration-200 outline-none placeholder:opacity-100 placeholder:text-gray-400 focus-within:border-orange-800 w-full" type="text" name="pseudo" id="pseudo" required>
                    </div>
                    <!-- <div class="mb-3 lg:mb-5">
                        <label class="inline-block text-sm mb-1 lg:mb-1.5" for="input-email">Email</label>
                        <input class="appearance-none bg-white border border-gray-300 py-2 px-3 rounded-md text-[1em] leading-tight transition duration-200 outline-none placeholder:opacity-100 placeholder:text-gray-400 focus-within:border-orange-800 w-full" type="email" name="input-email" id="input-email" placeholder="email@myemail.com">
                    </div> -->
                    <div class="col-span-12">
                        <label class="inline-block text-sm mb-1.5 lg:mb-2" for="message">Message</label>
                        <textarea class="appearance-none bg-white border border-gray-300 py-2 px-3 rounded-md text-[1em] leading-tight transition duration-200 outline-none placeholder:opacity-100 placeholder:text-gray-400 focus-within:border-orange-800 w-full" name="message" id="message"></textarea>
                        <p class="mb-3 text-xs text-gray-500 mt-1.5 lg:mt-1">Utilise le coin pour rajouter des informations.</p>
                    </div>
                    <div class="mb-3 lg:mb-5 w-[42%] mx-auto">
                     <button class="bg-neutral-700 text-white shadow-md text-[1em] px-4 py-2 rounded-md relative inline-flex justify-center items-center whitespace-nowrap cursor-pointer no-underline leading-tight transition-all duration-200 hover:bg-orange-800 focus-visible:outline-2 focus-visible:outline-offset-2 w-full">Envoyer</button>
                    </div> 
                </div>
                
            </form>
        </section>

        <!-- AVEC UN SOUVENIR -->
        <section class="testimonial relative z-[1] py-12 lg:py-12">
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec un souvenir</h2>
            </div>   
         
            <!-- CAROUSEL -->
            <blockquote class="fw-blockquote py-28 relative z-[1] bg-gray-100 text-center">
                <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl">
                    <svg class="h-24 w-24 inline-block text-gray-400 fill-current leading-none shrink-0 max-w-[initial]" aria-hidden="true" viewBox="0 0 64 64">
                        <polygon fill="currentColor" points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36"/>
                        <polygon fill="currentColor" points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36"/>
                    </svg>

                    <div class="mt-12">
                        <p class="text-[1.75rem] leading-snug sm:text-[2.125rem]"><?php echo $message ?></p>
                    </div>

                    <footer class="text-gray-500 mt-12">&mdash; <?php echo $pseudo ?></footer>
                </div>
            </blockquote>
            
            

                
            





        </section>

    </section>
        
    <footer class="main-footer relative z-[1] pt-12 lg:pt-20">
        <div class="w-[calc(100%_-_2.5rem)] lg:w-[calc(100%_-_4rem)] mx-auto max-w-7xl">
            <div class="grid grid-cols-12 gap-y-8 lg:gap-12">
                <div class="col-span-12 xl:col-span-3 xl:order-2 xl:text-right">
                    <a href="games.html"><img class="w-20" onclick="topFunction()" src="img/SOI_remove.png" alt="SOI"></a>
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

                    <a href="404.php" class="main-footer__social">
                        <svg class="icon block h-[1em] w-[1em] text-inherit fill-current leading-none shrink-0" viewBox="0 0 16 16"><title>Follow us on Github</title><g><path  d="M8,0.2c-4.4,0-8,3.6-8,8c0,3.5,2.3,6.5,5.5,7.6 C5.9,15.9,6,15.6,6,15.4c0-0.2,0-0.7,0-1.4C3.8,14.5,3.3,13,3.3,13c-0.4-0.9-0.9-1.2-0.9-1.2c-0.7-0.5,0.1-0.5,0.1-0.5 c0.8,0.1,1.2,0.8,1.2,0.8C4.4,13.4,5.6,13,6,12.8c0.1-0.5,0.3-0.9,0.5-1.1c-1.8-0.2-3.6-0.9-3.6-4c0-0.9,0.3-1.6,0.8-2.1 c-0.1-0.2-0.4-1,0.1-2.1c0,0,0.7-0.2,2.2,0.8c0.6-0.2,1.3-0.3,2-0.3c0.7,0,1.4,0.1,2,0.3c1.5-1,2.2-0.8,2.2-0.8 c0.4,1.1,0.2,1.9,0.1,2.1c0.5,0.6,0.8,1.3,0.8,2.1c0,3.1-1.9,3.7-3.7,3.9C9.7,12,10,12.5,10,13.2c0,1.1,0,1.9,0,2.2 c0,0.2,0.1,0.5,0.6,0.4c3.2-1.1,5.5-4.1,5.5-7.6C16,3.8,12.4,0.2,8,0.2z"></path></g></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>






<script src="../JS/script.js"></script>
<script src="assets/js/back.to.top.js"></script>

</html>