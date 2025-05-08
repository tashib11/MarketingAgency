
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

/* Responsive tweaks for smaller devices */
@media (max-width: 768px) {
    .quotation-form {
        padding: 0 15px;
    }

    .quotation-form .form-control,
    .quotation-form .form-select {
        width: 100%;
        font-size: 15px;
        padding: 10px 12px;
    }

    .quotation-form textarea {
        font-size: 15px;
        padding: 10px 12px;
    }

    .quotation-form label {
        font-size: 15px;
        margin-bottom: 5px;
        display: inline-block;
    }

    .quotation-form .row > div {
        margin-bottom: 15px;
    }

    .btn-submit {
        width: auto;
        font-size: 16px;
        padding: 10px 20px;
    }

    #successMsg {
        font-size: 15px;
    }}


#myform {
    scroll-margin-top: 80px; /* Adjust this value as needed */
}
ul.text-muted li {
    padding-left: 1rem;
    text-indent: -0.8rem;
}
.spinner-border {
    display: inline-block;
    width: 1rem;
    height: 1rem;
    vertical-align: text-bottom;
    border: 0.15em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    animation: spinner-border .75s linear infinite;
}

@keyframes spinner-border {
    to { transform: rotate(360deg); }
}

.form-control.is-invalid {
        border-color: red;
        box-shadow: 0 0 5px rgba(255, 0, 0, 0.2);
    }

    .invalid-feedback {
        display: block;
        color: red;
        font-size: 0.875rem;
    }

    .alert-success {
        padding: 12px;
        background-color: #d4edda;
        border-left: 5px solid green;
        color: #155724;
        margin-bottom: 20px;
    }

    .alert-danger {
        padding: 12px;
        background-color: #f8d7da;
        border-left: 5px solid red;
        color: #721c24;
        margin-bottom: 20px;
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
        <img src="{{ asset('assets/images/map.jpg') }}" alt="Web Development" class="img-fluid w-75">
    </div>

</div>



{{-- form --}}
    <!-- Success/Error messages go here -->
    <div id="formMessages"></div>
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
                    <div class="col-12 d-flex justify-content-center align-items-center gap-3 flex-wrap">
                        <button type="button" class="btn-submit d-flex justify-content-center align-items-center gap-2" id="submitBtn" onclick="submitForm()">
                            <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" style="display: none;"></span>
                            <span id="submitText">Submit</span>
                        </button>

                        <div id="inlineMessage" class="text-success fw-bold" style="display: none;">✅ Sent</div>
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

        if (!email.match(emailPattern)) {
            emailError.style.display = "block";
        } else {
            emailError.style.display = "none";
        }
    }

    async function submitForm() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const contact = document.getElementById("contact");
    const description = document.getElementById("description");
    const emailError = document.getElementById("emailError");
    const submitBtn = document.getElementById("submitBtn");
    const spinner = document.getElementById("spinner");
    const submitText = document.getElementById("submitText");
    const inlineMessage = document.getElementById("inlineMessage");
    const formMessages = document.getElementById("formMessages");

    // Trim once
    const nameVal = name.value.trim();
    const emailVal = email.value.trim();
    const contactVal = contact.value.trim();
    const descVal = description.value.trim();

    // Reset errors
    [name, email, contact, description].forEach(input => input.classList.remove("is-invalid"));
    formMessages.innerHTML = "";
    emailError.style.display = "none";
    inlineMessage.style.display = "none";

    // Validation
    let hasError = false;
    if (!nameVal) { name.classList.add("is-invalid"); hasError = true; }
    if (!emailVal || emailError.style.display === "block") { email.classList.add("is-invalid"); hasError = true; }
    if (!contactVal) { contact.classList.add("is-invalid"); hasError = true; }
    if (!descVal) { description.classList.add("is-invalid"); hasError = true; }

    if (hasError) return;

    submitBtn.disabled = true;
    spinner.style.display = "inline-block";
    submitText.textContent = "Submitting...";

    try {
        const { data } = await axios.post('/free-consultancy', {
            name: nameVal,
            email: emailVal,
            contact: contactVal,
            description: descVal,
        });

        if (data.success) {
            document.getElementById("quotationForm").reset();
            inlineMessage.textContent = "✅ Sent";
            inlineMessage.style.display = "inline-block";
            setTimeout(() => {
                inlineMessage.style.display = "none";
            }, 800);
        }
    } catch (error) {
        if (error.response?.status === 422) {
            const errors = error.response.data.errors;
            for (let field in errors) {
                const input = document.getElementById(field);
                if (input) input.classList.add("is-invalid");
            }
            formMessages.innerHTML = `<div class="alert-danger">❌ Please fix the highlighted fields.</div>`;
        } else {
            formMessages.innerHTML = `<div class="alert-danger">❌ Something went wrong. Try again later.</div>`;
        }
    } finally {
        submitBtn.disabled = false;
        spinner.style.display = "none";
        submitText.textContent = "Submit";
    }
}

</script>
