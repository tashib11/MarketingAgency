<style>
    .text-box {
      position: absolute;
      top: 5px;
      right: 5px;
      background: rgba(0, 0, 0, 0.88);
      color: rgba(255, 255, 255, 0.942);
      padding: 5px 5px;
      border-radius: 6px;
      max-width: 60%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      min-height: auto;
      height: auto; /* Ensures height only grows based on content */
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
      opacity: 0;
      transform: translateY(10px);
  }


      .fade-in {
          opacity: 1 !important;
          transform: translateY(0);
      }

      /* 🔹 Responsive Design */
      @media (max-width: 992px) { /* Tablet */
          .text-box {
              max-width: 90%;
              right: 10px;
              top: 10px;
          }
      }

      @media (max-width: 768px) { /* Mobile */
          .text-box {
              position: relative;
              width: 100%;
              text-align: center;
              top: auto;
              right: auto;
              margin-top: -50px;
              background: rgba(0, 0, 0, 0.88);
              padding: 15px;
          }
      }
  </style>

<section class="hero-section text-dark" style="background-color: white; padding: 60px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 col-md-12 text-center text-lg-start  mb-4">
                <h1 class="fw-bold" style="color: #d00000;">
                    Your <span class="text-dark">Strategic Business</span> Partner <br>
                    For <span class="text-dark">Ultimate Success.</span>
                </h1>
                <p class="mt-3 text-secondary">
                    Welcome to IDSB Global, one of the leading Digital Marketing agencies in Bangladesh.
                    With our innovative strategies and results-oriented approach, we help businesses thrive in the digital world.
                </p>
                <div class="mt-4">
                    <a href="/consultancy" class="btn btn-danger">Book Free Consultation</a>

                </div>
            </div>

            <!-- Right Content (Image Slider with Simultaneous Text Box) -->
            <div class="col-lg-6 col-md-12">
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators"></div>
                    <div class="carousel-inner"></div>

                    <!-- Carousel Controls -->
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
async function loadHomeSlides() {
    try {
        let response = await axios.get('/getHomeSlides');
        let slides = response.data;
        let carouselInner = document.querySelector("#heroCarousel .carousel-inner");
        let indicators = document.querySelector("#heroCarousel .carousel-indicators");

        carouselInner.innerHTML = '';
        indicators.innerHTML = '';

        slides.forEach((slide, index) => {
            let activeClass = index === 0 ? "active" : "";

            let slideItem = `
                <div class="carousel-item ${activeClass}" data-bs-interval="5000">
                    <img src="${slide.image}" class="d-block w-100" alt="Slide ${index + 1}">
                    <div class="text-box">${slide.textbox}</div>
                </div>`;

            let indicatorItem = `<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="${index}" class="${activeClass}" aria-label="Slide ${index + 1}"></button>`;

            carouselInner.innerHTML += slideItem;
            indicators.innerHTML += indicatorItem;
        });

        let carousel = document.querySelector("#heroCarousel");

        carousel.addEventListener("slide.bs.carousel", () => {
            document.querySelectorAll(".text-box").forEach(box => box.classList.remove("fade-in"));
        });

        carousel.addEventListener("slid.bs.carousel", () => {
            let activeSlide = document.querySelector(".carousel-item.active .text-box");
            if (activeSlide) {
                setTimeout(() => activeSlide.classList.add("fade-in"), 500);
            }
        });

    } catch (error) {
        console.error("Error loading slides:", error);
    }
}


// Ensure the first slide's text box is visible on page load
document.addEventListener("DOMContentLoaded", async () => {
    await loadHomeSlides();

    // Select the first slide's text-box and add fade-in effect
    let firstTextBox = document.querySelector(".carousel-item.active .text-box");
    if (firstTextBox) {
        setTimeout(() => firstTextBox.classList.add("fade-in"), 500);
    }
});

</script>
