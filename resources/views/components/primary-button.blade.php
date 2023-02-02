<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 waves-effect waves-light']) }}>
    {{ $slot }}
</button>
