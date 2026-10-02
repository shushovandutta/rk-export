<!-- Create Entry Modal -->

<form action="{{ url('/projects/create') }}" method="POST" class="common_form">
    @csrf
    <input type="hidden" value="{{$client->id}}" name="client_id" />
    <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label>Project Name <mark>*</mark></label>
                <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name" required>
            </div>
            <div class="col-md-6">
                <label>Starting Date <mark>*</mark></label>
                <input type="date" name="starting_date" class="form-control" value="{{ date('Y-m-d') }}" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Project</button>
    </div>
</form>