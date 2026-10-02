{{-- Put the Create Client form here. --}}
{{-- This file is intentionally separate so the modal can be reused. --}}

<form action="{{ url('/create/exporter') }}" method="POST" class="common_form">
    @csrf

    <div class="row g-3">
        <div class="col-lg-6">
            <label>Exporter Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="col-lg-12">
            <button type="submit">Create Exporter</button>
        </div>
    </div>
</form>