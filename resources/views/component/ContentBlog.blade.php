
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
    height: 180px;
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


ul.text-muted li {
    padding-left: 1rem;
    text-indent: -0.8rem;
}

 </style>


<div class="container py-5">
    <div class="row align-items-center "style="padding:60px 0">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/content3.jpeg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <h1 class="fw-bold text-danger">Content Solution</h1>
            <p class="text-dark">
                In order to assist organizations in reaching their marketing goals, digital marketing agencies offer content solutions that center around the creation,
                optimization, and distribution of digital content. It includes social media management, paid advertising, analytics, content production, SEO optimization, distribution, and continuous optimization
                to engage the target audience, boost online exposure, and encourage conversions.
            </p>
            <div class="mt-4 d-flex flex-wrap gap-3">
                <a href="#myform" class="btn btn-danger btn-lg">Get Order</a>
            </div>
        </div>

    </div>
</div>


<!-- Web Services Section -->
<div style="background: #f5f5f5;">
    <div class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold text-dark position-relative d-inline-block">
                Why Does <span class=" blog-title">Content Marketing</span> Matter?
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Laravel Service Card -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Laravel Logo" class="img-fluid">
                        </div>
                        <h1 class="card-title text-dark">65%</h1>
                        <p class="card-text text-muted">
                            Top performing companies (in terms of online presence) had a well-crafted
                            content marketing strategy in place.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Web Hosting Service Card -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                        </div>
                        <h1 class="card-title text-dark">72%</h1>
                        <p class="card-text text-muted">
                            Marketers worldwide said relevant content creation was the most effective SEO tactic.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                        </div>
                        <h1 class="card-title text-dark">52%</h1>
                        <p class="card-text text-muted">
                            Website users/visitors are less likely to return to a website if they have had a poor experience the first time.
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="service-card-wrapper">
                    <div class="card service-card">
                        <div class="icon-circle">
                            <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                        </div>
                        <h1 class="card-title text-dark">3X</h1>
                        <p class="card-text text-muted">
                            More leads are generated by content marketing at 60% less marketing spend compared with traditional marketing.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/content2.jpeg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <h2 class="fw-bold text-danger">Content Audit & Strategy</h2>
            <p class="text-dark">
                We closely study your business, the sector you operate in, and your competitors. We profile your buyers and gather insights
                 on their interests, pain-points, and motivations.
            </p>
            <p class="text-dark">
                We audit your existing online marketing
                setup to compare and align the insights with your business goals and capabilities.
            </p>
            <p class="text-dark">
                We help create S-M-A-R-T (Specific, Measurable, Attainable, Relevant and Timely)
                 content marketing strategy, based on your business objectives.
            </p>
            <p class="text-dark">
                We establish relevant benchmarks and success parameters to continually measure the
                 effectiveness of the content marketing strategy and take necessary steps.
            </p>

        </div>

    </div>
</div>

    <div class="py-5 text-center">
        <div class="container">
            <h4 class="fw-bold text-dark position-relative d-inline-block">

            </h4>
        </div>
    </div>
<div class="container">
    <div class="row">
        <!-- Laravel Service Card -->

    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card text-start"style="background: #f5f5f5;">
                    <h1 class="card-title text-dark">
                        Our Online Content Production & Design Services Include:
                    </h1>

                    <ul class="text-muted ps-3 mb-0" style="list-style: none;">
                        <li>⦿ Thought-leadership & business-related blogs & articles</li>
                        <li>⦿ Business content (b2b and b2c content)</li>
                        <li>⦿ Sales collaterals (brochures, datasheets, position documents etc.)</li>
                        <li>⦿ Presentations (Keynote/PPT/Prezi formats)</li>
                        <li>⦿ e-Books, whitepapers, guides, how-to’s</li>
                        <li>⦿ Emailers</li>
                        <li>⦿ Infographics and creative design (visual social posts, posters, magazines, flyers, print/online ads, event backdrops, standees/popups, etc.)</li>
                        <li>⦿ Search Engine Marketing (SEM) Content</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- form --}}

<div id="myform" style="background: #f5f5f5; padding: 50px 0;">
    <div class="container">
        <h2 class="text-center text-dark fw-bold mb-4">
            Order for  <span style="color: red;">Content </span>Solution
        </h2>
       <p class="text-center text-dark  mb-4">
        Get the best content solution for your digital marketing purposes and build the great pillar of success.
        </p>
        <form id="quotationForm" class="quotation-form">
            <div class="row">
                <div class="col-md-6 col-12 mb-3">
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
                    <select id="company" class="form-select">
                        <option value="" selected disabled>-- Select Company Type --</option>
                        <option value="New Business">New Business</option>
                        <option value="Start Up">Start Up</option>
                        <option value="Company">Company</option>
                        <option value="Great Idea">Great Idea</option>
                    </select>

                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label class="text-dark fw-bold">Service Type</label>
                    <select id="websiteType" class="form-select">
                        <option value="" selected disabled>-- Select Service Type --</option>
                        <option value="Content Solution">Content Solution</option>
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="Website Design & Development">Website Design & Development</option>
                        <option value="SEO">SEO</option>
                        <option value="Creative Solution">Creative Solution</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label class="text-dark fw-bold">Example (Optional)</label>
                    <input type="text" id="exampleWebsite" class="form-control" placeholder="Example Website Link(Optional)">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-dark fw-bold">Description</label>
                    <textarea id="description" class="form-control" rows="4" placeholder="Describe your requirements..."></textarea>
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
    const company = document.getElementById("company").value.trim();
    const serviceType = document.getElementById("websiteType").value.trim();
    const exampleWebsite = document.getElementById("exampleWebsite").value.trim();
    const description = document.getElementById("description").value.trim();
    const emailError = document.getElementById("emailError").style.display;

    const spinner = document.getElementById("spinner");
    const submitBtn = document.getElementById("submitBtn");

    // Show spinner
    spinner.style.display = "inline-block";

    // Validate fields
    if (
        name === "" || email === "" || contact === "" || company === "" ||
        serviceType === "" || description === "" || emailError === "block"
    ) {
        showInlineMessage("❌ Please fill out all required fields!", false);
        spinner.style.display = "none";
        return;
    }

    try {
        const response = await axios.post('/service-booking', {
            name,
            email,
            contact,
            company,
            service_type: serviceType,
            example_website: exampleWebsite,
            description
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
