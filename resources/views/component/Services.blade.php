
<style>
    .service-card-wrapper {
        position: relative;
        padding: 5px;
        border-radius: 12px;
        background: transparent;
        transition: all 0.3s ease-in-out;
    }

    .service-card {
        background: #ffffff;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    .service-card-wrapper:hover {
        background: linear-gradient(135deg, #fc5f40, #ff60a7);
        padding: 5px;
        border-radius: 12px;
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        width: 40px;
    }

    .icon-circle {
        background: #fc4c29;
        padding: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-bottom: 15px;
    }

    /* Ensure images and text are responsive */
    .service-card h5 {
        font-size: 1.2rem;
    }

    .service-card p {
        font-size: 0.9rem;
    }
</style>

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

<script>
    async function loadServices() {
        try {
            let res = await axios.get("/service-list");

            let serviceContainer = document.getElementById("ServiceContainer");
            serviceContainer.innerHTML = "";

            res.data['data'].forEach((item) => {
                let serviceCard = `
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="service-card-wrapper">
                            <div class="card service-card p-4">
                                <div class="icon-circle">
                                    <img src="${item.logo}" alt="Service Logo" class="img-fluid">
                                </div>
                                <h5 class="card-title text-dark">${item.title}</h5>
                                <p class="card-text text-muted">${item.description}</p>
                            </div>
                        </div>
                    </div>`;

                serviceContainer.innerHTML += serviceCard;
            });

        } catch (error) {
            console.error("Error fetching services:", error);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        loadServices();
    });
</script>
