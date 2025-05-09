@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>All SEO Bookings</h2>

    <div class="mb-3">
        <input type="text" id="search-input" class="form-control" placeholder="Search name or email or contact...">
    </div>

    <div id="seo-table-wrapper" class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-nowrap">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Technology</th>
                    <th>Website</th>
                    <th>Status</th>
                    <th>Date</th> <!-- New Date Column -->
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr data-id="{{ $booking->id }}">
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->contact }}</td>
                    <td>{{ $booking->technology }}</td>
                    <td><a href="{{ $booking->website_link }}" target="_blank">Visit</a></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle
                                {{ $booking->status === 'pending' ? 'btn-danger' :
                                   ($booking->status === 'proceed' ? 'btn-warning' : 'btn-success') }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ ucfirst($booking->status === 'proceed' ? 'processing' :
                                    ($booking->status === 'complete' ? 'completed' : $booking->status)) }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-danger" href="#" onclick="confirmStatusChange({{ $booking->id }}, 'pending')">Pending</a></li>
                                <li><a class="dropdown-item text-warning" href="#" onclick="confirmStatusChange({{ $booking->id }}, 'proceed')">Processing</a></li>
                                <li><a class="dropdown-item text-success" href="#" onclick="confirmStatusChange({{ $booking->id }}, 'complete')">Completed</a></li>
                            </ul>
                        </div>
                    </td>
                    <td class="updated-at-cell">{{ $booking->updated_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmStatusModal" tabindex="-1" aria-labelledby="confirmStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Status Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        Are you sure you want to change the status to
        <strong id="statusToChangeText"></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="updateStatus()">Yes, Update</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    let selectedId = null;
    let newStatus = '';

    function confirmStatusChange(id, status) {
        selectedId = id;
        newStatus = status;
        document.getElementById('statusToChangeText').innerText = status.charAt(0).toUpperCase() + status.slice(1);
        const modal = new bootstrap.Modal(document.getElementById('confirmStatusModal'));
        modal.show();
    }

    function updateStatus() {
        axios.post(`/admin/seo-update-status/${selectedId}`, { status: newStatus })
            .then(response => {
                // Update only the status button
                const row = document.querySelector(`tr[data-id="${selectedId}"]`);
                const btn = row.querySelector('button.dropdown-toggle');
                const statusLabel = newStatus === 'proceed' ? 'Processing' : (newStatus === 'complete' ? 'Completed' : 'Pending');

                btn.classList.remove('btn-danger', 'btn-warning', 'btn-success');
                btn.classList.add(
                    newStatus === 'pending' ? 'btn-danger' :
                    newStatus === 'proceed' ? 'btn-warning' :
                    'btn-success'
                );
                btn.textContent = statusLabel;

            // Update the updated_at column dynamically
            const nowDhaka = new Date().toLocaleString("en-US", {
                timeZone: "Asia/Dhaka",
                day: "2-digit",
                month: "short",
                year: "numeric",
                hour: "2-digit",
                minute: "2-digit",
                hour12: true,
            });
            row.querySelector('.updated-at-cell').textContent = nowDhaka;

                bootstrap.Modal.getInstance(document.getElementById('confirmStatusModal')).hide();
            })
            .catch(error => {
                alert('Failed to update status.');
            });
    }

    document.getElementById('search-input').addEventListener('keyup', function () {
        const query = this.value.toLowerCase();
        document.querySelectorAll('#seo-table-wrapper tbody tr').forEach(row => {
            const name = row.children[0].textContent.toLowerCase();
            const email = row.children[1].textContent.toLowerCase();
            const contact = row.children[2].textContent.toLowerCase();
            row.style.display = name.includes(query) || email.includes(query) || contact.includes(query) ? '' : 'none';
        });
    });
</script>
@endsection
