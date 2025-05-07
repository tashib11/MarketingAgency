<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm"
                    data-id="{{ $blog->id }}"
                    data-title="{{ $blog->title }}"
                    data-bs-toggle="modal"
                    data-bs-target="#confirmDeleteModal">
                    Delete
                </button>
                </td>
            </tr>
        @empty
            <tr><td colspan="3" class="text-center">No blogs found.</td></tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {!! $blogs->links('pagination::bootstrap-5') !!}
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this blog?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Yes, Delete</button>
        </div>
      </div>
    </div>
  </div>

