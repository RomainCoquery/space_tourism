

<div class="mb-3">
    <label for="en_name" class="form-label">Planet name</label>
    <input type="text" class="form-control @error('en_name') is-invalid @enderror" id="en_name" name="en_name" value="{{ isset($planet) ? $planet->en_name : old('en_name') }}" required>
    @error('en_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_name" class="form-label">Nom de la planète</label>
    <input type="text" class="form-control @error('fr_name') is-invalid @enderror" id="fr_name" name="fr_name" value="{{ isset($planet) ? $planet->fr_name : old('fr_name') }}" required>
    @error('fr_name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="en_description" class="form-label">English description</label>
    <textarea class="form-control @error('en_description') is-invalid @enderror" id="en_description" name="en_description" rows="3" required>{{ isset($planet) ? $planet->en_description : old('en_description') }}</textarea>
    @error('en_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_description" class="form-label">Description en français</label>
    <textarea class="form-control @error('fr_description') is-invalid @enderror" id="fr_description" name="fr_description" rows="3" required>{{ isset($planet) ? $planet->fr_description : old('fr_description') }}</textarea>
    @error('fr_description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="distance" class="form-label">Distance</label>
    <input type="number" class="form-control @error('distance') is-invalid @enderror" id="distance" name="distance" value="{{ isset($planet) ? $planet->distance : old('distance') }}" required>
    @error('distance')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="distance_unit" class="form-label">Distance_unit</label>
    <input type="text" class="form-control @error('distance_unit') is-invalid @enderror" id="distance_unit" name="distance_unit" value="{{ isset($planet) ? $planet->distance_unit : old('distance_unit') }}" required>
    @error('distance_unit')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="duration" class="form-label">Durée</label>
    <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ isset($planet) ? $planet->duration : old('duration') }}" required>
    @error('duration')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="en_duration_unit" class="form-label">Duration unit</label>
    <input type="text" class="form-control @error('en_duration_unit') is-invalid @enderror" id="en_duration_unit" name="en_duration_unit" value="{{ isset($planet) ? $planet->en_duration_unit : old('en_duration_unit') }}" required>
    @error('en_duration_unit')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fr_duration_unit" class="form-label">unité de durée</label>
    <input type="text" class="form-control @error('fr_duration_unit') is-invalid @enderror" id="fr_duration_unit" name="fr_duration_unit" value="{{ isset($planet) ? $planet->fr_duration_unit : old('fr_duration_unit') }}" required>
    @error('fr_duration_unit')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="picture" class="form-label">Image</label>
    <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" accept="image/*" {{ isset($planet) ? '' : 'required' }}>
    @error('picture')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>