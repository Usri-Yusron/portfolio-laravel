<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Usri Yusron</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('user/themify-icons/css/themify-icons.css') }}">

    {{-- mansory --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.css" rel="stylesheet">

    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="{{ asset('user/dashboard.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">.Yusron 123</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#certificate">Certificate</a>
                </li>
                <li class="item">
                    <a class="link" href="#blog">Blog</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                <li class="item ml-md-3">
                    <a class="btn btn-primary" onclick="confirmationLogin(event)" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Yusron</span>
            </h1>
            <p class="header-subtitle">FULLSTACK WEB DEVELOPMENT</p> 
        </div>              
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{ asset('user/man.png') }}" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        Saya adalah seorang mahasiswa dari Institut Teknologi Nasional (ITENAS) Bandung dengan jurusan teknik informatika. Selama studi, saya telah mengembangkan keterampilan dalam beberapa projek seperti web development, graphical computer, internet of think dan artificial intelligent, melalui berbagai proyek akademis dan kegiatan ekstrakurikuler.
                        <br>Sebagai seorang mahasiswa saya memiliki rasa cepat belajar dan adaptif, saya yakin dapat berkembang pesat di lingkungan yang mendukung. Keterampilan saya meliputi komunikasi yang baik, managemen waktu, mampu bekerja di bawah tekanan, dan kemampuan bekerja secara tim.            
                    </p>
                    <a href="{{ url('cv/Resume Muhamad Usri Yusron.pdf') }}" class="btn-rounded btn btn-outline-primary mt-4" download>Download CV</a>
                </div>              
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('user/imgs/pencil-case.svg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">PHP Native</h6>
                            <p class="subtitle">Untuk proyek berskala kecil seperti tugas kuliah dan cocok digunakan untuk sebagai bahan belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('user/imgs/responsive.svg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Laravel</h6>
                            <p class="subtitle">Framework PHP yang populer dan memiliki banyak keunggulan, membuat website menjadi lebih dinamis.</p>
                        </div> 
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('user/imgs/toolbox.svg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Intenet of Think</h6>
                            <p class="subtitle">kendalikan perangkat fisik anda yang terhubung melalui internet dengan sensor, perangkat lunak, dan teknologi lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ asset('user/imgs/analytics.svg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Tutor Belajar</h6>
                            <p class="subtitle">Diskusi tentang mata kuliah yang anda kira cukup sulit, atau serahkan tugas harian kepada saya dan tunggu hingga selesai.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row masonry">
                @foreach ($data as $item)
                <div class="col-md-4 masonry-item mb-4">
                    <a href="{{ $item->link}}" target="_blank" class="portfolio-card">
                        <img src="projek/{{ $item->image }}" class="portfolio-card-img" alt="Project Image">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>{{ $item->title }}</h5>
                                <p class="font-weight-normal">{{ $item->description }}</p>
                            </span>                         
                        </span>                     
                    </a>
                </div>                    
                @endforeach
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- certificate section -->
    <section class="section" id="certificate">
        <div class="container text-center">
            <p class="section-subtitle">Recognized Certifications</p>
            <h6 class="section-title mb-6">Certificate</h6>
            <!-- row -->
            <div class="pricing-wrapper row">
                @foreach ($sertifikat as $item)
                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="pricing-card service-card">
                            <div class="pricing-card-header">
                                <img class="pricing-card-icon" src="sertifikat/{{ $item->image }}" alt="My Certificate">
                            </div>
                            <div class="pricing-card-body">
                                <h4 class="pricing-card-title">{{ $item->title }}</h4>
                                <div class="pricing-card-list">
                                    <p>Dikeluarkan Oleh: {{ $item->by }}</p>
                                </div>
                            </div>
                            <a href="{{ $item->link}}" target="_blank" class="btn btn-primary mt-3 pricing-card-btn">See Certificate Credentials</a>
                        </div>
                    </div>                    
                @endforeach
            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section><!-- end of pricing section -->

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <a href="#contact" class="btn btn-lg my-font btn-light rounded" style="cursor: pointer;">Hire Me</a>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- blog section -->
    <section class="section" id="blog">
        <!-- container -->
        <div class="container text-center">
            <p class="section-subtitle">Recent Posts?</p>
            <h6 class="section-title mb-6">Blog</h6>
            <!-- blog-wrapper -->
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="{{ asset('user/img-1.jpg') }}" class="blog-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Consectetur adipisicing elit</h6>

                    <p class="blog-card-caption">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                        <a href="#"><i class="ti-comment"></i> 123</a>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium neque numquam mollitia modi quasi distinctio.</p>

                    <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b></p>
                    <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

                    <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

            <!-- blog-wrapper -->
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="{{ asset('user/img-2.jpg') }}" class="blog-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Explicabo illo</h6>

                    <p class="blog-card-caption">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                        <a href="#"><i class="ti-comment"></i> 264</a>
                    </p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                    <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

        </div><!-- end of container -->
    </section><!-- end of blog section -->

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>                 
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email"requried>                 
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">                  
                    </div>
                </div>  
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- Footer -->
    <div class="container">
        <footer class="footer">       
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">UsriYusron</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- End of page footer -->

	
	<!-- core  -->
    <script src="{{ asset('user/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('user/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{ asset('user/bootstrap.affix.js') }}"></script>

    <!-- Meyawo js -->
    <script src="{{ asset('user/meyawo.js') }}"></script>

    {{-- sweet alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>

    <script>        
        function confirmationLogin(ev){
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
            title: "AREA TERLARANG",
            text: "Hanya Admin Yang Bisa Login",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })

            .then((willCancel)=>{
            if(willCancel){
                window.location.href = urlToRedirect;
            }
            });
        }
    </script>

</body>
</html>
