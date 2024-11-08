<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apresentação de equipa</title>
    <link rel="stylesheet" href="assets/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/newcss.css" />
    <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
</head>

<body oncontextmenu="return false">
<?php
session_start();
error_reporting(0);
?>
<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">Engenheiros sem fronteiras</a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">
                        <i class="uil uil-estate nav__icon"></i>Home
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">
                        <i class="uil uil-user nav__icon"></i>Acerca de nós
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="uil uil-message nav__icon"></i>Contacte-nos
                    </a>
                </li>
                <li class="nav__item">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Show Logout button if the user is logged in -->
                        <a href="backend/RegistrationSystem/logout.php" class="nav__link">
                            <i class="uil uil-sign-out-alt nav__icon"></i>Logout
                        </a>
                    <?php else: ?>
                        <!-- Show Login button if the user is not logged in -->
                        <a href="backend/RegistrationSystem/signin.php" class="nav__link">
                            <i class="uil uil-sign-in-alt nav__icon"></i>Login
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- main-->

<main class="main">
    <!--========================= Home =====================-->

    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__content grid">
                <div class="home__social">
                </div>
                <div class="home__img">
                    <svg
                            class="home__blob"
                            viewBox="0 0 200 187"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                        <mask id="mask0" mask-type="alpha">
                            <path
                                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                      130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                      97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                      0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                            />
                        </mask>
                        <g mask="url(#mask0)">
                            <path
                                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                      165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                      129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                     -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                            />
                            <image
                                    class="home__blob-img"
                                    x="-79"
                                    y="-46"
                                    xlink:href="assets/img/gabi1.jpg"
                            />
                        </g>
                    </svg>
                </div>
                <div class="home__data">
                    <h1 class="home__title">Olá, nós somos a CleenIncubators<a href=""></a> </h1>
                    <h3 class="home__subtitle">
                    Empresa de Consultoria 
                    </h3>
                    <p class="home__description">
                    Nosso objetivo é encontrar, para cada cliente, um ambiente que reflita sua cultura, suporte seu crescimento e otimize suas operações.

                    </p>
                    <a href="#contact" class="button button--flex">
                        Contacte-nos<i class="uil uil-message button__icon"></i>
                    </a>
                </div>
            </div>

            <div class="home__scroll">
                <a href="#about" class="home__scroll-button button--flex">
                    <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    <span class="home__scroll-name">Scroll down</span>
                    <i class="uil uil-arrow-down home__scroll-arrow"></i>
                </a>
            </div>
        </div>
    </section>

    <!--======================= Acerca de nós ========================-->
    <div>
    </div>
    <div>

    </div>

    <section class="about section" id="about">
        <h2 class="section__title">Acerca de nós</h2>
        <span class="section__subtitle">Introdução </span>

        <div class="about__container container grid">
            <img src="assets\img\inc.jpg" alt="" class="about__img" />

            <div class="about__data">
                <p class="about__description">
                A CleenIncubators uma empresa intermediária especializada em conectar empresas com escritórios que atendam a necessidades e características específicas. Ajudamos a otimizar o processo de busca, seleção e locação de espaços comerciais que atendam aos requisitos de cada cliente, promovendo uma experiência personalizada e eficiente.
                </p>
            </div>

            <div>
                <span> </span>
                <span></span> </span>
            </div>
        </div>

        <div class="about__buttons">

        </div>
        </div>
        </div>
    </section>


    <!--===================== Contacte-nos =====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contacte-nos </h2>
        <span class="section__subtitle">Preencha</span>

        <div class="contact__container container grid">
            <div>
                <div class="contact__information">
                    <i class="uil uil-calling contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Contacte-nos</h3>
                        <span class="contact__subtitle"
                        ><a href="tel:6362243314"></a>+351 912 345 678</span
                        >
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-envelope-minus contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Email</h3>
                        <span class="contact__subtitle"
                        >ispgxxxxx@ispgaya.pt</span
                        >
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Localização</h3>
                        <span class="contact__subtitle"
                        >Porto, Portugal</span
                        >
                    </div>
                </div>
            </div>

            <!-- Contact form -->
            <form action="https://api.web3forms.com/submit" method="POST" class="contact__form grid" id="contactForm">
                <!-- Hidden access key for Web3Forms -->
                <input type="hidden" name="access_key" value="59b5461f-a552-48bf-a4c8-c8573c3b856d">
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="name" class="content__label">Nome</label>
                        <input type="text" name="name" class="contact__input" required/>
                    </div>

                    <div class="contact__content">
                        <label for="email" class="content__label">Email</label>
                        <input type="email" name="email" class="contact__input" required/>
                    </div>
                </div>


                <div class="contact__content">
                    <label for="message" class="content__label">Mensagem</label>
                    <textarea name="message" rows="7" class="contact__input"required></textarea>
                </div>

                <div>
                    <input type="submit" name="submit" value="Enviar mensagem" class="button button--flex">
                </div>
            </form>
            <script>
                document.getElementById("contactForm").addEventListener("submit", function(event) {
                    const name = document.querySelector("input[name='name']").value.trim();
                    const email = document.querySelector("input[name='email']").value.trim();
                    const message = document.querySelector("textarea[name='message']").value.trim();

                    if (!name || !email || !message) {
                        alert("Please fill in all required fields.");
                        event.preventDefault();  // Prevent form submission
                    }
                });
            </script>
        </div>
    </section>
</main>


<!--================== Footer ===============-->
<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Apresentação</h1>
                <span class="footer__subtitle"
                >Equipa especializada de incubadoras</span
                >
            </div>
        </div>
</footer>
</body>
</html>
