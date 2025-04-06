
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
    padding: 8px;
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
    height: 70px;
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
        width: 100%;
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

<div class="py-5 text-start">
    <div class="container">
        <h2 class="fw-bold text-dark position-relative d-inline-block">
            How can We <span class=" blog-title"> Help</span>?
        </h2>
        <p>Talk to one of our consultants today and learn how to start leveraging your business.</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Laravel Service Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <i class="ti-mobile"></i>
                    </div>
                    <h5 class="card-title text-dark">0157721548</h5>

                    <p class="card-text text-muted">
                        We answer at office time from Sunday to Thursday
                    </p>
                </div>
            </div>
        </div>

        <!-- Web Hosting Service Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <i class="ti-email"></i>
                    </div>
                    <h5 class="card-title text-dark">info@idsb.com</h5>
                    <p class="card-text text-muted">
                        We will respond to your email within 8 hours
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <i class="ti-location-pin"></i>
                    </div>
                    <h5 class="card-title text-dark">1st floor, house-21, Dhanmondi, Dhaka-1208</h5>
                    <p class="card-text text-muted">
                        Visit us from Sunday to Thursday from 10:00 am to 08:00 pm
                </div>
            </div>
        </div>

    </div>
</div>

<div style="background: #f5f5f5;">

    <div class="col-lg-12 text-center mt-5" style="padding: 50px 0">  <!-- Added mt-5 here -->
        <img src="{{ secure_asset('assets/images/map.jpg') }}" alt="Web Development" class="img-fluid w-75">
    </div>

</div>



{{-- form --}}
<div id="myform">
    <div class="container" style="padding: 50px 0">
        <h2 class="text-center text-dark fw-bold mb-4">
            Book A Free <span style="color: red;">Consultancy</span>
        </h2>

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

                <div class="col-12 mb-3">
                    <label class="text-dark fw-bold">Message</label>
                    <textarea id="description" class="form-control" rows="4" placeholder="Describe..."></textarea>
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
        let description = document.getElementById("description").value.trim();
        let emailError = document.getElementById("emailError").style.display;

        if (name === "" || email === "" || contact === "" || description === "") {
            alert("❌ Please fill out all required fields!");
            return;
        }

        if (emailError === "block") {
            alert("❌ Please enter a valid email address!");
            return;
        }

        try {
            let response = await axios.post('/free-consultancy', {
                name: name,
                email: email,
                contact: contact,
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
