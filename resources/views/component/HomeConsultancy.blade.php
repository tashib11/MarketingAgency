<style>
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
</style>


<div style="background: #f5f5f5;">
{{-- form --}}
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
                    <button type="button" class="btn-submit" onclick="submitForm()">Submit</button>
                </div>
            </div>
        </form>
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
