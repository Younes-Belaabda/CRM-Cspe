<div class="mb-3">
    <label for="{{ $title }}" class="form-label">{{ $title }}</label>
    <select class="form-select" name="{{ $title }}" id="{{ $title }}">
        @foreach ($items as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
</div>
