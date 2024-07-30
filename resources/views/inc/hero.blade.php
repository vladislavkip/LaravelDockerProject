<!-- ======= Hero Section ======= -->
<section id="hero" class="scrolled-offset">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"><li data-bs-target="#heroCarousel" data-bs-slide-to="0" class=""></li><li data-bs-target="#heroCarousel" data-bs-slide-to="1" class=""></li><li data-bs-target="#heroCarousel" data-bs-slide-to="2" class="active" aria-current="true"></li></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-1.jpg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Laravel Mountain Adventures</span></h2>
                        <p class="animate__animated animate__fadeInUp">Your gateway to unforgettable mountain trekking experiences. With our expert guides, unique routes, and a commitment to safety and sustainability, we offer adventures that cater to all skill levels. Join us and explore the world's majestic peaks!</p>
                        <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Join Now!</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-2.jpg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Discover Nature's Majesty</h2>
                        <p class="animate__animated animate__fadeInUp">Our expertly guided treks take you through stunning, less-traveled mountain paths. Experience the beauty of pristine landscapes, tailored routes for all skill levels, and our unwavering commitment to safety and sustainability.</p>
                        <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Join Now!</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item active" style="background-image: url({{ asset('img/slide/slide-3.jpg') }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Every Step an Adventure</h2>
                        <p class="animate__animated animate__fadeInUp">Embark on thrilling mountain treks led by experienced guides. Explore unique, scenic routes that cater to all skill levels. Prioritizing your safety and embracing sustainable practices, we offer an unforgettable journey through nature's wonders.</p>
                        <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Join Now!</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->