@props(['value'])
<label for="email">
    {{ $value ?? $slot }}
</label>
