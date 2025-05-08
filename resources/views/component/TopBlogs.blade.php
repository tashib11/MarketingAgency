<style>
    .blog-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .blog-card img {
        height: 180px;
        object-fit: cover;
        width: 100%;
    }

    .blog-card h3 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        transition: color 0.3s;
    }

    .blog-card:hover h3 {
        color: #FC5C7D;
    }

    .blog-card p {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 0;
    }

    .blog-title {
        font-weight: 700;
        color: #333;
    }

    .blog-detail-image {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        margin-bottom: 1.5rem;
    }

    #blog-sidebar {
        background: #f8f9fa;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        margin-top: -15px;
    }

    #recent-posts {
        max-height: 400px;
        overflow-y: auto;
    }

    #recent-posts .list-group-item {
        border: none;
        border-radius: 8px;
        transition: background 0.3s;
        cursor: pointer;
    }

    #recent-posts .list-group-item:hover {
        background-color: #e9ecef;
    }

    /* Shared Blog Content Styling */
    #blog-content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
        border-radius: 8px;
    }

    #blog-content p {
        margin-bottom: 1rem;
        color: #343a40;
        font-size: 1rem;
        line-height: 1.7;
    }

    #blog-content h1,
    #blog-content h2,
    #blog-content h3 {
        margin-top: 1.5rem;
        font-weight: bold;
        color: #212529;
    }

    #blog-content a {
        color: #0d6efd;
        text-decoration: none;
    }

    #blog-content a:visited {
        color: #6f42c1;
        text-decoration: none;
    }

    #blog-content a:hover {
        text-decoration: none;
        color: #e93e3e;
    }

    /* Mobile tweaks */
    @media (max-width: 576px) {
        .blog-card h3 {
            font-size: 1rem;
        }

        .blog-card p {
            font-size: 0.75rem;
        }

        .blog-card .p-3 {
            padding: 1rem;
        }
    }
</style>

<!-- Blog cards container (visible on home) -->
<div id="home-page">
    <div class="section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 text-center">
                    <h2 class="blog-title">Top Blogs</h2>
                    <p class="leads">Explore the Blogs</p>
                </div>
            </div>
            <div id="TopCategoryItem" class="row gy-4"></div>
        </div>
    </div>
</div>

<!-- Hidden blog detail layout (already included in DOM) -->
<div id="blog-page" style="display: none;">
    <div  class="container mt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6 text-center">
                <h2 class="blog-title">Top Blogs</h2>
                <p class="leads">Explore the Blogs</p>
            </div>
        <div class="row">
            <div class="col-md-8" id="blog-content">
                <!-- Blog details will load here -->
            </div>
            <div class="col-md-4 mt-3 mt-md-0"> <!-- This ensures spacing only on mobile -->
                <div class="card border-0 p-3" id="blog-sidebar">
                    <h5 class="fw-bold text-dark mb-3">Recent Posts</h5>
                    <div class="list-group" id="recent-posts"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        loadBlogCards();

        window.onpopstate = function (event) {
            if (event.state && event.state.blogId) {
                loadBlogDetails(event.state.blogId, false);
            } else {
                showHomePage();
            }
        };
        // Ensure links in the blog content open in a new tab
    const blogContent = document.querySelector('#blog-content');
    if (blogContent) {
        const links = blogContent.querySelectorAll('a');
        links.forEach(link => {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        });
    }
    });

    async function loadBlogCards() {
        let res = await axios.get("/blogList");
        $("#TopCategoryItem").empty();

        res.data.forEach((item) => {
            const image = item.image_url
                ? `<img src="${item.image_url}" class="img-fluid" style="height:180px; object-fit:cover;">`
                : `<div class="bg-light d-flex align-items-center justify-content-center" style="height:180px;">No Image</div>`;

            const card = `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="blog-card" style="cursor:pointer;" onclick="navigateToBlog(${item.id})">
                        ${image}
                        <div class="p-3 text-center">
                            <h3>${item.title}</h3>
                            <p class="text-muted">${item.date}</p>
                        </div>
                    </div>
                </div>
            `;

            $("#TopCategoryItem").append(card);
        });
    }

    function navigateToBlog(blogId) {
        history.pushState({ blogId }, '', `/blog/${blogId}`);
        loadBlogDetails(blogId);
    }

    function showHomePage() {
        $("#home-page").show();
        $("#blog-page").hide();
    }

    function showBlogPage() {
        $("#home-page").hide();
        $("#blog-page").show();
    }

    function loadBlogDetails(blogId, pushState = true) {
        axios.get('/api/blog/' + blogId).then(response => {
            const blog = response.data.blog;
            const recentPosts = response.data.recent;

          // After injecting blog.content
$("#blog-content").html(`
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
        <h1 class="blog-title mb-3">${blog.title}</h1>
        <p class="text-muted mb-4">${blog.date}</p>
        ${blog.content}
    </div>
`);

// ✅ Fix relative image paths
$("#blog-content img").each(function () {
    const src = $(this).attr("src");
    if (src && !src.startsWith("http") && !src.startsWith("/")) {
        $(this).attr("src", "/" + src);
    }
});



           // Inject recent posts into styled sidebar
let recentHtml = '';
recentPosts.forEach(post => {
    const isActive = post.id == blogId;
    recentHtml += `
        <a href="#blog-page" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ${isActive ? 'active-blog' : ''}" data-id="${post.id}">
            <span>${post.title} ${isActive ? '<i class="bi bi-check-circle-fill text-primary ms-2"></i>' : ''}</span>
            <small class="text-muted">${post.date}</small>
        </a>
    `;
});

$("#recent-posts").html(recentHtml);

// Bind click events
$("#recent-posts a[data-id]").on("click", function (e) {
    e.preventDefault();
    const blogId = $(this).data("id");
    navigateToBlog(blogId);
});



            showBlogPage();
            // Scroll to top of blog page
document.getElementById("blog-page").scrollIntoView({ behavior: 'smooth' });
        });
    }
//     document.addEventListener("DOMContentLoaded", function() {
//     const links = document.querySelectorAll('#blog-content a');
//     links.forEach(link => {
//         link.setAttribute('target', '_blank');
//         link.setAttribute('rel', 'noopener noreferrer');  // For security reasons
//     });
// });
</script>
