@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-300 border-green-400 border-2',
        'error' => 'bg-red-300 border-red-400 border-2',
        'warning' => 'bg-yellow-300 border-yellow-500 border-2',
    ]
])

<section
    {{ $attributes }}
    class="{{ $colors[$type] }} p-4"
>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>

        <button class="p-1">&times;</button>
    </div>
</section>
