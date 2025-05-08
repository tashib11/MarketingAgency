
<style>
    /* ---------- SERVICE CARD STYLING ---------- */
    .service-card-wrapper {
        position: relative;
        padding: 5px;
        border-radius: 12px;
        background: transparent;
        transition: all 0.3s ease-in-out;
    }

    /* Default Card Style */
    .service-card {
        background: #ffffff;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
        min-height: 320px; /* Fixed Height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 25px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Card Hover Effects */
    .service-card-wrapper:hover {
        background: linear-gradient(135deg, #E74C3C, #FC5C7D);
        padding: 5px;
        border-radius: 12px;
        transform: translateY(-8px);
        box-shadow: 0 15px 25px rgba(231, 76, 60, 0.3);
    }

    .service-card-wrapper:hover .service-card {
        transform: scale(1.05);
        box-shadow: 0 20px 30px rgba(252, 92, 125, 0.3);
    }

  /* Icon Circle */
.icon-circle {
    background: #ffffff; /* Clean white background */
    padding: 15px;
    border-radius: 12px; /* Soft rounded edges */
    display: inline-block;
    margin-bottom: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Soft shadow for better visibility */
    transition: transform 0.3s ease-in-out, background 0.3s ease-in-out;
}

/* Icon Image */
.icon-circle img {
    width: 50px; /* Adjust size for better fit */
    height: 50px;
    object-fit: contain;
}

/* Icon Hover Animation */
.service-card-wrapper:hover .icon-circle {
    transform: scale(1.1);
    background: #f5f5f5; /* Subtle grey on hover */
}

    /* Heading & Text Styling */
    .service-card h5 {
        font-size: 1.2rem;
        color: #2C3E50;
        margin-bottom: 10px;
        transition: color 0.3s ease-in-out;
    }

    /* ✅ FIXED: Keep description visible */
    .service-card p {
    font-size: 0.95rem;
    color: #666;
    height: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    padding: 0 10px;
    transition: none;
}
    .service-card-wrapper:hover h5 {
        color: #ffffff;
    }


.quotation-form .form-control {
    background: #fff;
    color: #333;
    border: 1px solid #ccc;
    padding: 12px;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.quotation-form .form-control::placeholder {
    color: #777;
}

.quotation-form .form-control:focus {
    border-color: red;
    outline: none;
    box-shadow: 0 0 8px rgba(255, 0, 0, 0.3);
}

.btn-submit {
    background: red;
    color: white;
    padding: 12px 25px;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
    max-width: 250px;
}

.btn-submit:hover {
    background: darkred;
}

/* Small screen adjustments */
@media (max-width: 768px) {
    .btn-submit {
        width: auto;
        font-size: 16px;
        padding: 10px 20px;
    }
}

#myform {
    scroll-margin-top: 80px; /* Adjust this value as needed */
}

 </style>


<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/SEO2.jpeg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <h1 class=" blog-title">SEO</h1>
            <p class="text-dark">
                SEO is an essential facet of digital marketing. It is in charge of raising your website’s exposure and maintaining an advantage over all of your rivals. It raises user traffic, conversion rates, ROI, and website visibility.
                 A website with a high ranking receives more traffic from people than others because Google bases its decisions on logic and the website's rank.
            </p>
            <div class="mt-4 d-flex flex-wrap gap-3">
                <a href="#myform" class="btn btn-danger btn-lg">Get Quotation</a>
                <a href="#" class="btn btn-dark btn-lg">View Portfolio</a>
            </div>
        </div>

    </div>
</div>

<div style="background: #f5f5f5;">
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/SEO.jpeg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <h3 class="fw-bold text-danger">Is it easy to find your company</h3>
            <h1 class="fw-bold text-danger blog-title">on search engines?</h1>
            <p class="text-dark">
                Higher rankings in organic search results establish your brand’s credibility in the eyes of your potential customers, signaling you ‘re the best in your industry, not just the one who paid for an ad. Studies have shown that SEO may have a better ROI than traditional marketing forms such as television and print ads. SEO is not magic like any other marketing method but it provides business visibility, branding, web traffic, high ROI, credibility, and insight into customer behavior.You may be concerned about the importance of SEO to a business where you may still have questions like this: Is SEO important to any business?
                 Do you need to invest in SEO even if the online business isn’t actually done? So Book an appointment with us.
            </p>

        </div>

    </div>
</div>
</div>
<!-- Web Services Section -->

    <div class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold text-dark position-relative d-inline-block">
               <span class="blog-title">  SEO Services</span> We Provide
                <span class="d-block w-50 mx-auto mt-1" style="height: 4px; background: red;"></span>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Laravel Service Card -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Laravel Logo" class="img-fluid">
                        </div>
                        <h5 class="card-title text-dark">Technical SEO</h5>
                        <p class="card-text text-muted">
                            Web design and development with laravel for business is a necessary part of any company’s online presence.
                            By creating an effective and user-friendly website, businesses can draw in more customers and keep them longer.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Web Hosting Service Card -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                        </div>
                        <h5 class="card-title text-dark">On-Page SEO</h5>
                        <p class="card-text text-muted">
                            Web design and development with custom wordpress for business is a powerful tool designed and maintained by our expert team.
                            By creating an effective and user-friendly website, businesses can draw in more customers and keep them longer.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                        </div>
                        <h5 class="card-title text-dark">Off-Page SEO</h5>
                        <p class="card-text text-muted">
                            Web design and development with custom wordpress for business is a powerful tool designed and maintained by our expert team.
                            By creating an effective and user-friendly website, businesses can draw in more customers and keep them longer.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


{{-- form --}}
<div id="myform" style="background: #f5f5f5; padding: 50px 0;">
    <div class="container">
        <h2 class="text-center text-dark fw-bold mb-4">
            Request a SEO <span style="color: red;">SEO </span>Quotation
        </h2>
       <p class="text-center text-dark  mb-4">Ready to grow? All you have to do is send your contact information to us.<br>
                     We will get in touch with your audit results and SEO potential
        </p>
        <form id="quotationForm" class="quotation-form">
            <div class="row">
                <div class="col-md-12 col-12 mb-3">
                    <input type="text" id="name" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <input type="email" id="email" class="form-control" placeholder="Email Address" oninput="validateEmail()">
                    <small id="emailError" class="text-danger" style="display: none;">⚠ Invalid email format!</small>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <input type="text" id="contact" class="form-control" placeholder="Contact No">
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <select id="website" class="form-select">
                        <option value="" selected disabled>-- Select Website Technology --</option>
                        <option value="WordPress">WordPress</option>
                        <option value="Laravel">Laravel</option>
                        <option value="Shopify">Shopify</option>
                        <option value="RAW PHP">RAW PHP</option>
                        <option value="HTML-CSS">HTML-CSS</option>
                        <option value="Others">Others</option>
                    </select>

                </div>
                <div class="col-md-6 col-12 mb-3">
                    <input type="text" id="exampleWebsite" class="form-control" placeholder=" Website Link">
                </div>

                <div class="col-12 text-center">
                    <div class="col-12 text-center d-flex justify-content-center align-items-center gap-3">
                        <button type="button" class="btn-submit d-flex justify-content-center align-items-center gap-2" id="submitBtn" onclick="submitForm()">
                            <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" style="display: none;"></span>
                            <span id="submitText">Submit</span>
                        </button>

                        <span id="successMsg" class="fw-semibold" style="display: none;"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function validateEmail() {
        let email = document.getElementById("email").value.trim();
        let emailError = document.getElementById("emailError");

        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        emailError.style.display = email.match(emailPattern) ? "none" : "block";
    }

    function showInlineMessage(message, isSuccess = true) {
    const successMsg = document.getElementById("successMsg");
    successMsg.textContent = message;
    successMsg.style.display = "inline";
    successMsg.className = isSuccess
        ? "text-success fw-semibold ms-3"
        : "text-danger fw-semibold ms-3";

    setTimeout(() => {
        successMsg.style.display = "none";
    }, 1000);
}

async function submitForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const contact = document.getElementById("contact").value.trim();
    const technology = document.getElementById("website").value.trim();
    const exampleWebsite = document.getElementById("exampleWebsite").value.trim();

    const spinner = document.getElementById("spinner");
    const submitBtn = document.getElementById("submitBtn");

    // Show spinner
    spinner.style.display = "inline-block";

    // Validate fields
    const isEmailInvalid = document.getElementById("emailError").style.display !== "none";
    if (
        name === "" || email === "" || contact === "" || technology === "" ||
        exampleWebsite === "" || isEmailInvalid
    ) {
        showInlineMessage("❌ Please fill out all required fields!", false);
        spinner.style.display = "none";
        return;
    }

    try {
        const response = await axios.post('/seo-booking', {
            name,
            email,
            contact,
            technology: technology,
            website_link: exampleWebsite,
        });

        if (response.data.success) {
            document.getElementById("quotationForm").reset();
            showInlineMessage("✅ Sent!", true);
        } else {
            showInlineMessage("❌ Something went wrong!", false);
        }
    } catch (error) {
        showInlineMessage("❌ Failed to submit the form!", false);
        console.error(error);
    } finally {
        spinner.style.display = "none";
    }
}

</script>
