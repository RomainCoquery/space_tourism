

<div class="mb-3">
    <label for="en_name" class="form-label">Technology name</label>
    <input type="text" class="form-control @error('en_name') is-invalid @enderror" id="en_name" name="en_name" value="{{ isset($technology) ? $technology->en_name : old('en_name') }}" required>
    @error('en_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_name" class="form-label">Nom de la technologie</label>
    <input type="text" class="form-control @error('fr_name') is-invalid @enderror" id="fr_name" name="fr_name" value="{{ isset($technology) ? $technology->fr_name : old('fr_name') }}" required>
    @error('fr_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="en_description" class="form-label">English description</label>
    <textarea class="form-control @error('en_description') is-invalid @enderror" id="en_description" name="en_description" rows="3" required>{{ isset($technology) ? $technology->en_description : old('en_description') }}</textarea>
    @error('en_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_description" class="form-label">Description en français</label>
    <textarea class="form-control @error('fr_description') is-invalid @enderror" id="fr_description" name="fr_description" rows="3" required>{{ isset($technology) ? $technology->fr_description : old('fr_description') }}</textarea>
    @error('fr_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="picture" class="form-label">Image</label>
    <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" accept="image/*" {{ isset($technology) ? '' : 'required' }}>
    @error('picture')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>