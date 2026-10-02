{{-- Put the Create Client form here. --}}
{{-- This file is intentionally separate so the modal can be reused. --}}

<form action="{{ url('/client/create') }}" method="POST" class="common_form">
    @csrf

    <div class="row g-3">
        <div class="col-lg-6">
            <label>Client Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="col-lg-6">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="col-lg-6">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="col-lg-12">
            <button type="submit">Create Client</button>
        </div>
    </div>
</form>