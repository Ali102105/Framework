
<dialog id="create-order-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe bestelling</h2>

            <button type="button" id="close-create-order" class="modal-close">
                &times;
            </button>
        </div>

        <form method="POST" action="{{ route('orders.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="orderdate" class="form-label">Datum</label>

                <input type="date" id="orderdate" name="orderdate"
                    class="form-input" value="{{ old('orderdate') }}" required>

                @error('orderdate')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="userId" class="form-label">Gebruiker ID</label>

                <input type="number" id="userId" name="userId"
                    class="form-input" value="{{ old('userId') }}" min="1" required>

                @error('userId')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Status</label>

                <input type="text" id="status" name="status"
                    class="form-input" value="{{ old('status') }}" required>

                @error('status')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-order" class="btn btn-secondary">
                    Annuleren
                </button>

                <button type="submit" class="btn">
                    Opslaan
                </button>
            </div>
        </form>

    </div>

</dialog>
