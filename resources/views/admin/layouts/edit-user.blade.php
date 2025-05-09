@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <h1>Edit User Email</h1>
    </div>
</section>

<section class="content">
    <div class="container">
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3">Update Email</button>
            <a href="{{ route('user.list') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
</section>
@endsection
