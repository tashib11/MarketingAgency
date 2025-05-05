<!-- BREADCRUMB SECTION -->
<div class="breadcrumb_section" style="background: linear-gradient(to right, #556493, #3e485d); color: #f8f9fa; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <h3 class="fw-bold m-0 blog-title">Blog</h3>
            </div>

            <div class="col-md-3 text-end">
                <ol class="breadcrumb d-inline-flex m-0 p-0" style="background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-light opacity-75">Home</a></li>
                    <li class="breadcrumb-item active text-light">This Page</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- MAIN BLOG SECTION -->
<!-- MAIN BLOG SECTION -->
<div class="container mt-4">
    <div class="row">
        <!-- Sidebar (Recent Posts) - First Column -->
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card border-0 p-3" id="blog-sidebar">
                <h5 class="fw-bold text-dark mb-3">Recent Posts</h5>
                <div class="list-group" id="blog-list"></div>
            </div>
        </div>

        <!-- Blog Content - Second Column -->
        <div class="col-md-8">
            <div id="blog-details" class="card border-0">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                    <h4 id="blog-title" class="blog-title mb-3"></h4>
                </div>

                <div id="blog-content">
                    <!-- Loading spinner shown first -->
                    <div class="text-center py-4">
                        <div class="spinner-border text-primary" role="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- STYLES -->
<style>
  #blog-sidebar {
    margin-top: -15px;
    background: #f8f9fa;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
}

#blog-details {
    margin-top: -50px;
    padding: 30px;
    background: #ffffff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    position: relative;
    z-index: 1;
}

#blog-details .card {
    max-width: 600px;
    margin: 0 auto 5px auto;
    padding: 2px 1px;
    background: #f8f9fa;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    text-align: center;
}

.blog-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #343a40;
    margin: 0;
    line-height: 1.2;
    word-wrap: break-word;
}



.active-blog i.bi-check-circle-fill {
    font-size: 1rem;
    vertical-align: middle;
}

@media (max-width: 767px) {
    #blog-sidebar {
        margin-top: 15px !important;
    }
    .blog-title {
        font-size: 1.25rem;
    }
}

</style>

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function () {
    const blogTitleEl = document.getElementById('blog-title');
    const blogContentEl = document.getElementById('blog-content');
    const blogListEl = document.getElementById('blog-list');

    function renderBlog(id) {
        // Show loading spinner for blog content
        blogContentEl.innerHTML = '<div class="text-center py-4"><div class="spinner-border text-primary" role="status"></div></div>';

        // First, fetch the sidebar (recent posts)
        updateSidebar(id);

        // Now fetch the blog content
        axios.get(`/api/blog/${id}`).then(res => {
            const blog = res.data.blog;
            blogTitleEl.textContent = blog.title;

            let html = '';
            blog.content.forEach(block => {
                if (block.type === 'text') {
                    html += `<p>${block.value}</p>`;
                } else if (block.type === 'image') {
                    html += `<img src="${block.value}" class="img-fluid my-3"/>`;
                }
            });
            blogContentEl.innerHTML = html;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    function updateSidebar(currentId) {
        // Fetch and display the recent posts immediately
        axios.get('/api/blog-recent').then(res => {
            let listHtml = '';
            res.data.forEach(blog => {
                const isActive = blog.id == currentId;
                listHtml += `
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ${isActive ? 'active-blog' : ''}" data-id="${blog.id}">
                        <span>${blog.title} ${isActive ? '<i class="bi bi-check-circle-fill text-primary ms-2"></i>' : ''}</span>
                        <small class="text-muted">${blog.date}</small>
                    </a>
                `;
            });
            blogListEl.innerHTML = listHtml;

            // 🔥 Intercept all sidebar link clicks to load dynamically
            document.querySelectorAll('#blog-list a').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // prevent full page reload
                    const id = this.getAttribute('data-id');
                    renderBlog(id);
                });
            });
        });
    }

    // Determine blog ID from URL
    const parts = window.location.pathname.split('/');
    let blogId = parts[parts.length - 1];

    if (!blogId || isNaN(blogId)) {
        // No blog ID → fetch latest
        axios.get('/api/blog-recent').then(res => {
            if (res.data.length > 0) {
                renderBlog(res.data[0].id);
            }
        });
    } else {
        renderBlog(blogId);
    }
});

    </script>
