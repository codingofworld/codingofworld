<?php
$pageTitle = "Contact Us";
include('template/header.php');
// include('template/js-link.php')
?>

<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Regiter Now</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.php">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Regiter</span>
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
                        <h4 class="title">Regiter Here</h4>
                        <!-- <p>Your email address will not be published. Required fields are marked *</p> -->
                        <form id="contact-form" method="POST">
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
                                        <input id="contact" name="contact"  placeholder="Contact Number*" required>
                                        <div id="contact-error" style="color: red;"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-grp">
                                    <select id="course" name="course" required>
                                        <option value="" selected>--Select Your Course--</option>
                                        <option value="Deploma(C.S)">Deploma(C.S)</option>
                                        <option value="Deploma(I.T)">Deploma(I.T)</option>
                                        <option value="B.tech(C.S)">B.tech(C.S)</option>
                                        <option value="B.tech(I.T)">B.tech(I.T)</option>
                                        <option value="B.C.A">B.C.A</option>
                                        <option value="PGDCA">PGDCA</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input name="year" type="year" placeholder="Your Passing Year*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input name="collagename" type="text" placeholder="Collage Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
    <div class="form-grp">
        <select id="training" name="training" required>
            <option value="" selected>--Select Training Name--</option>
            <option value="Summer Training" data-amount="500">Summer Training</option>
            <option value="Winter Training" data-amount="500">Winter Training</option>
            <option value="Apprenticeship Training" data-amount="1000">Apprenticeship Training</option>
            <option value="Web Development Course" data-amount="500">Web Development Course</option>
            <option value="Programming Language" data-amount="500">Programming Language</option>
            <option value="Digital Marketing" data-amount="500">Digital Marketing</option>
            <option value="Database" data-amount="500">Database</option>
            <option value="ASP.Net Development" data-amount="500">ASP.Net Development</option>
            <option value="PHP Development" data-amount="500">PHP Development</option>
            <option value="Python Development" data-amount="500">Python Development</option>
            <option value="Java Development" data-amount="500">Java Development</option>
            <option value="Frontend Development" data-amount="500">Frontend Development</option>
            <option value="Wordpress Development" data-amount="500">Wordpress Development</option>
            <option value="Pay Per Click" data-amount="500">Pay Per Click</option>
            <option value="SMM/SMO" data-amount="500">SMM/SMO</option>
            <option value="Search Engine Optimization" data-amount="500">Search Engine Optimization</option>
            <option value="C# programming" data-amount="500">C# programming</option>
            <option value="C++ Programming" data-amount="500">C++ Programming</option>
            <option value="Java programming" data-amount="500">Java programming</option>
            <option value="Php programming" data-amount="500">Php programming</option>
            <option value="Python Programming" data-amount="500">Python Programming</option>
            <option value="Graphics Design" data-amount="500">Graphics Design</option>
            <option value="Personality Development" data-amount="500">Personality Development</option>
            <option value="Video Editing" data-amount="500">Video Editing</option>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-grp">
        <input id="amount-to-pay" name="Pay" type="text" placeholder="Amount to Pay *" required value="500" disabled>
    </div>
</div>

                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Regiter Now
                                <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                            </button> 
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

<!-- Firebase integration script -->
<script type="module">
    import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js';
    import { getFirestore, collection, addDoc } from 'https://www.gstatic.com/firebasejs/9.1.0/firebase-firestore.js';

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyBi78ryVirCe10Wa9INSs1WtSEDy3OS27o",
        authDomain: "codeservirreactapp.firebaseapp.com",
        projectId: "codeservirreactapp",
        storageBucket: "codeservirreactapp.appspot.com",
        messagingSenderId: "596886885380",
        appId: "1:596886885380:web:3e5cab84baf8816c5d1151"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    // Initialize Firestore
    const db = getFirestore(app);

    document.addEventListener("DOMContentLoaded", function() {
        const trainingSelect = document.getElementById("training");
        const amountInput = document.getElementById("amount-to-pay");

        // Update amount based on training selection
        trainingSelect.addEventListener("change", function() {
            const selectedOption = trainingSelect.options[trainingSelect.selectedIndex];
            const amount = selectedOption.getAttribute("data-amount");
            amountInput.value = amount;  // Update the amount to pay
        });

        // Handle form submission
        document.getElementById("contact-form").addEventListener("submit", async function(event) {
            event.preventDefault();

            // Create form data object
            var formData = new FormData(this);
            var data = {};
            formData.forEach(function(value, key){
                data[key] = value;
            });

            console.log(data);

            try {
                // Add data to Firestore
                await addDoc(collection(db, "LearingRegistrations"), data);
                alert("Thank you so much, we will get back to you as soon as possible!");
                this.reset();  // Reset the form after successful submission
            } catch (error) {
                console.error('Error adding document:', error);
                alert("There was an error sending your message. Please try again.");
            }
        });
    });
</script>


<?php include('template/footer.php'); ?>
