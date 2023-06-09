<div class="border border-primary p-4">
    <form wire:submit.prevent="store()">
        <div class="mb-3">
            <label for="title" class="form-label">Title ( {{ $title }} ) </label>
            <input type="text" class="form-control" wire:model="title">
            @error('title')
                <span class="text-danger fst-talic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle ( {{ $subtitle }} ) </label>
            <input type="text" class="form-control" wire:model="subtitle">
            @error('subtitle')
                <span class="text-danger fst-talic"">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body ( {{ $body }} ) </label>
            <textarea cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body')
                <span class="text-danger fst-talic"">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select wire:model="tags" class="form-control" multiple>
                @foreach ($tagsAll as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
