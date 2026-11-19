
<dialog id="create-orderrow-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe orderregel</h2>

            <button type="button" id="close-create-orderrow" class="modal-close">
                &times;
            </button>
        </div>

        <form method="POST" action="{{ route('orderrows.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="orderId" class="form-label">Bestelling ID</label>

                <input type="number" id="orderId" name="orderId"
                    class="form-input" value="{{ old('orderId') }}" min="1" required>

                @error('orderId')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="productId" class="form-label">Product ID</label>

                <input type="number" id="productId" name="productId"
                    class="form-input" value="{{ old('productId') }}" min="1" required>

                @error('productId')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-orderrow" class="btn btn-secondary">
                    Annuleren
                </button>

                <button type="submit" class="btn">
                    Opslaan
                </button>
            </div>
        </form>

    </div>

</dialog>
