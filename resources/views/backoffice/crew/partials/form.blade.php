

<div class="mb-3">
    <label for="name" class="form-label">Crew name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ isset($crew) ? $crew->name : old('name') }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="en_description" class="form-label">English description</label>
    <textarea class="form-control @error('en_description') is-invalid @enderror" id="en_description" name="en_description" rows="3" required>{{ isset($crew) ? $crew->en_description : old('en_description') }}</textarea>
    @error('en_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_description" class="form-label">Description en français</label>
    <textarea class="form-control @error('fr_description') is-invalid @enderror" id="fr_description" name="fr_description" rows="3" required>{{ isset($crew) ? $crew->fr_description : old('fr_description') }}</textarea>
    @error('fr_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="en_job" class="form-label">Job</label>
    <input type="text" class="form-control @error('en_job') is-invalid @enderror" id="en_job" name="en_job" value="{{ isset($crew) ? $crew->en_job : old('en_job') }}" required>
    @error('en_job')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_job" class="form-label">Emploi</label>
    <input type="text" class="form-control @error('fr_job') is-invalid @enderror" id="fr_job" name="fr_job" value="{{ isset($crew) ? $crew->fr_job : old('fr_job') }}" required>
    @error('fr_job')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="picture" class="form-label">Image</label>
    <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" accept="image/*" {{ isset($crew) ? '' : 'required' }}>
    @error('picture')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>