<style>
    .carousel-item {
        position: relative;
        height: 400px;
        border-radius: 10px;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .text-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) translateY(10px);
        background: rgba(0, 0, 0, 0.75);
        color: #fff;
        padding: 12px 20px;
        border-radius: 6px;
        max-width: 80%;
        text-align: center;
        font-size: 1rem;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .text-box.fade-in {
        opacity: 1;
        transform: translate(-50%, -50%) translateY(0);
    }

    @media (max-width: 768px) {
        .carousel-item {
            height: 250px;
        }

        .text-box {
            font-size: 0.875rem;
            padding: 10px 15px;
            max-width: 95%;
        }

        .hero-section h1 {
            font-size: 1.5rem;
        }

        .hero-section p {
            font-size: 0.95rem;
        }
    }
</style>

<section class="hero-section bg-white text-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 mb-4 text-center text-lg-start">
                <h1 class="fw-bold text-danger">
                    Your <span class="text-dark">Strategic Business</span><br>
                    Partner For <span class="text-dark">Ultimate Success</span>
                </h1>
                <p class="mt-3 text-secondary">
                    Welcome to IDSB Global, one of the leading Digital Marketing agencies in Bangladesh.
                    With our innovative strategies and results-oriented approach, we help businesses thrive in the digital world.
                </p>
                <a href="{{ url('/consultancy') }}" class="btn btn-danger mt-3">Book Free Consultation</a>
            </div>

            <!-- Right Content (Carousel) -->
            <div class="col-lg-6">
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="{{ asset('assets/images/DM.png') }}" alt="Slide 1">
                            <div class="text-box">Innovative Strategies That Drive Success</div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="{{ asset('assets/images/crs2.jpeg') }}" alt="Slide 2">
                            <div class="text-box">Data-Driven Digital Campaigns</div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="{{ asset('assets/images/SEO3.jpeg') }}" alt="Slide 3">
                            <div class="text-box">Your Vision, Our Execution</div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const firstBox = document.querySelector(".carousel-item.active .text-box");
        if (firstBox) setTimeout(() => firstBox.classList.add("fade-in"), 300);

        const carousel = document.getElementById("heroCarousel");

        carousel.addEventListener("slide.bs.carousel", () => {
            document.querySelectorAll(".text-box").forEach(box => box.classList.remove("fade-in"));
        });

        carousel.addEventListener("slid.bs.carousel", () => {
            const activeBox = document.querySelector(".carousel-item.active .text-box");
            if (activeBox) setTimeout(() => activeBox.classList.add("fade-in"), 300);
        });
    });
</script>
