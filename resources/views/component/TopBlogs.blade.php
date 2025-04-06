<style>
   .card {
    position: relative;
    padding: 5px;
    border-radius: 12px;
    background: transparent;
    transition: all 0.3s ease-in-out;
}

/* Default Card Style */
.card {
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
.card:hover {
    background: linear-gradient(135deg, #3cc8e7, #FC5C7D);
    padding: 5px;
    border-radius: 12px;
    transform: translateY(-8px);
    box-shadow: 0 15px 25px rgba(231, 76, 60, 0.3);
}

.card:hover .card {
    transform: scale(1.05);
    box-shadow: 0 20px 30px rgba(252, 92, 125, 0.3);
}

</style>

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Blogs</h2>
                </div>
                <p class="text-center leads">Explore the Blogs</p>
            </div>
        </div>
        <div id="TopCategoryItem" class="row align-items-center">


        </div>
    </div>
</div>


<script>

async function TopCategory() {
    let res = await axios.get("/blogList");
    $("#TopCategoryItem").empty();

    res.data.forEach((item, i) => {
        let image = "";
for (let content of item.contents) {
    if (content.image_url && content.image_url.trim() !== "") {
        image = `<img src="${content.image_url}" class="card-img-top" style="height: 180px; object-fit: cover;">`;
        break;
    }
}

let EachItem = `<div class="p-3 col-sm-6 col-md-4 col-lg-3">
    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
        <a href="/blog?page_id=${item['id']}" class="text-decoration-none text-dark">
            ${image}
            <div class="card-body">
                <h5 class="card-title text-center fw-semibold" style="font-size: 1.1rem;">${item['title']}</h5>
            </div>
        </a>
    </div>
</div>`;

        $("#TopCategoryItem").append(EachItem);
    });
}

</script>

