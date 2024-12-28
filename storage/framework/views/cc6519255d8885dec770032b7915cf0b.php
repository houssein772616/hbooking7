<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/styli.css')); ?>">
<link rel="stylesheet" href="css/easy.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.min.css')); ?>">
   
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
            <!-- ====== End of 1.1. Header section ====== -->
            <!-- ====== 1.2. hero section ====== -->
            <section class="hero">
                <div class="container" data-aos="zoom-in">
                    <div>
                        <div class="hero-social-icon flex">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <hr class="d-md-block d-sm-none d-none">
                        </div>
                        <div class="center-data">
                            <h1>CABINE MEDICAL PK12</h1>
                            <h3>Bienvenue sur CABINE MEDICAL PK12</h3>
                            <div class="center-btn flex">
                                <a href="#services" class="btn_hover1">Get Started</a>
                                <a href="#about" class="btn_hover2">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== End of 1.2. hero section ====== -->
        </div>
        <!-- ====== 1.3. card section ====== -->
        <section class="feature">
            <div class="container">
                <div class="flex">
                    <div class="header-card" data-aos="fade-up">
                        <div>
                            <figure><img src="Images/icon/feature1.png" class="feature-img1" alt="feature"></figure>
                            <h4>Compassion et Respect</h4>
                            <p>Nous traitons chaque patient avec dignité et respect, en prenant 
                                le temps de comprendre leurs préoccupations et leurs besoins 
                                individuels..
                            </p>
                        </div>
                    </div>
                    <div class="header-card" data-aos="fade-down">
                        <div>
                            <figure><img src="Images/icon/feature2.png" alt="feature"></figure>
                            <h4>Excellence Médicale</h4>
                            <p>ous nous engageons à maintenir les plus hauts standards de 
                                soins médicaux, avec une équipe de professionnels qualifiés
                                 et dévoués..
                            </p>
                        </div>
                    </div>
                    <div class="header-card" data-aos="fade-up">
                        <div>
                            <figure><img src="Images/icon/feature3.png" alt="feature"></figure>
                            <h4>CAccessibilité</h4>
                            <p>Nous nous efforçons de rendre nos services accessibles à tous,
                                 avec des horaires flexibles et des options de paiement adaptées.
                            </p>
                        </div>
                    </div>
                    <div class="header-card" data-aos="fade-up">
                        <div>
                            <figure><img src="Images/icon/feature1.png" class="feature-img1" alt="feature"></figure>
                            <h4>Compassion et Respect</h4>
                            <p>Nous traitons chaque patient avec dignité et respect, en prenant 
                                le temps de comprendre leurs préoccupations et leurs besoins 
                                individuels..
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.3. card section ====== -->
        <!-- ====== 1.4. logoipsum section ====== -->
      
        <section class="mou p-relative ">
     
    <span> </span>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-50 text-center" data-aos="fade-up">
                <div class="flex gap-2 ">
                    <hr class="faq-hr1">
                    <h5>Envoyez-nous un message</h5>
                </div>
                <h2 class="mt-1">Formulaire de Contacte</h2>
                <p class="mt-1">Remplissez le formulaire ci-dessous pour nous envoyer un message avec notre clinique.</p>
            </div>
            <div class="w-50 mt-15">
            <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

                <div class="form-container" data-aos="fade-down">
                <form action="<?php echo e(route('contacts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <!-- Nom -->
    <div class="form-group">
        <i class="ri-user-fill"></i>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
    </div>
    <!-- Email -->
    <div class="form-group">
        <i class="ri-mail-fill"></i>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
    </div>
    <!-- Numéro -->
    <div class="form-group">
        <i class="ri-phone-fill"></i>
        <input type="tel" id="phone_number" name="phone_number" placeholder="Your Phone Number" required>
    </div>
    <!-- Message -->
    <div class="form-group">
        <i class="ri-pencil-fill"></i>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
    </div>
    <!-- Bouton Envoyer -->
    <button type="submit" class="btn_hover2" style=" background-color: #3d0f41;">Send Message</button>
