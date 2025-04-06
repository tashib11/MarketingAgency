<div class="container py-5">
    <div class="row align-items-center">
        <!-- Left Column: Text -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-4">
                Discover the <span class=" blog-title">Benefits</span> with Us
            </h2>

            <ul class="list-unstyled">
                <li class="d-flex align-items-start mb-4 benefit-item">
                    <img src="{{ secure_asset('assets/images/tick.svg') }}" alt="Check Icon" width="30" class="me-3 mt-1">
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Extensive Expertise</h5>
                        <p class="text-muted mb-0">
                            Benefit from a diverse team of seasoned professionals well-versed in a wide array of digital marketing disciplines, ensuring comprehensive support for all your online needs.
                        </p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4 benefit-item">
                    <img src="{{ secure_asset('assets/images/tick.svg') }}" alt="Check Icon" width="30" class="me-3 mt-1">
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Proven Track Record</h5>
                        <p class="text-muted mb-0">
                            Our portfolio showcases successful projects and satisfied clients, demonstrating our ability to deliver measurable results.
                        </p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4 benefit-item">
                    <img src="{{ secure_asset('assets/images/tick.svg') }}" alt="Check Icon" width="30" class="me-3 mt-1">
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Innovative Strategies</h5>
                        <p class="text-muted mb-0">
                            Stay ahead of the competition with cutting-edge approaches, leveraging AI, automation, and creative visuals.
                        </p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4 benefit-item">
                    <img src="{{ secure_asset('assets/images/tick.svg') }}" alt="Check Icon" width="30" class="me-3 mt-1">
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Personalized Solutions</h5>
                        <p class="text-muted mb-0">
                            Every strategy is tailored to your business, audience, and objectives, ensuring maximum impact.
                        </p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-0 benefit-item">
                    <img src="{{ secure_asset('assets/images/tick.svg') }}" alt="Check Icon" width="30" class="me-3 mt-1">
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Client-Centric Approach</h5>
                        <p class="text-muted mb-0">
                            Experience transparent communication, regular updates, and ongoing support as we prioritize your success.
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Right Column: Image -->
        <div class="col-md-6 text-center">
            <img src="{{ secure_asset('assets/images/benefit.jpeg') }}" alt="IMBD Office" class="img-fluid rounded shadow benefit-image">
        </div>
    </div>
</div>

<!-- Custom Styles & Animations -->
<style>
    .benefit-item {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease-in-out forwards;
    }

    .benefit-item:nth-child(1) { animation-delay: 0.2s; }
    .benefit-item:nth-child(2) { animation-delay: 0.4s; }
    .benefit-item:nth-child(3) { animation-delay: 0.6s; }
    .benefit-item:nth-child(4) { animation-delay: 0.8s; }
    .benefit-item:nth-child(5) { animation-delay: 1s; }

    .benefit-image {
        opacity: 0;
        transform: scale(0.9);
        animation: fadeInScale 1s ease-in-out 1.2s forwards;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
</style>
