<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section" style="background: linear-gradient(to right, #556493, #3e485d); color: #f8f9fa; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: 'Blog' Title -->
            <div class="col-md-3">
                <h4 class="fw-bold m-0 blog-title">About Us</h4>
            </div>
            <!-- Center: Dynamic Blog Title -->
            <div class="col-md-6 text-center">
                <h2 id="blog-title" class="fw-bold m-0 text-uppercase"></h2>
            </div>
            <!-- Right: Breadcrumb Links -->
            <div class="col-md-3 text-end">
                <ol class="breadcrumb d-inline-flex m-0 p-0" style="background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-light opacity-75">Home</a></li>
                    <li class="breadcrumb-item active text-light">This Page</li>
                </ol>
            </div>
        </div>
    </div>
</div>


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
        width: 100%;
    }
}

#myform {
    scroll-margin-top: 80px; /* Adjust this value as needed */
}

 </style>


<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ secure_asset('assets/images/emon2.jpg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <h1 class="fw-bold blog-title">Our Story</h1>
            <p class="text-dark">
                10 September 2025 we started our journey with some energetic people. Now the number has grown with 26 awesome team members and we hope the number will be growing in the upcoming days. With this 5 years journey, we have worked with so many international & local businesses.
                 From the very beginning, we were focused on delivering the actual value of our client’s business and that’s how our business has grown with their reference. Professional work with solid commitment is the major strength of our team.
            </p>

        </div>

    </div>
</div>

<div style="background: #f5f5f5;">
<div class="container py-5">
    <div class="row align-items-center">

        <div class="col-lg-6 text-center text-lg-start">
            <h5 class="fw-bold text-danger blog-title">Our Goals</h5>
            <p class="text-dark">
                Our goal is to establish a unique and highly effective online appearance for our clients. to achieve our targeted goal we are focusing mainly on 3 things.
            </p>
            <h5 class="fw-bold text-danger blog-title">Our Vision</h5>
            <p class="text-dark">
                Our goal is to establish a unique and highly effective online appearance for our clients. to achieve our targeted goal we are focusing mainly on 3 things.
            </p>
        </div>
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ secure_asset('assets/images/emon2.jpg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
    </div>
</div>
</div>


<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center mt-5">  <!-- Added mt-5 here -->
            <img src="{{ secure_asset('assets/images/emon1.jpg') }}" alt="Web Development" class="img-fluid w-75">
        </div>
        <div class="col-lg-6 text-center text-lg-start">
            <p class="text-gray">
                “Our agency’s mission perfectly articulates why I started farsiight. I had a deep passion for helping grow brands I genuinely believed in, and a burning desire to build an agency with an ironclad reputation for operating with integrity.
                With special thanks to Creative Director, Phil Nobay, we’ve managed to put this into words 6 years later, our mission is Growth for Good.”
            </p>

            <p class="text-right text-gray">Mahfuz Ahmed Emon </br>
         MD & CEO, IDSB-Global Agency</p>

        </div>


    </div>
</div>

<div class="container py-5">
    <div class="col-lg-6 text-center text-lg-start">
        <h2 class="blog-title">Company Details</h2>
        <p class="text-dark">

<span style="color: red;" > > </span> Tread License : TRAD/DNCC/058944/2022</br>
<span style="color: red;" > > </span> Incorporation : C-187012/2023</br>
<span style="color: red;" > > </span> TIN : 161244512677</br>
<span style="color: red;" > > </span>BIN : 005783424-0101</br>
<span style="color: red;" > > </span> Basis Member ID : AS-23-08-032</br>
<span style="color: red;" > > </span> e-Cab Member ID : 1740</br>
        </p>
    </div>
</div>
