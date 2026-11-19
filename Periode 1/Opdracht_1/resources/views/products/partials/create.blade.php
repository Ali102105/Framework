
<dialog id="create-product-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuw product</h2>

            <button type="button" id="close-create-product" class="modal-close">
                &times;
            </button>
        </div>

        <form method="POST" action="{{ route('products.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Naam</label>
                <input type="text" id="name" name="name"
                    class="form-input" maxlength="45"
                    value="{{ old('name') }}" required>
                @error('name')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Beschrijving</label>
                <textarea id="description" name="description"
                    class="form-input" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id" class="form-label">Categorie ID</label>
                <input type="number" id="category_id" name="category_id"
                    class="form-input" min="1"
                    value="{{ old('category_id') }}" required>
                @error('category_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-product"
                    class="btn btn-secondary">Annuleren</button>

                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>

    </div>

</dialog>
