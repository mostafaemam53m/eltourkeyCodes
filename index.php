<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaMark - Brand Your Pics With Watermark</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            animation: fadeIn 1s ease-in-out;
            
            color:white;
            
        }
        .navbar {
            animation: slideInDown 1s ease-in-out;
        }
        .nav-link {
            color: white;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ffcc00;
        }
        .card-title {
            transition: color 0.3s;
        }
        .card-title:hover {
            color: #ffcc00;
        }
        .form-control, .form--control, input[type="file"] {
            transition: box-shadow 0.3s;
        }
        .form-control:focus, .form--control:focus, input[type="file"]:focus {
            box-shadow: 0 0 10px #ffcc00;
        }
        .accordion-button {
            transition: background-color 0.3s, color 0.3s;
        }
        .accordion-button:hover {
            background-color: #ffcc00;
            color: #000;
        }
        .faq h3 {
            transition: color 0.3s;
        }
        .faq h3:hover {
            color: #ffcc00;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            animation: slideInUp 1s ease-in-out;
        }
        .footer-col {
            margin-bottom: 20px;
        }
        .footer-col h5 {
            transition: color 0.3s;
        }
        .footer-col h5:hover {
            color: #ffcc00;
        }
        .footer-about p, .footer-contact p {
            transition: color 0.3s;
        }
        .footer-about p:hover, .footer-contact p:hover {
            color: #ffcc00;
        }
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }
        @keyframes slideInUp {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }
        .main-wrapper, .custom--card, .faq, footer {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>

<body>
    <!-- Header with Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AquaMark</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tool">Edit Your Image</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </header>
   

    <!-- Main Content with AquaMark Tool -->
    <div class="lightmode" >
        <div class="preloader"></div>
        <div class="main-wrapper">
            <div class="container pt-100 pb-100">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="custom--card">
                            <div class="card-header text-center">
                                <h5 class="card-title text-white">AquaMark - Brand Your Pics With Watermark</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Select An Image</label>
                                    <input type="file" id="image" class="form-control form--control">
                                </div>
                                <div class="form-group" >
                                    <label for="download">Click to download</label>
                                    <p id="graph"><img src="assets/images/default.png" alt="" class="canvas_default_img"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom--card h-100">
                            <div class="card-header text-center">
                                <h5 class="card-title text-white">AquaMark Configuration</h5>
                            </div>
                            <div class="card-body" id="tool">
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-6">
                                        <label for="text">Text</label> 
                                        <input type="text" id="text" placeholder="Text" maxlength="30" value="AquaMark" class="form-control form--control w-100">
                                    </div>
                                    <div class="form-group col-lg-12 col-sm-6">
                                        <label for="color">Color</label>
                                        <input type="color" id="color" pattern="#[0-9A-Fa-f]{6}" value="#0000FF" class="form-control form--control">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="alpha">Opacity</label>
                                        <input type="range" id="alpha" min="0" max="1" step="0.05" value="1" class="w-100">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="space">Space</label>
                                        <input type="range" id="space" min="1" max="8" step="0.2" value="4" class="w-100">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="size">Size</label>
                                        <input type="range" id="size" min="0.5" max="3" step="0.05" value="1" class="w-100">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="rotation">Rotation</label>
                                        <input type="range" id="rotation" min="0" max="360" step="1" value="320" class="w-100">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="xPos">Horizontal Position</label>
                                        <input type="range" id="xPos" min="0" max="100" step="1" value="0" class="w-100">
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="yPos">Vertical Position</label>
                                        <input type="range" id="yPos" min="0" max="100" step="1" value="50" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                   <?php
                   include "texttop.php";
                   ?>
                </div>

                <!-- FAQ Section -->
                <div class="faq mt-5">
                    <h3>Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is AquaMark?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    AquaMark is a tool that allows you to add watermarks to your images easily.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    How do I use AquaMark?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can use AquaMark by selecting an image, configuring the watermark options, and then downloading the watermarked image.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Is AquaMark free to use?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, AquaMark is completely free to use.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
        <?php
                   include "textbottom.php";
                   ?>
    </div>

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 footer-col">
                        <div class="footer-about" id="about">
                            <h5>About Us</h5>
                               <p>Welcome to Pakqi, your go-to solution for adding watermarks to your images with ease and precision. Whether you're a professional photographer, an artist, or a business owner, our watermark tool is designed to help you protect your digital content and maintain your brand's identity. With Pakqi, you can easily create and apply custom watermarks to your images, ensuring your work is always credited and secure.</p>

                        </div>
                    </div>
                    <div class="col-lg-6 footer-col">
                        <div class="footer-contact" id="contact">
                            <h5>Contact Us</h5>
                            <p>Email: info@pakqi.com</p>
                            <p>Phone: +201015454555</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aquamark.min.js"></script>
</body>

</html>
