@extends('admin.layouts.app')

@section('content')


<div class="container mt-4">
    <h2>All Blogs</h2>

    <div class="mb-3">
        <input type="text" id="search-input" class="form-control" placeholder="Search blog title...">
    </div>

    <div id="blog-table-wrapper">
        @include('admin.blog-table', ['blogs' => $blogs])
    </div>
</div>
@endsection

@section('scripts')
<script>
    function fetchBlogs(query = '') {
        $.ajax({
            url: "{{ route('admin.blogs') }}",
            type: "GET",
            data: { search: query },
            success: function (data) {
                $('#blog-table-wrapper').html(data);
            },
            error: function () {
                alert('Failed to fetch blogs.');
            }
        });
    }

    // Live search
    $('#search-input').on('keyup', function () {
        const query = $(this).val();
        fetchBlogs(query);
    });

    // AJAX pagination (delegated because links are loaded dynamically)
    $(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    let url = $(this).attr('href');
    let query = $('#search-input').val(); // preserve search if any

    $.ajax({
        url: url,
        data: { search: query },
        success: function (data) {
            $('#blog-table-wrapper').html(data);
        }
    });
});

</script>
<script>
    // Auto-fade success alert after 3 seconds
    setTimeout(() => {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 500); // remove from DOM after fade
        }
    }, 3000);
</script>
<script>
    let deleteBlogId = null;

    // Open modal and store blog ID
    $(document).on('click', '[data-bs-target="#confirmDeleteModal"]', function () {
        deleteBlogId = $(this).data('id');
    });

    // AJAX delete on confirm
    $('#confirmDeleteBtn').on('click', function () {
        if (!deleteBlogId) return;

        $.ajax({
            url: `/admin/blogs/${deleteBlogId}`,
            type: 'POST',
            data: {
                _method: 'DELETE',
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
    $('#confirmDeleteModal').modal('hide');
    window.location.href = "{{ route('admin.blogs') }}"; // Force full reload
},

            error: function () {
                alert('Failed to delete blog.');
            }
        });
    });

    // Show alert
    function showSuccessAlert(message) {
        const alertBox = $(`
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `);

        $('.container').first().prepend(alertBox);

        setTimeout(() => {
            alertBox.fadeOut(500, () => alertBox.remove());
        }, 3000);
    }
</script>


@endsection
