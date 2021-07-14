<label class="form-label">{{ $label }}</label>
<select class="form-control show-tick" id="{{ $name }}" name="{{ $name }}" data-live-search="true">
    <option>-- Pilih {{ $label }} --</option>
    @forelse($options as $option)
        <option value="{{ $option->id }}">
            {{ $option->name }}
        </option>
    @empty
        {!! $slot !!}
    @endforelse
</select>
@error($name)
<em>{{ $message  }}</em>
@enderror

