<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TalentJo</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header class="header fixed-top" id="header" data-scrollto-offset="0">
        <div class="d-flex align-items-center justify-content-between container">

            <a class="logo d-flex align-items-center scrollto me-auto me-lg-0" href="index.html">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Talent<span>Jo</span></h1>
            </a>

            <nav class="navbar" id="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    {{-- <li><a class="nav-link scrollto" href="index.php#services">Services</a></li> --}}
                    <!--<li><a class="nav-link scrollto" href="index.php#portfolio">Portfolio</a></li>-->
                    <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
                    {{-- <li><a href="blog.php">Blog</a></li> --}}
                    <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <section class="hero-animated d-flex align-items-center" id="hero-animated">
        <div class="d-flex flex-column justify-content-center align-items-center position-relative container text-center" data-aos="zoom-out">
            <img class="img-fluid animated" src="{{ asset('img/logo.png') }}">
            <h2>Welcome to <span>TalentJo</span></h2>
            <p>Finding, Fostering, and Empowering Jordan's Potential in Creativity, and Innovation.</p>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section class="featured-services" id="featured-services">
            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4>Discovery</h4>
                            <p>Discovering talented people and providing care to develop their talent</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4>Support</h4>
                            <p>Providing a stimulating and supportive environment for creativity and innovation</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4>Enhancement</h4>
                            <p>Enhancing cooperation and partnership with institutions and the local community that support talent</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section class="about" id="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>About Us</h2>
                    <p>TalentJo is Jordan's first electronic platform that aims to discover and support talented, inventive, and creative individuals in the domains of science, literature, and art so as to help develop a local talented and creative base that can compete on a worldwide scale. Our objective is to create an atmosphere that is stimulating for talent and creativity, to encourage talent passion, and to support innovation to develop leaders. the future and serving humanity by offering ongoing assistance, participating in contests and winning prizes to highlight their talents by presenting them through a platform to those interested, and allowing the concerned institutions to embrace and sponsor them to increase their societal contribution and raise their efficiency in those talents.</p>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section class="clients" id="clients">
            <div class="container" data-aos="zoom-out">
                <div class="section-header">
                    <h2>Success Partners</h2>
                </div>
                <div class="row g-1 align-items-center justify-content-center">
                    <div class="col-2"><img class="img-fluid" src="{{ asset('img/partners/min-of-cuture.png') }}" alt=""></div>
                    <div class="col-2"><img class="img-fluid" src="{{ asset('img/partners/min-of-eco.png') }}" alt=""></div>
                    <div class="col-2"><img class="img-fluid" src="{{ asset('img/partners/min-of-edu.png') }}" alt=""></div>
                    <div class="col-2"><img class="img-fluid" src="{{ asset('img/partners/min-of-edu2.png') }}" alt=""></div>
                    <div class="col-2"><img class="img-fluid" src="{{ asset('img/partners/min-of-youth.png') }}" alt=""></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Call To Action Section ======= -->
        <section class="cta" id="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-md-first order-last">
                        <h3><em>TalentJo</em> Training</h3>
                        <p> It provides distinguished training services for the talented, covering all the different categories of talent enjoyed by the platform’s subscribers.
