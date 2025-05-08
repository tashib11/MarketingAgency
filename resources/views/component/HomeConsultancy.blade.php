<style>
    .quotation-form .form-control {
        background: #fff;
        color: #333;
        border: 1px solid #ccc;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        transition: 0.3s;
        width: 100%;
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
        scroll-margin-top: 80px;
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


<div style="background: #f5f5f5;">
    <!-- Success/Error messages go here -->
    <div id="formMessages"></div>

    <!-- Form -->
    <div id="myform">

    <div class="container" style="padding: 50px 0">
        <h2 class="text-center text-dark fw-bold mb-4">
            Book A Free <span class="blog-title">Consultancy</span>
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
                        <button type="button" class="btn-submit" onclick="submitForm()" id="submitBtn">
                            <span id="submitText">Submit</span>
                            <span id="spinner" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true" style="display: none;"></span>
                        </button>
                        <div id="inlineMessage" class="text-success fw-bold" style="display: none;">✅ Sent</div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
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
