
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
    background: linear-gradient(135deg,  #3cc8e7, #FC5C7D);
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
    font-size: 0.9rem;
    flex-grow: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    max-height: 150px;
    color: #666;
    transition: none; /* 🚀 Fix: No color change on hover */
}

.service-card-wrapper:hover h5 {
    color: #ffffff;
}

</style>

<div style="background: #f5f5f5;">
<div class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="blog-title">Our Services</h2>
                <p class="leads">Focused on results, we seek to raise the level of our customers</p>
            </div>
        </div>

        <div class="row" id="ServiceContainer">
            <!-- Dynamic cards will be loaded here -->
        </div>
    </div>
</div>
</div>

<script>
  async function loadServices() {
    try {
        let res = await axios.get("/service-list");
        let serviceContainer = document.getElementById("ServiceContainer");
        serviceContainer.innerHTML = "";

        res.data['data'].forEach((item) => {
            let serviceUrl = `/serviceById/${item.id}`;

            let serviceCard = `
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a href="${serviceUrl}" class="text-decoration-none">
                        <div class="service-card-wrapper">
                            <div class="card service-card p-4">
                                <div class="icon-circle">
                                    <img src="{{ secure_asset('assets/images/idsb.svg') }}" alt="Service Logo" class="img-fluid">
                                </div>
                                <h5 class="card-title text-dark">${item.title}</h5>
                                <p class="card-text text-muted">${item.description}</p>
                            </div>
                        </div>
                    </a>
                </div>`;

            serviceContainer.innerHTML += serviceCard;
        });

    } catch (error) {
        console.error("Error fetching services:", error);
    }
}

// Load services when the page is ready
document.addEventListener("DOMContentLoaded", function () {
    loadServices();
});

</script>

