<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section" style="background: linear-gradient(to right, #1e3a8a, #3b5998); color: #f8f9fa; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: 'Blog' Title -->
            <div class="col-md-3">
                <h4 class="fw-bold m-0">Blog</h4>
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
<!-- END SECTION BREADCRUMB -->

<!-- MAIN BLOG SECTION -->
<!-- MAIN BLOG SECTION -->
<div class="container mt-4">
    <div class="row">
        <!-- Blog Main Content (Left Side) -->
        <div class="col-md-8">
            <div id="blog-details" class="card border-0">
                <div id="blog-content"></div>
            </div>
        </div>

        <!-- Blog Sidebar (Right Side) -->
        <div class="col-md-4 mt-3 mt-md-0"> <!-- This ensures spacing only on mobile -->
            <div class="card border-0 p-3" id="blog-sidebar">
                <h5 class="fw-bold text-dark mb-3">Recent Posts</h5>
                <div class="list-group" id="blog-list">
                    @foreach($blogs as $blog)
                        <a href="#" class="list-group-item list-group-item-action border-0 text-dark"
                           onclick="loadBlog({{ $blog->id }}); setActive({{ $blog->id }})"
                           id="blog-item-{{ $blog->id }}"
                           style="transition: all 0.3s ease; padding: 12px; border-radius: 8px;">
                            {{ $blog->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    #blog-details {
        margin-top: -50px; /* Keeps the card at the top */
        padding: 30px;
        background: #ffffff;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        position: relative;
        z-index: 1;
    }

    #blog-sidebar {
        margin-top: -15px; /* Keeps sidebar aligned on desktop */
        background: #f8f9fa;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    @media (max-width: 767px) {
        /* Ensure spacing on mobile */
        #blog-sidebar {
            margin-top: 15px !important;
        }
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if($blogs->isNotEmpty())
            loadBlog({{ $blogs->first()->id }});
            setActive({{ $blogs->first()->id }}); // Highlight the selected post
        @endif
    });

    async function loadBlog(id) {
        try {
            const response = await axios.get(`/blog/${id}`);
            const blog = response.data;

            // Update the breadcrumb title dynamically
            document.getElementById('blog-title').innerText = blog.title;

            let contentHtml = '';

            blog.contents.forEach(content => {
                if (content.image_url && content.image_url.trim() !== '') {
                    contentHtml += `<img src="${content.image_url}" class="img-fluid mb-3 rounded shadow">`;
                }
                if (content.text_section && content.text_section.trim() !== '') {
                    contentHtml += `<p class="text-secondary">${content.text_section}</p>`;
                }
            });

            document.getElementById('blog-content').innerHTML = contentHtml;

        } catch (error) {
            console.error("Error fetching blog:", error);
        }
    }

    function setActive(id) {
        document.querySelectorAll('.list-group-item').forEach(item => {
            item.classList.remove('active', 'bg-primary', 'text-white');
            item.style.background = "#ffffff"; // Default background
            item.style.color = "#333"; // Default text color
        });

        const selectedItem = document.getElementById(`blog-item-${id}`);
        if (selectedItem) {
            selectedItem.classList.add('active');
            selectedItem.style.background = "#0056b3"; // Highlight color
            selectedItem.style.color = "#ffffff"; // Text color on highlight
            selectedItem.style.fontWeight = "bold";
        }
    }
</script>
