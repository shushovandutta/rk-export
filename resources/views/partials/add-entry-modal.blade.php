<!-- Create Entry Modal -->

<form action="{{ url('/entries/create') }}" method="POST" class="common_form">
    @csrf
    <input type="hidden" value="{{$project->id}}" name="project_id" />
    <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label>Date <mark>*</mark></label>
                <input type="date" name="entry_date" class="form-control" value="{{ date('Y-m-d') }}" required>
            </div>
            <div class="col-md-6">
                <label>Voucher No <mark>*</mark></label>
                <input type="text" name="voucher" class="form-control" placeholder="Enter Voucher No" required>
            </div>
            <div class="col-md-6">
                <label>Lot No</label>
                <input type="text" name="lot" class="form-control" placeholder="Enter Lot">
            </div>
            <div class="col-md-6">
                <label>Bag Quantity</label>
                <input type="number" name="bag" class="form-control" placeholder="Enter Bag Qty">
            </div>
            <div class="col-md-6">
                <label>Payment Method</label>
                <select name="payment_method" class="form-select">
                    <option value="Cash">Cash</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cheque">Cheque</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Category</label>
                <input type="text" name="category" class="form-control" placeholder="Enter Category">
            </div>
            <div class="col-md-6">
                <label>Received Qty (KG)</label>
                <input type="number" step="any" name="received_qty" id="received_qty" class="form-control" value='0'
                    placeholder="0.00">
            </div>
            <div class="col-md-6">
                <label>Rate</label>
                <input type="number" step="any" name="rate" id="rate" class="form-control" value='0.00'
                    placeholder="0.00">
            </div>
            <div class="col-md-4">
                <label>Bill Amount</label>
                <input type="number" step="any" name="bill_amount" id="bill_amount" class="form-control"
                    placeholder="0.00">
            </div>
            <div class="col-md-4">
                <label>Advance</label>
                <input type="number" step="any" name="advance" class="form-control" placeholder="0.00">
            </div>
            <div class="col-md-4">
                <label>Due</label>
                <input type="number" step="any" name="due" class="form-control" placeholder="0.00">
            </div>
            <div class="col-md-4">
                <label>Total</label>
                <input type="number" step="any" name="total" class="form-control" placeholder="0.00">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Entry</button>
    </div>
</form>