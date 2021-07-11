<form {{ $attributes }}>
    <button {{ $attributes->merge(['type' => 'submit']) }}>
        {{ $slot }}
    </button>
</form>
