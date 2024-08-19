<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-block mb-4']) }}>
    {{ $slot }}
</button>
