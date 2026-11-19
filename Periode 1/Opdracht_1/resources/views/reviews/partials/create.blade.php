
<dialog id="create-review-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe review</h2>

            <button type="button" id="close-create-review" class="modal-close">
                &times;
            </button>
        </div>

        <form method="POST" action="{{ route('reviews.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="comment" class="form-label">Reactie</label>
                <textarea id="comment" name="comment"
                    class="form-input" required>{{ old('comment') }}</textarea>
                @error('comment')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="user_id" class="form-label">Gebruiker ID</label>
                <input type="number" id="user_id" name="user_id"
                    class="form-input" min="1"
                    value="{{ old('user_id') }}" required>
                @error('user_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="number" id="product_id" name="product_id"
                    class="form-input" min="1"
                    value="{{ old('product_id') }}" required>
                @error('product_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-review"
                    class="btn btn-secondary">Annuleren</button>

                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>

    </div>

</dialog>