</form>

                </div>
            </div>
        </div>
    </div>
    </section>
   
        <!-- ====== End of 1.4. logoipsum section ====== -->
        <!-- ====== 1.5. About us section ====== -->
        <section class="about" id="about">
            <div class="container">
                <div class="about-data flex-sb">
                    <div class="w-50" data-aos="fade-up">
                        <div class="flex about-title">
                            <hr>
                            <h5>ABOUT US</h5>
                        </div>
                        <h2>CABINE MEDICAL PK12
                        </h2>
                        <p>Bienvenue sur CABINE MEDICAL PK12, votre destination pour des soins 
                            de santé de qualité et personnalisés. Nous sommes une équipe 
                            passionnée de professionnels médicaux dévoués à fournir les 
                            meilleurs soins à nos patients. Fondée sur des principes 
                            d'excellence clinique, d'innovation et de compassion, notre 
                            clinique s'engage à promouvoir le bien-être et la santé de 
                            nos patients.
                        </p>
                        <div class="flex gap-1 mt-15">
                            <i class="fa-solid fa-check"></i>
                            <h5>La Clinique Médicale Salman CABINE MEDICAL PK12 est dédiée à fournir des soins de santé
                                 de qualité dans un environnement accueillant et chaleureux. Notre équipe de professionnels est là pour vous.
                            </h5>
                        </div>
                        <div class="flex gap-1 mt-15">
                            <i class="fa-solid fa-check"></i>
                            <h5>À la Clinique Médicale CABINE MEDICAL PK12, notre mission est de fournir des soins de santé de la plus haute qualité, 
                                fondés sur des pratiques médicales éprouvées.</h5>
                        </div>
                        <div class="flex gap-2 mt-30">
                            <a href="#services" class="btn_hover1">Get Started</a>
                            <a href="#about" class="btn_hover2">Discover More</a>
                        </div>
                    </div>
                    <div class="about-imgs flex flex-center w-50" data-aos="fade-down">
                        <div>
                            <figure>
                                <img src="Images/home/aboutbanner.png" alt="img">
                            </figure>
                        </div>
                        <div class="ab-count flex flex-center">
                            <div class="flex flex-center">
                                <h2>12</h2>
                                <h2>+</h2>
                            </div>
                            <p>years of experience</p>
                        </div>
                        <div class="about-hr flex gap-1">
                            <hr>
                            <h6>Who we are</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.5. About us section ====== -->
        <!-- ====== 1.6. gallary section ====== -->
        <section class="portfolio">
            <div class="portfolio-1">
                <div class="container">
                    <div class="portfo-center" data-aos="fade-up">
                        <div class="w-50">
                            <div class="flex gap-1">
                                <hr class="gallary-hr1">
                                <h5>PORTFOLIO</h5>
                            </div>
                            <h2 class="mt-15">Our Latest Projects.</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever.
                            </p>
                        </div>
                        <div class="flex flex-end w-100">
                            <a href="portfolio.html" class="btn_hover2">View All Projects</a>
                        </div>
                        <hr class="mt-30">
                    </div>
                </div>
            </div>
            <div class="gallary">
                <div class="ga-bg"> </div>
                <!-- overly -->
                <span> </span>
                <div class="container" data-aos="fade-up">
                    <!-- Tab links -->
                    <div class="tab mb-15">
                        <button class="tablinks active" onclick="open_img(event, 'all')">ALL</button>
                        <button class="tablinks" onclick="open_img(event, 'design')">Laboratoire d'Analyses</button>
                        <button class="tablinks" onclick="open_img(event, 'development')">Salle de Consultation</button>
                        <button class="tablinks" onclick="open_img(event, 'branding')">Salle d'Urgence</button>

                    </div>
                    <!-- Tab content -->
                    <div id="all" class="tabcontent" style="display: block;">
                        <div class="flex flex-center">
                            <div class="flex w-100">
                                <div class="w-33">
                                    <figure><img src="Images/home/999.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/998.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/1717491416462.jpg" alt="img"></figure>
                                </div>
                                <div class="w-66">
                                    <figure><img src="Images/home/IMG_20240604_105348.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/laboratoir.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/OIP (9).jpeg" alt="sm_img"></figure>
                                    <figure><img src="Images/home/IMG_20240528_204622_1.jpg" alt="sm_img"></figure>
                                </div>
                                <div class="w-66">
                                    <figure><img src="Images/home/1717491415927.jpg" alt="img"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="design" class="tabcontent">
                        <div class="flex flex-center">
                            <div class="flex w-100">
                                <div class="w-33">
                                    <figure><img src="Images/home/laboratoir.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/998.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/999.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/1717491416462.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/1717491416313.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/1717491417057.jpg" alt="img"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="development" class="tabcontent">
                        <div class="flex flex-center">
                            <div class="flex w-100">
                                <div class="w-33">
                                    <figure><img src="Images/home/IMG_20240528_204622_1.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/IMG_20240528_203820.jpg" alt="img"></figure>
                                </div>
                                <div class="w-33">
                                    <figure><img src="Images/home/IMG_20240528_203704.jpg" alt="img"></figure>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                    <div id="branding" class="tabcontent">
                        <div class="flex flex-center">
                            <div class="flex w-100">
                                <div class="w-33">
                                    <figure><img src="Images/home/_storage_emulated_0_Android_data_com.miui.gallery_cache_SecurityShare_171749 (1).jpg" alt="img"></figure>
                                </div>
                                <div class="w-66">
                                    <figure><img src="Images/home/IMG_20240528_204150.jpg" alt="img"></figure>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                    <div class="gallary-hr flex gap-1 flex-end mt-15">
                        <h6>Creative Solution</h6>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.6. gallary section ====== -->
        <!-- ====== 1.7. Services section ====== -->
        <section class="service" id='services'>
            <div class="service-1">
                <div class="container">
                    <div class="service-data" data-aos="fade-down">
                        <div class="w-66">
                            <div class="flex gap-1">
                                <hr class="service-hr1">
                                <h5>SERVICES</h5>
                            </div>
                            <h2 class="mt-15">Services We Offer</h2>
                            <p class="mt-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum
                                has been the industry's standard dummy text ever.
                            </p>
                        </div>
                        <div class="w-33 mt-15 flex flex-end">
                            <a href="services.html" class="btn_hover2">View All Services</a>
                        </div>
                        <hr class="mt-15 mb-15">
                    </div>
                    <div class="flex gap-1 mt-15 s-card">
                        <div class="service-card" data-aos="fade-down">
                            <figure><img src="Images/icon/slider1.png" alt="slider1"></figure>
                            <h3>Laboratoire médical.</h3>
                            <p>Notre laboratoire équipé de technologies de pointe assure des 
                                analyses précises et rapides pour un diagnostic efficace.
                            </p>
                            <a href="services.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="service-card" data-aos="fade-up">
                            <figure><img src="Images/icon/slider2.png" alt="slider2"></figure>
                            <h3>Consultations médicales.</h3>
                            <p>Nos médecins expérimentés sont disponibles pour des consultations
                                 dans divers domaines, allant de la médecine générale à la prise
                                  en charge des maladies chroniques.
                            </p>
                            <a href="services.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="service-card" data-aos="fade-down">
                            <figure><img src="Images/icon/slider3.png" alt="slider3"></figure>
                            <h3>Stomatologue</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever.
                            </p>
                            <a href="services.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.7. Services section ====== -->
        <!-- ====== 1.8. Experience section ====== -->
        <section class="experience">
            <div class="container">
                <div class="flex-wrap exp-center" data-aos="fade-up">
                    <div class="w-66">
                        <div class="flex gap-1">
                            <hr class="experience-hr1 m-0">
                            <h5>Notre Mission</h5>
                        </div>
                        <h2>À la Clinique Médicale CABINE MEDICAL PK12.</h2>
                        <p class="mt-1">Nous nous engageons à rester 
                            à la pointe de l'innovation médicale en investissant dans des 
                            technologies de pointe et en offrant une formation continue à 
                            notre personnel médical.
                        </p>
                    </div>
                    <div class="w-33 mt-30 flex flex-end">
                        <a href="#rendezvous" class="btn_hover1">Prendre_Rendez-vous</a>
                    </div>
                    <hr>
                </div>
                <div class="flex flex-sb">
                    <div class="w-50 p-relative flex flex-center" data-aos="zoom-in">
                        <div class="experience_mask">
                            <figure><img src="Images/home/aboutbanner.png" alt="img"></figure>
                        </div>
                        <div class="experience-hr flex gap-1">
                            <hr>
                            <h6> Our Expertise </h6>
                        </div>
                    </div>
                    <div class="w-50 flex flex-col gap-2 mt-1">
                        <div class="flex gap-1 ex-card" data-aos="fade-up">
                            <div class="flex flex-center">
                                <h3>100</h3>
                                <h3>%</h3>
                            </div>
                            <div>
                                <h4>Notre objectif</h4>
                                <p>Notre objectif est de promouvoir le bien-être et d'améliorer 
                                    la qualité de vie de nos patients en les soutenant tout au long 
                                    de leur parcours de santé. 
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-1 ex-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex flex-center">
                                <h3>100</h3>
                                <h3>%</h3>
                            </div>
                            <div>
                                <h4>Notre vision.</h4>
                                <p>Notre vision est de devenir un leader reconnu pour
                                     la qualité des soins de santé accessibles à tous. 
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-1 ex-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="flex flex-center">
                                <h3>100</h3>
                                <h3>%</h3>
                            </div>
                            <div>
                                <h4>Nos Valeurs Fondamentales</h4>
                                <p>Nous traitons chaque patient avec dignité et respect, 
                                    en prenant le temps de comprendre leurs préoccupations
                                     et leurs besoins individuels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.8. Experience section ====== -->
        <!-- ====== 1.9. How we work section ====== -->
        <section class="work">
            <div class="container position-relative">
                <div class="work-para text-center" data-aos="fade-up">
                    <h5>HOW WE WORK</h5>
                    <h2 class="h2_margin">Our Process For Delivering Results</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry’s standard dummy text ever.
                    </p>
                </div>
                <div class="work-hr flex gap-1">
                    <hr>
                    <h6>Project in steps</h6>
                </div>
                <div class="work-line flex flex-center gap-1 flex-wrap p-relative">
                    <div data-aos="zoom-in">
                        <h2>01.</h2>
                        <h4>Make An Appointment</h4>
                    </div>
                    <div data-aos="zoom-in">
                        <h2>02.</h2>
                        <h4>call us</h4>
                    </div>
                    <div data-aos="zoom-in">
                        <h2>03.</h2>
                        <h4>Get Consultation</h4>
                    </div>
                    <div data-aos="zoom-in">
                        <h2>04.</h2>
                        <h4>visit our clinic</h4>
                    </div>
                </div>
                <div class="flex flex-center" data-aos="zoom-in">
                    <a href="contact.html" class="btn_hover2">Contact Now</a>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.9. How we work section ====== -->
        <!-- ====== 1.10. team section ====== -->
      <section class="team">
            <div class="team-btn" data-aos="zoom-in">
                <div class="container flex flex-sb gap-2 flex-wrap">
                    <h4>Ask A Question To Our Amazing Clinic, And Get, Response Quickly.
                    </h4>
                    <a href="contact.html" class="btn_hover2">Contact Now</a>
                </div>
            </div>
        </section>
        <!-- ====== End of 1.10. team section ====== -->
        <!-- ====== 1.11. Pricing section ====== -->
        
        <!-- ====== End of 1.11. Pricing section ====== -->
        <!-- ====== 1.12. FAQ section ====== -->
        <!-- resources/views/welcome.blade.php -->
