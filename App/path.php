<!-- CHEMIN / PATH.PHP -->
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
                        <a class="hover-underline-animation" href="index.php">Ambition</a>
                    </li>
                    <li>
                        <a class="hover-underline-animation" href="index.php">Rencontre</a>
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
    


    <header class="w-[calc(100%_-_2.5rem)] lg:w-[calc(100%_-_4rem)] mx-auto max-w-xl mb-8 lg:mb-12">
        <div class="text-center mb-5 lg:mb-8">
            <h2 class="text-4xl mb-3 font-bold">Voici mon chemin</h2>
            <p class="text-gray-500 text-lg">juste ozan</p>
        </div>
    </header>




    <!-- SECTION PARCOUR -->
    
    <section class="relative z-[1]">
        
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
            <p class="text-sm text-gray-400 capitalize mb-4 lg:mb-4 flex gap-4 items-center after:content-[''] after:h-px after:grow after:bg-gray-900/10"></p>
        
            <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
                <h2 class="text-4xl text-center font-bold">Avec une histoire</h2>
            </div>
            <div class="grid grid-cols-12 gap-y-6 lg:gap-0">
                <div class="col-span-12 lg:col-span-4">
                    <img src="../img/photo1.jpeg" alt="ozan">
                </div>
            
                <div class="col-span-12 lg:col-span-7 lg:col-start-6">
                    <div class="leading-relaxed">
                        <p class="mb-6">Calme et à l'écoute, je m'impose une discipline de fer pour pouvoir atteindre mes objectifs quotidien, et me rapprocher un peu plus de mes rêves</p>
            
                        <p class="mb-6">Grand fan et passionné de nouvelles technologies et d'innovations high-tech, Guardia est la meilleurs trouvailles ainsi que la meilleurs opportunité de m'investir dans le milieu du numérique à grande échelle</p>

                        <p class="mb-6">De nature curieuse et ambitieuse, j'aime donc découvrir de nouvelles personnes et personnalités, et aussi m'intéresser à de nouveaux projets encore plus diverses, que ce soit de l'art, avec la peinture, la musique et l'écriture, ou alors des projets d'apprentissages, avec les langues étrangères, la science, les maths et voir même la pédagogie en elle-même, en passant par des projets sportifs</p>

                        <p class="mb-6">Malgré une certaine polyvalence j'aime toujours y mêler le digital et le numérique, cela élève le potentiel de chaque projet.</p>
            
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION COMPETENCES ----------------------------------->
    <section class="feature-v20 relative z-[1] py-16">
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
            <h2 class="text-4xl text-center font-bold">Avec des compétence</h2>
        </div>
    
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl">
            <ul class="feature-v20__list grid grid-cols-12 gap-8">
                
                <!-- COMPETENCE 1 SECU -->
                <li class="feature-v20__item min-w-0 col-span-12 md:col-span-6 lg:col-span-3">
                    <figure class="relative h-[52px] w-[52px]  flex items-center justify-center mx-auto mt-0 mb-6 ">
                        <img src="../img/ordinateur.png" alt="Sécurité informatique">
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
                        <img src="../img/programmation.png" alt="programmation">
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
                        <img src="../img/management.png" alt="management">
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
                        <img src="../img/outils.png" alt="outils">
                    </figure>
                    
                    <div class="text-center">
                        <h4 class="font-bold text-2xl mb-3">Outils</h4>
                        <p class="text-lg text-gray-400">Gestion d'équipe avec méthode Agile, SCRUM, Notion, Gantt, Trello/kanban</p>
                        <p class="text-lg text-gray-400">Suite microsoft-office & suite Google</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- SECTION PROJETS -->
    <section class="feature-v6 py-12 relative z-[1]">
        <div class="w-[calc(100%_-_3rem)] mx-auto max-w-3xl mb-12">
            <h2 class="text-4xl text-center font-bold">Avec des projets</h2>
        </div>
        <div class="w-[calc(100%_-_3rem)] ">
            <div class="mx-16 lg:mx-28 xl:mx-52 grid grid-cols-12 gap-3 md:gap-16 rounded-lg">
                <!-- PROJET1 -->
                <div class="rounded-3xl col-span-12 sm:col-span-6 lg:col-span-4">
                    <img class="rounded-md" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="P1">
                    <h4 class="text-xl font-bold mb-3">Projet 1 - Communication</h4>
                    <p class="text-gray-500 leading-normal mb-4">Principes de la communication interpersonnelle, prise de parole en public, principes de présentation de projet, soutenance, réponse aux questions, tenir un argumentaire.</p>
                </div>
                <!-- PROJET2 -->
                <div class="rounded-3xl col-span-12 sm:col-span-6 lg:col-span-4">
                    <img class="rounded-md" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="P1">
                    <h4 class="text-xl font-bold mb-3">Projet 2 - Introduction au système informatique</h4>
                    <p class="text-gray-500 leading-normal mb-4">Dans ce cours, nous avons vu ce qu’est un système informatique, comment il est composé, qu’est-ce qu’un noyau, comment ça fonctionne, qu’est-ce qu’un système serveur et qu’est- ce qu’un système client, comment les deux fonctionnent de pair pour proposer des fonctionnalités indispensables au bon fonctionnement d’un ordinateur, d’une entreprise, d’un pays.</p>
                </div>
                <!-- PROJET3 -->
                <div class="rounded-3xl col-span-12 sm:col-span-6 lg:col-span-4">
                    <img class="rounded-md" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="P1">
                    <h4 class="text-xl font-bold mb-3">Projet 3 - HTML / CSS</h4>
                    <p class="text-gray-500 leading-normal mb-4">Développement en HTML/CSS/SEO d’une page web de notre jeu favori.</p>
                </div>
            </div>

                <!-- <div class="min-w-0 col-span-12 md:col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 4 - Initiation à l'algorithme</h4>

                    <p class="text-gray-500 leading-normal mb-4">Première Semaine : Nous avons découvert le pseudo-code, avons créer ensemble différents algorithmes sur LARP et sur papier pour que comprendre comment créer des structures conditionnelles, comment penser un logiciel et à terme, comment penser un jeu. Nous devions à la fin de la première semaine être capable de créer un algorithme reprenant le jeu du Pierre Feuille Ciseau.</p>

                    <p class="text-gray-500 leading-normal mb-4">Deuxième semaine : Maintenant que nous maîtrisions le pseudo-code et l’algorithme, nous avons vu ensemble comment fonctionne le Python, et reprendre nos pseudo-code et le translater en Python, donc reprendre votre projet de Pierre feuille ciseau, puis développer notre premier jeu en Python. Mais pas que ! Nous avions ensuite créer le jeu du morpion, donc créer l’algorithme et le développer en python.</p>

                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 5 - Frameworks CSS / JS</h4>

                    <p class="text-gray-500 leading-normal mb-4">Après avoir vu comment créer des sites internets avec HTML/CSS, nous avions aborder les framework CSS et le javascript. Nous avions vu aussi comment mettre un site en ligne gratuitement avec le service proposé par alwaysdata.</p>

                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 6 - Réseaux Informatiques</h4>

                    <p class="text-gray-500 leading-normal mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium assumenda doloribus eos provident modi.</p>

                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 7 - PHP / MySQL</h4>

                    <p class="text-gray-500 leading-normal mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium assumenda doloribus eos provident modi.</p>
                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 8 - Outils numériques</h4>

                    <p class="text-gray-500 leading-normal mb-4">J'ai appris l'utilisation des outils courant en entreprises, tels que Trello, Git, JIRA, Xmind, etc.</p>
                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 9 - Python 2</h4>

                    <p class="text-gray-500 leading-normal mb-4">Maintenant plus avancé en python, on a pu suivre un cours de python plus complexe, le scraping de sites web et les librairies comme pandas, et BeautifulSoup.</p>
                </div>
                <div class="min-w-0 col-span-4">
                    <img class="w-full rounded-md mb-4" src="https://d3ae4wrz2ljkbq.cloudfront.net/components/img-16-9-dark-5.svg" alt="Image description">

                    <h4 class="text-xl font-bold mb-3">Projet 10 - Développement en C</h4>

                    <p class="text-gray-500 leading-normal mb-4">J'ai appris les bases du C, en créant différent jeux, plus ou moins, un sudoku, etc..</p>
                </div> -->
            </div>
        </div>
    </section>

</body>

<script src="../JS/script.js"></script>
<script src="assets/js/back.to.top.js"></script>
</body>
</html>