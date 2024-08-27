<?php
$pageTitle = "Contact Us";
include('template/header.php');
?>



    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Contact With Us</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index-2.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Contact</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrap">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/map.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Address</h4>
                                        <p>4/37 Vibhav Khand Gomti Nagar, Lucknow, Uttar Pradesh, 226010</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/contact_phone.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="tel:0123456789">+91 945-579-1624</a>
                                        <a href="tel:0123456789">+91 638-780-0143</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/icons/emial.svg" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">E-mail Address</h4>
                                        <a href="mailto:info@codeservir.com">info@codeservir.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-wrap">
                            <h4 class="title">Send Us Message</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="https://html.themegenix.com/skillgro/assets/mail.php" method="POST">
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Comment" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="website" type="url" placeholder="Website *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                        <select>
                                            <option value="" selected>--Select a Course--</option>
                                            <option value="Summer Training">Summer Training</option>
                                            <option value="Winter Training">Winter Training</option>
                                            <option value="Apprenticeship Training">Apprenticeship Training</option>
                                            <option value="Web Development Course">Web Development Course</option>
                                            <option value="Programming Language">Programming Language</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Database">Database</option>
                                            <option value="ASP.Net Development">ASP.Net Development</option>
                                            <option value="PHP Development">PHP Development</option>
                                            <option value="Python Development">Python Development</option>
                                            <option value="Java Development">Java Development</option>
                                            <option value="Frontend Development">Frontend Development</option>
                                            <option value="Wordpress Development">Wordpress Development</option>
                                            <option value="Pay Per Click">Pay Per Click</option>
                                            <option value="SMM/SMO">SMM/SMO</option>
                                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                                            <option value="C# programming">C# programming</option>
                                            <option value="C++ Programming">C++ Programming</option>
                                            <option value="Winter Training">Winter Training</option>
                                            <option value="Summer Training">Summer Training</option>
                                            <option value="Apprenticeship Training">Apprenticeship Training</option>
                                            <option value="Java programming">Java programming</option>
                                            <option value="Php programming">Php programming</option>
                                            <option value="Python Programming">Python Programming</option>
                                            <option value="Graphics Design">Graphics Design</option>
                                            <option value="Personality Development">Personality Development</option>
                                            <option value="Video Editing">Video Editing</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Submit Now <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
                <!-- contact-map -->
                <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.3547764955974!2d81.01755507421916!3d26.86046716233602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be389340450d3%3A0xefe5d679c62b5a20!2sCodeServir%20Technologies!5e0!3m2!1sen!2sin!4v1724742973684!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- contact-map-end -->
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->


<?php include('template/footer.php'); ?>