<!-- Bootstrap CSS -->
<style>
    /* Styles de base pour le formulaire */
.form-container {
    background-color: #fff3; /* Couleur de fond claire */
    padding: 2rem;
    margin-top:-20px;
    border-radius: 10%;
    
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
    transition: transform 0.3s ease-in-out; /* Transition douce pour l'animation */
}

.form-container:hover {
    transform: translateY(-10px); /* Légère élévation au survol */
}

.form-group {

    margin-bottom: 1rem; /* Espacement entre les champs */
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #f57c48; /* Couleur du texte */
}

.form-group input, .form-group textarea {
    width: 500px;
    padding: 0.5rem;
    border: 1px solid #ced4da;
    border-radius: 10px;
    font-size: 1rem;
    transition: border-color 0.3s ease-in-out;
}

.form-group input:focus, .form-group textarea:focus {
    border-color: #007bff; /* Couleur de la bordure au focus */
    outline: none;
}

.form-group textarea {
    resize: vertical; /* Permet de redimensionner verticalement */
    height: 80px;
    width: 500px; /* Hauteur par défaut pour la zone de texte */
}

.submit-btn {
    background-color: #007bff; /* Couleur du bouton */
    color: #fff; /* Couleur du texte du bouton */
    border: none;
    padding: 0.75rem;
    border-radius: 4px;
    font-size: 1.25rem;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.submit-btn:hover {
    background-color: #0056b3; /* Couleur du bouton au survol */
}

.w-50 {
    width: 50%;
    margin: 0 auto;
}

.mt-15 {
    margin-top: 1.5rem; /* Espacement au-dessus du formulaire */
}

</style>
<section class="faq p-relative" id="rendezvous">
    <span> </span>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-50 text-center" data-aos="fade-up">
                <div class="flex gap-2 ">
                    <hr class="faq-hr1">
                    <h5>Prendre Rendez-vous</h5>
                </div>
                <h2 class="mt-1">Formulaire de rendez-vous</h2>
                <p class="mt-1">Remplissez le formulaire ci-dessous pour prendre un rendez-vous avec notre clinique.</p>
            </div>
            <div class="w-50 mt-15">
            <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

                <div class="form-container" data-aos="fade-down">
                    <form action="<?php echo e(route('appointments.store')); ?>" method="POST" class="appointment-form">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Numéro de téléphone:</label>
                            <input type="text" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            <label for="appointment_date">Date du rendez-vous:</label>
                            <input type="date" id="appointment_date" name="appointment_date" required>
                        </div>
                        <div class="form-group">
                            <label for="appointment_time">Heure du rendez-vous:</label>
                            <input type="time" id="appointment_time" name="appointment_time" required>
                        </div>
                        <div class="form-group">
                            <label for="reason">Motif du rendez-vous:</label>
                            <textarea id="reason" name="reason" required></textarea>
                        </div>
                        <button type="submit" class="btn_hover2" style=" background-color: #3d0f41;">Prendre rendez-vous</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init();
</script>



        <!-- ====== End of 1.12. FAQ section ====== -->
        <!-- ====== 1.13. Blogs section ====== -->
    <!-- resources/views/welcome.blade.php -->
    <section class="blog">
        <div class="container">
            <div class="flex blog-center" data-aos="fade-down">
                <div class="w-66">
                    <div class="flex gap-1">
                        <hr class="blog-hr1">
                        <h5>BLOGS</h5>
                    </div>
                    <h2 class="mt-1">Latest Posts</h2>
                    <p class="mt-1 mb-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever.
                    </p>
                </div>
                <div class="w-33 mt-1 flex flex-end">
                    <a href="<?php echo e(route('blogs.index')); ?>" class="btn_hover2">See all blogs</a>
                </div>
            </div>
            <div class="flex gap-2 mt-15 blog-cards">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div data-aos="fade-up" class="blog-card w-100">
        <?php if($blog->image && file_exists(public_path('storage/' . $blog->image))): ?>
            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="card-img-top" alt="<?php echo e($blog->title); ?>" style='height: 300px; border-radius: 10%;'>
        <?php else: ?>
            <img src="<?php echo e(asset('images/default-image.png')); ?>" class="card-img-top" alt="Default Image">
        <?php endif; ?>
        <div class="card-body">
            <h4><?php echo e($blog->title); ?></h4>
            Learn More
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>



        <!-- ====== End of 1.14. Blogs section ====== -->
        <!-- ====== 1.15. Footer section ====== -->
       
    </div>

    <!-- end site wrapper -->


    <!-- button back to top -->
    <button onclick="scrollToTop()" id="backToTopBtn" class="btn_hover2"><i
            class="fa-solid fa-arrow-turn-up"></i></button>

  
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            duration: 1250,
            once: true,
        });
    </script>

    <!-- jquery js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery min js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- slick carousel min js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A=" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\houssein\Desktop\gestion_cli\resources\views/welcome.blade.php ENDPATH**/ ?>