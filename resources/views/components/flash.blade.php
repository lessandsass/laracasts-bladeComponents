<section
    class="{{ $type === 'success' ? 'bg-green-300' : 'bg-red-300' }} p-4"
>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>

        <button class="p-1">&times;</button>
    </div>
</section>
