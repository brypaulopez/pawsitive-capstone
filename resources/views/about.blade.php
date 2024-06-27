<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout/head')
    <style>
        body {
             margin: 0;
             padding: 0;
             height: 100vh;
             background: url('img/doggroup.png') no-repeat center center fixed;
             background-size: cover;
         }
         .content-container {
             position: relative;
             z-index: 1;
         }
         .content-container {
             content: "";
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             background: rgba(0, 0, 0, 0.5); /* Optional: add a white overlay with transparency */
             z-index: 100;
         }
     </style>
</head>
<body>
    @include('layout/nav')
    @include('layout/cart')
    <div class="content-container w-100 h-100">
        <section id="about">
            <div class="container">
                <div class="about-1">
                    <h1 class="text-light" style="margin-top: 100px;">ABOUT US</h1>
                    <p class="fs-5 text-light">Welcome to Pawsitive! We are a passionate team dedicated to revolutionizing the way veterinary practices connect with pet owners through innovative advertising solutions. <br>Founded with the belief that every pet deserves access to top-quality veterinary care, Pawsitive aims to bridge the gap between vets and the communities they serve.</p>
                </div>
            </div>
            <div id="about-2">
                <div class="content-box-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="about-item text-center bgteal">
                                    <i class="fa fa-book"></i>
                                    <h3>MISSION</h3>
                                    <hr>
                                    <p>Our mission is to bridge the gap between pet owners and veterinary professionals through innovative and effective advertising partnerships. We are dedicated to enhancing the visibility of veterinary practices, ensuring pet owners can easily find and access the best care for their furry friends. By fostering strong relationships between vets and the communities they serve, we strive to promote the health and well-being of all pets, making a pawsitive difference in their lives and the lives of their owners.</p>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="about-item text-center bgteal">
                                    <i class="fa fa-globe"></i>
                                    <h3>VISION</h3>
                                    <hr>
                                    <p>Our vision is to become the leading platform for connecting veterinary practices with pet owners through innovative and impactful advertising solutions. We aspire to create a world where every pet has access to the highest quality veterinary care, and where vets can effortlessly reach and serve their communities. By leveraging the power of technology and partnerships, we aim to transform the landscape of pet healthcare, ensuring a brighter, healthier future for all pets and their families.</p>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="about-item text-center bgteal">
                                    <i class="fa fa-pencil"></i>
                                    <h3>ACHIEVEMENTS</h3>
                                    <hr>
                                    <p>We are proud to have laid the foundation for a revolutionary platform that connects veterinary practices with pet owners through cutting-edge advertising solutions. Since our inception, we have successfully established partnerships with several veterinary clinics, helping them enhance their visibility and reach within their communities. Our innovative approach has already begun to make a positive impact on the accessibility and quality of pet care.</p>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <p class="text-center text-light">Copyright &copy; 2024 All rights reserved by Pawsitive</p>
        </section>
    </div>
    @include('layout/script')
</body>
</html>