<style>
    .service-card-wrapper {
        position: relative;
        padding: 5px;
        border-radius: 12px;
        background: transparent; /* No border by default */
        transition: all 0.3s ease-in-out;
    }

    .service-card {
        background: #ffffff; /* Pure white background */
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    .service-card-wrapper:hover {
        background: linear-gradient(135deg, #fc5f40, #ff60a7); /* Elegant warm gradient */
        padding: 5px;
        border-radius: 12px;
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        width: 40px;
    }

    .icon-circle {
        background: #fc4c29; /* Matching the gradient color */
        padding: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-bottom: 15px;
    }
</style>

<div class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2 class="blog-title">Our Services</h2>
                </div>
                <p class="text-center leads">Focused on results, we seek to raise the level of our customers</p>
            </div>
        </div>

        <div class="row" id="ServiceContainer">
            <!-- Cards will be loaded here dynamically -->
        </div>
    </div>
</div>

<script>
    async function loadServices() {
        let res = await axios.get("/service-list");
        $("#ServiceContainer").empty();

        res.data['data'].forEach((item) => {
            let serviceCard = `
                <div class="col-md-4 mb-4">
                    <div class="service-card-wrapper">
                        <div class="card service-card p-4">
                            <div class="icon-circle">
                                <img src="${item.logo}" alt="Service Logo">
                            </div>
                            <h5 class="card-title text-dark">${item.title}</h5>
                            <p class="card-text text-muted">${item.description}</p>
                        </div>
                    </div>
                </div>`;

            $("#ServiceContainer").append(serviceCard);
        });
    }

    $(document).ready(function() {
        loadServices();
    });
</script>
