@extends('admin.layouts.app')

@section('content')

<div class="container mt-4">
    <div class="card shadow-sm rounded-4 p-4 mb-4" style="max-width: 700px; margin: 0 auto;">
        <h4 class="mb-4 fw-bold">Edit Blog</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form id="blog-form" method="POST" action="{{ route('blog.update', $blog->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Blog Title</label>
                <input type="text" name="title" class="form-control" required value="{{ $blog->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Content (text & images)</label>
                <textarea name="content" id="tiny-editor" class="form-control" rows="10">
{!! old('content', str_replace('src="storage/', 'src="' . asset('storage/') . '/', $blog->content)) !!}
                </textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success px-4">Update Blog</button>
            </div>
        </form>
    </div>
</div>

<!-- TinyMCE Integration -->
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

<script>
tinymce.init({
    selector: '#tiny-editor',
    height: 500,
    plugins: 'image code link lists table media preview',
    toolbar: [
        'undo redo | blocks fontfamily fontsize | bold italic underline',
        'alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image media link | code preview'
    ],
    menubar: false,
    automatic_uploads: true,
    image_title: true,
    images_upload_url: '/api/blog-upload-image',
    file_picker_types: 'image',

    formats: {
        bold: { inline: 'strong', remove: 'all' },
        italic: { inline: 'em', remove: 'all' },
        underline: { inline: 'u', remove: 'all' }
    },

    content_css: [
        '{{ asset('assets/bootstrap/css/bootstrap.min.css') }}',
        '{{ asset('admin-assets/css/blog.css') }}'
    ],
    file_picker_callback: function (cb, value, meta) {
        if (meta.filetype === 'image') {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                const file = this.files[0];
                const formData = new FormData();
                formData.append('image', file);

                fetch('/api/blog-upload-image', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(result => {
                    cb(result.url);
                })
                .catch(() => alert('Image upload failed'));
            };

            input.click();
        }
    },
    content_style: `
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            font-size: 16px;
            color: #333;
            line-height: 1.7;
            padding: 1rem;
        }
        h1, h2, h3, h4, h5 {
            color: #222;
            font-weight: 700;
        }
        p {
            margin-bottom: 1rem;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin: 1.2rem 0;
        }
        a {
            color: #0d6efd;
            text-decoration: underline;
        }
    `,
    setup: function(editor) {
        editor.on('NodeChange', function(e) {
            if (e.element.nodeName === 'A') {
                e.element.setAttribute('target', '_blank');
                e.element.setAttribute('rel', 'noopener noreferrer');
            }
        });
    }
});
</script>

@endsection
