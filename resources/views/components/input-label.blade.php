@props(['value'])

<label {{ $attributes->merge(['class' => 'select-none text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
