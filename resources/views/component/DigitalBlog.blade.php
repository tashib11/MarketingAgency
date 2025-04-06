
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


    /* Timeline Container */
.timeline {
    position: relative;
    max-width: 600px;
    margin: auto;
}

/* Timeline Line */
.timeline::before {
    content: "";
    position: absolute;
    left: 15px;
    top: 0;
    width: 4px;
    height: 100%;
    background: #E74C3C;
}

/* Timeline Item */
.timeline-item {
    position: relative;
    padding-left: 40px;
    margin-bottom: 30px;
}

/* Timeline Icon */
.timeline-item::before {
    content: "";
    position: absolute;
    left: 5px;
    top: 5px;
    width: 20px;
    height: 20px;
    background: #E74C3C;
    border-radius: 50%;
    border: 4px solid white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Timeline Title */
.timeline-title {
    font-size: 1.4rem;
    font-weight: bold;
    color: #E74C3C;
}

/* Timeline Description */
.timeline-text {
    color: #444;
    font-size: 0.95rem;
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
        width: 100%;
    }
}

#myform {
    scroll-margin-top: 120px; /* Adjust this value as needed */
}

#workScope {
    scroll-margin-top: 80px; /* Adjust this value as needed */
}
  /* Custom Service Card Styling */
   /* Custom Wide Service Card */
   .custom-service-card-wrapper {
        position: relative;
        padding: 5px;
        border-radius: 12px;
        background: transparent;
        transition: all 0.3s ease-in-out;
    }

    .custom-service-card {
        background: #ffffff;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 25px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        width: 100%;
        max-width: 500px; /* Increased width */
        margin: auto;
    }

    .custom-service-card-wrapper:hover {
        background: linear-gradient(135deg, #E74C3C, #FC5C7D);
        padding: 5px;
        border-radius: 12px;
        transform: translateY(-8px);
        box-shadow: 0 15px 25px rgba(231, 76, 60, 0.3);
    }

    .custom-service-card-wrapper:hover .custom-service-card {
        transform: scale(1.05);
        box-shadow: 0 20px 30px rgba(252, 92, 125, 0.3);
    }
    select:has(option:checked:disabled) {
        color: gray !important;
    }

    /* When the user selects another option, change text color to black */
    select:focus,
    select:valid {
        color: black !important;
    }


 </style>


<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
            <h1 class="fw-bold text-danger">Why Your Business Needs <span class="blog-title"> Digital Marketing</span> Company to Winning in the Online World</h1>
            <p class="text-dark">
                Today, being visible online isn't a choice, it's a must-have for any business. Digital marketing helps you:
            </p>
            <p class="text-dark">
              <span style="font-weight: 410">  Reach more people:</span> Break free from local limitations and connect with potential customers anywhere, anytime.
            </p>
            <p class="text-dark">
                <span style="font-weight: 410">  Find the perfect audience:</span> Target your marketing efforts to people most likely to buy, getting the most out of your budget.
            </p>
            <p class="text-dark">
                <span style="font-weight: 410">  Build real connections:</span> Talk directly with your customers, building trust and loyalty that lasts.
            </p>
            <p class="text-dark">
                <span style="font-weight: 410">  Learn what works:</span> Track data to understand how customers behave and improve your marketing for better results.
            </p>
            <p class="text-dark">
                <span style="font-weight: 410">  Stay on top of the game:</span> Adapt and change as the online world evolves, keeping your business competitive.
            </p>
            <p class="text-dark">
                Digital marketing is a cost-effective and trackable way to achieve your business goals, making it an essential tool for winning in the online world
            </p>

            <div class="mt-4 d-flex flex-wrap gap-3">
                <a href="#myform" class="btn btn-danger btn-sm px-3 py-2">Book Free Consultation</a>
                <a href="#workScope" class="btn btn-dark btn-sm px-3 py-2">Working Scope With You</a>
            </div>
        </div>
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/dmtheme.jpg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
    </div>
</div>




<!-- Web Services Section -->
<div id="workScope" style="background: #f5f5f5;">
    <div class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold text-dark position-relative d-inline-block">
                Web Services We Provide
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
                        <h5 class="card-title text-dark">Digital Marketing for
                            Restaurant</h5>
                        <p class="card-text text-muted">
                            From targeted social media campaigns to online reviews and email newsletters,
                             digital marketing enables restaurants to reach their target foodie audience.
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
                        <h5 class="card-title text-dark">Digital Marketing for
                            Hotel/Resort</h5>
                        <p class="card-text text-muted">
                            By using marketing techniques, businesses may successfully highlight their
                             special foods and services to customers and create long-lasting partnerships.
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
                        <h5 class="card-title text-dark">Digital Marketing for
                            E-Commerce</h5>
                        <p class="card-text text-muted">
                            Targeted campaigns reach millions, while data insights optimize results.
                            Through Digital marketing get your business data and use it to grow your business.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

                       {{-- Why From Us --}}
<div class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold text-dark position-relative d-inline-block">
            Grow Your Business With</br>
            Our DIGITAL MARKETING AGENCY in Bangladesh
            <span class="d-block w-50 mx-auto mt-1" style="height: 4px; background: red;"></span>
        </h2>
    </div>
</div>
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
            <h3 class="fw-bold text-danger">What is Digital Marketing?</h3>
            <p class="text-dark">
                In today's competitive business landscape, establishing a strong brand identity and online presence is crucial for newbie entrepreneurs looking to make their mark.
                 From crafting the perfect logo to designing a user-friendly website, here are some essential elements to consider:
            </P>
            <h3 class="fw-bold text-danger">Brand Identity:</h3>
            <p class="text-dark">
                Your brand identity is the essence of your business – it’s what sets you apart from the competition and resonates with your target audience. Start by defining your brand values, mission, and vision. These elements will form the foundation of your brand identity and guide all aspects of your business.
                Let's discuss how IMBD Agency, which is the best digital marketing agency in Bangladesh, helps to grow your brand identity on versatile marketplaces and search preferences.
            </p>

        </div>
         <!-- Right Section - Timeline -->
         <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/DM.png') }}" alt="Web Development" class="img-fluid w-75">
        </div>
    </div>
        <!--Second  Laravel Service Card -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="custom-service-card-wrapper">
                <div class="card custom-service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/star.svg') }}" alt="Laravel Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">Brand Values</h5>
                    <p class="card-text text-muted">
                        These are the fundamental beliefs and principles that guide a company's behavior and decision-making processes.
                        Brand values communicate what the brand stands for and what it represents to its customers.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="custom-service-card-wrapper">
                <div class="card custom-service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/road.svg') }}" alt="Laravel Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">
                        Mission and Vision</h5>
                    <p class="card-text text-muted">
                        A brand's mission defines its purpose and reason for existence, while its vision outlines its aspirations and long-term goals.
                         These statements provide clarity and direction, guiding the brand's actions and initiatives.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="custom-service-card-wrapper">
                <div class="card custom-service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/crown.svg') }}" alt="Laravel Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">
                        Brand Personality</h5>
                    <p class="card-text text-muted">
                        Just like individuals, brands have distinct personalities that influence how they are perceived by consumers.
                        Brand personality traits, such as sincerity, excitement, sophistication, or ruggedness, help shape the emotional connection between the brand and its audience.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="custom-service-card-wrapper">
                <div class="card custom-service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/eye.svg') }}" alt="Laravel Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">
                        Visual Elements</h5>
                    <p class="card-text text-muted">
                        These include the brand's logo, colors, typography, imagery, and other visual assets.
                        Consistent use of these elements across various touchpoints reinforces brand recognition and fosters brand recall.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<div style="background: #f5f5f5;">
<div class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold text-dark position-relative d-inline-block">
            The Power of Visual Content in</br>
            MODERN MARKETING
            <span class="d-block w-50 mx-auto mt-1" style="height: 4px; background: red;"></span>
        </h2>
    </div>
</div>
<div class="container py-5 ">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
            <h3 class="fw-bold text-danger">Visual Contents in Digital Marketing</h3>
            <p class="text-dark">
                In today’s digital world, having eye-catching visuals like quality product images and engaging videos can make a big difference for businesses. IMBD Agency, known as the best digital marketing agency in Bangladesh, understands the power of visuals in capturing customers' attention
                and driving sales. With our in-house video studio and expert video editor team, we specialize in creating compelling product images and videos that help businesses stand out. Here’s how quality product images, product videos, and explainer videos can work wonders for your business:
            </p>
        </div>
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ asset('assets/images/dmtheme.jpg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
    </div>
</div>
</div>

{{-- form --}}
<div id="myform">
    <div class="container" style="padding: 50px 0">
        <h2 class="text-center text-dark fw-bold mb-4">
            Get <span style="color: red;">Consultation</span>
        </h2>

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
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="Website Design & Development">Website Design & Development</option>
                        <option value="SEO">SEO</option>
                        <option value="Content Solution">Content Solution</option>
                        <option value="Creative Solution">Creative Solution</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label class="text-dark fw-bold">Example Website (Recommendation)</label>
                    <input type="text" id="exampleWebsite" class="form-control" placeholder="Example Website Link">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-dark fw-bold">Description</label>
                    <textarea id="description" class="form-control" rows="4" placeholder="Describe your requirements..."></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn-submit" onclick="submitForm()">Submit</button>
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

        if (!email.match(emailPattern)) {
            emailError.style.display = "block";
        } else {
            emailError.style.display = "none";
        }
    }

    async function submitForm() {
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let contact = document.getElementById("contact").value.trim();
        let company = document.getElementById("company").value.trim();
        let serviceType = document.getElementById("websiteType").value.trim();
        let exampleWebsite = document.getElementById("exampleWebsite").value.trim();
        let description = document.getElementById("description").value.trim();
        let emailError = document.getElementById("emailError").style.display;

        if (name === "" || email === "" || contact === "" || company === "" ||
            websiteType === "" || description === "") {
            alert("❌ Please fill out all required fields!");
            return;
        }

        if (emailError === "block") {
            alert("❌ Please enter a valid email address!");
            return;
        }

        try {
            let response = await axios.post('/service-booking', {
                name: name,
                email: email,
                contact: contact,
                company: company,
                service_type: serviceType,
                example_website: exampleWebsite,
                description: description
            });

            if (response.data.success) {
                alert("✅ Form submitted successfully!");
                document.getElementById("quotationForm").reset();
            }
        } catch (error) {
            alert("❌ Failed to submit the form. Please try again!");
            console.error(error);
        }
    }
</script>
