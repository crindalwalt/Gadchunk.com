<button {{ $attributes->merge(['type' => 'submit', 'class' => 'tp-login-btn w-100']) }}>
    {{ $slot }}
</button>