Training and care aims to:
Developing the skills of talented people and providing them with additional skills in their fields to benefit from them in application and production.
Providing specific and focused training in specific fields that encourage talents to effectively invest their talents.
Networking with local community institutions, universities, research centers and the private sector to qualify talented people and provide them with practical training.
</p>
                        <a class="cta-btn align-self-start" href="index.php#contact">Call To Action</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-md-last d-flex align-items-center order-first">
                        <div class="img">
                            <img class="img-fluid" src="{{ asset('img/cta.jpg') }}" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

        {{-- <!-- ======= On Focus Section ======= -->
        <section class="onfocus" id="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">
                        <a class="glightbox play-btn" href="https://www.youtube.com/watch?v=LXb3EKWsInQ"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>Voluptatem dignissimos provident quasi corporis</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <a class="read-more align-self-start" href="#"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section --> --}}

        <!-- ======= Features Section ======= -->
        <section class="features" id="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            {{-- <i class="bi bi-binoculars color-cyan"></i> --}}
                            <i class="fa-regular fa-hand m-3 color-cyan"></i>
                            <h4>Handmade Art Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-2">
                            {{-- <i class="bi bi-box-seam color-indigo"></i> --}}
                            <i class="fa-solid fa-person-walking m-3 color-indigo"></i>
                            <h4>Acting Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-3">
                            {{-- <i class="bi bi-brightness-high color-teal"></i> --}}
                            <i class="fa-solid fa-microphone m-3 color-teal"></i>
                            <h4>Musical Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-4">
                            {{-- <i class="bi bi-command color-red"></i> --}}
                            <i class="fa-solid fa-volleyball m-3 color-red"></i>
                            <h4>Sports Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-5">
                            {{-- <i class="bi bi-easel color-blue"></i> --}}
                            <i class="fa-solid fa-feather-pointed color-blue m-3"></i>
                            <h4>Literature Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-6">
                            {{-- <i class="bi bi-map color-orange"></i> --}}
                            <i class="fa-solid fa-braille m-3 color-orange"></i>
                            <h4>Scientific Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 6 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-7">
                            {{-- <i class="bi bi-map color-orange"></i> --}}
                            <i class="fa-solid fa-camera color-cyan m-3"></i>
                            <h4>Photography Talent</h4>
                        </a>
                    </li>
                    <!-- End Tab 7 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#tab-8">
                            {{-- <i class="bi bi-map color-orange"></i> --}}
                            <i class="fa-brands fa-ethereum m-3 color-indigo"></i>
                            <h4>Other Talents</h4>
                        </a>
                    </li>
                    <!-- End Tab 8 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2" data-aos="fade-up" data-aos-delay="100">
                                <h3>Handmade Art Talent</h3>
                                <p>
                                    The talent of handmade art combines several visual and applied arts in which the artist expresses beauty in his own way stemming from his vision and his ability to imagine and create to convey that beauty to the eyes, and touches the feelings with what he formulated of ideas, shapes and colors in his handmade artistic paintings or in his artistic works that he formulated with sculpture and engraving, formation and other skills that he mastered through practice and continuous performance to highlight distinctive works that reflect a special character of the artist that distinguishes him from others.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img class="img-fluid" src="{{ asset('img/features-1.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Acting Talent</h3>
                                <p>
                                    The talent that relies on movements and gestures with the aim of achieving a fictional character by impersonating the actor to convey the writer's message to the viewers, including the feelings, intentions and feelings it contains, whether this performance is in a play, series, movie or a specific program. This art requires the talented person to have sufficient confidence to succeed in his role as an actor, and it also requires him to have some formal training to master the acting role in order to be qualified to display his talent in front of the audience.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-2.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Musical Talent</h3>
                                <p>
                                    It combines music, word and voice with a distinctive and harmonious human performance that delights the ears with the most beautiful words and melodies. Each person has his own color and pitch. There is a coarse voice and a soft voice, there is a strong voice and a weak voice. There is also a voice that reflects tenderness and another that reflects cruelty. A person is distinguished by his ability to control the layers of his voice and arrange them in a certain harmony. With or without music, he is also distinguished by his ability to use musical instruments of various kinds in proportion to his performance and his voice. This international art expresses feelings, feelings and ideas by reaching the ears and hearts. It is an art close to the heart and quick to influence others.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-3.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Sports Talent</h3>
                                <p>
                                    Sports talent, which is the personality that has more qualities and characteristics than a physical and athletic dimension, so that it can, with more care and training, develop its capabilities in the game or sports that it is good at, and we, in turn, contribute a great deal to its development and provide the opportunity to highlight its capabilities. Physical sports include: athletics, ball games, martial arts, fitness and gymnastics, among others.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-4.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Literature Talent</h3>
                                <p>
                                    It is based entirely on the Arabic language with its different patterns, methods and expressive forms. Literary arts differ from one language to another and from one people to another, depending on the characteristics of each language and the influence of different cultures on these arts. These arts generally depend on the formation of sentences and the use of words and vocabulary in a specific aesthetic way to simulate reality People express thoughts and feelings. The fields of literary writing varied between poetry, thoughts, stories, novels, articles of various kinds, and texts of visual content in general. Many writers and poets were creative in this field, and their literary works became famous worldwide.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-5.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Scientific Talent</h3>
                                <p>
                                    It is the one that relies on technology in all its forms to produce it, and it boils down to works of art created using new media technologies including: digital art, computer graphics, computer animation, virtual art, internet art, interactive art, video games, robotics and 3D printing. .
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-6.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 6 -->

                    <div class="tab-pane" id="tab-7">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Photography Talent</h3>
                                <p>
                                    It is the art of taking pictures creatively to highlight their beauty, and it is a specific mixture of different types of photography techniques that provide the viewer with a message or a scene in an artistic form. The art of photography includes: photography, filming and others.
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-6.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 7 -->

                    <div class="tab-pane" id="tab-8">
                        <div class="row gy-4">
                            <div class="col order-lg-1 order-2">
                                <h3>Other Talents</h3>
                                <p>
                                    Include talents that did not fall under the main categories mentioned in the Talents section
                                </p>
                            </div>
                            {{-- <div class="col-lg-4 order-lg-2 order-1 text-center">
                                <img class="img-fluid" src="{{ asset('img/features-6.svg') }}" alt="">
                            </div> --}}
                        </div>
                    </div><!-- End Tab Content 8 -->

                </div>

            </div>
        </section><!-- End Features Section -->

        {{-- <!-- ======= Services Section ======= -->
        <section class="services" id="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-1.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Nesciunt Mete</h3>
                                </a>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-2.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Eosle Commodi</h3>
                                </a>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-3.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Ledo Markt</h3>
                                </a>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-4.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Asperiores Commodit</h3>
                                </a>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-5.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Velit Doloremque</h3>
                                </a>
                                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <img class="img-fluid" src="{{ asset('img/services-6.jpg') }}" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a class="stretched-link" href="#">
                                    <h3>Dolori Architecto</h3>
                                </a>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= F.A.Q Section ======= -->
        {{-- <section class="faq" id="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-lg-1 order-2">

                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-1" type="button">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="faq-content-1" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-2" type="button">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="faq-content-2" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-3" type="button">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="faq-content-3" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-4" type="button">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="faq-content-4" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-content-5" type="button">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="faq-content-5" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-lg-2 img order-1" style='background-image: url("{{ asset('img/faq.jpg') }}");'>&nbsp;</div>
                </div>

            </div>
        </section><!-- End F.A.Q Section --> --}}

        {{-- <!-- ======= Portfolio Section ======= -->
        <section class="portfolio" id="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Portfolio</h2>
                    <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta consequatur quaerat</p>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <ul class="portfolio-flters">
                        <li class="filter-active" data-filter="*">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">Books</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row g-0 portfolio-container">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <img class="img-fluid" src="{{ asset('img/portfolio/app-1.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/app-1.jpg') }}" title="App 1"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                            <img class="img-fluid" src="{{ asset('img/portfolio/product-1.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/product-1.jpg') }}" title="Product 1"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                            <img class="img-fluid" src="{{ asset('img/portfolio/branding-1.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/branding-1.jpg') }}" title="Branding 1"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                            <img class="img-fluid" src="{{ asset('img/portfolio/books-1.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Books 1</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/books-1.jpg') }}" title="Branding 1"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <img class="img-fluid" src="{{ asset('img/portfolio/app-2.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/app-2.jpg') }}" title="App 2"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                            <img class="img-fluid" src="{{ asset('img/portfolio/product-2.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/product-2.jpg') }}" title="Product 2"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                            <img class="img-fluid" src="{{ asset('img/portfolio/branding-2.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/branding-2.jpg') }}" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                            <img class="img-fluid" src="{{ asset('img/portfolio/books-2.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Books 2</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/books-2.jpg') }}" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <img class="img-fluid" src="{{ asset('img/portfolio/app-3.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/app-3.jpg') }}" title="App 3"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                            <img class="img-fluid" src="{{ asset('img/portfolio/product-3.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/product-3.jpg') }}" title="Product 3"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                            <img class="img-fluid" src="{{ asset('img/portfolio/branding-3.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/branding-3.jpg') }}" title="Branding 2"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                            <img class="img-fluid" src="{{ asset('img/portfolio/books-3.jpg') }}" alt="">
                            <div class="portfolio-info">
                                <h4>Books 3</h4>
                                <a class="glightbox preview-link" data-gallery="portfolio-gallery" href="{{ asset('img/portfolio/books-3.jpg') }}" title="Branding 3"><i class="bi bi-zoom-in"></i></a>
                                <a class="details-link" href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section --> --}}

        <!-- ======= Team Section ======= -->
        <section class="team" id="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                </div>

                <div class="row gy-5 justify-content-center">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img class="img-fluid" src="{{ asset('img/team/member1.jpg') }}" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a target="_blank" href="mailto:shorouq.halawani@gmail.com"><i class="bi bi-envelope"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/shorouq-al-halawani-452a02a8/"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Shorouq Al-Halawni</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img class="img-fluid" src="{{ asset('img/team/member2.jpg') }}" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a target="_blank" href="mailto:abuhawashabdallah@outlook.com"><i class="bi bi-envelope"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/abdallah-abu-hawash-60108320a/"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Abdallah Abu-Hawash</h4>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img class="img-fluid" src="{{ asset('img/team/member4.jpg') }}" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a target="_blank" href="mailto:muh01haikal@gmail.com"><i class="bi bi-envelope"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/muhammad-haikal-135526230/"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Mohammad Haikal</h4>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img class="img-fluid" src="{{ asset('img/team/member3.jpg') }}" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a target="_blank" href="mailto:omar.alhuzaqi2002@gmail.com"><i class="bi bi-envelope"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/omar-alhuzaqi-5788b6196/"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Omar AlHuzaqy</h4>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section><!-- End Team Section -->

        {{-- <!-- ======= Recent Blog Posts Section ======= -->
        <section class="recent-blog-posts" id="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img class="img-fluid" src="{{ asset('img/blog/blog-1.jpg') }}" alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, December 12</span>
                                <span class="post-author"> / Julia Parker</span>
                            </div>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                            <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
                            <a class="readmore stretched-link" href="blog-details.html"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img class="img-fluid" src="{{ asset('img/blog/blog-2.jpg') }}" alt=""></div>
                            <div class="meta">
                                <span class="post-date">Fri, September 05</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
                            <a class="readmore stretched-link" href="blog-details.html"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="post-box">
                            <div class="post-img"><img class="img-fluid" src="{{ asset('img/blog/blog-3.jpg') }}" alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, July 27</span>
                                <span class="post-author"> / Lisa Hunter</span>
                            </div>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
                            <a class="readmore stretched-link" href="blog-details.html"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section class="contact" id="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>You can contact the team using LinkedIn or Email addresses or directly through the email service below.</p>
                </div>

            </div>

            {{-- <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps --> --}}

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>


                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Amman, Jordan</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>shorouq.halawani@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+962 7 9152 5016</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form class="php-email-form" role="form" action="/contact/store" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-md-0 mt-3">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" id="footer">

        {{-- <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>HeroBiz</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input name="email" type="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div> --}}

        <hr class="col-12 mb-0">

        <div class="footer-legal text-center">
            <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center container">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>TalentJo</span></strong>. All Rights Reserved
                    </div>
                </div>

                <div class="social-links order-lg-last mb-lg-0 order-first mb-3">
                    <a class="twitter" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="facebook" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="instagram" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="google-plus" href="#"><i class="bi bi-skype"></i></a>
                    <a class="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a class="scroll-top d-flex align-items-center justify-content-center" href="#"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- JS File -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
