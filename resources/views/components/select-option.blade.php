@props(['label', 'values'])

<select {!! $attributes->merge(['class' => 'form-control']) !!}>
    <option value="">{{ $label }}</option>

    @isset($values)
        @foreach ($values as $value)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach
    @endisset
</select>
