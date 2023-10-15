<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open" x-away="open = false" class="bg-gray-100 absolute w-full rounded-xl py-2 mt-2 z-40 max-h-52 overflow-auto" style="display: none">
        {{ $slot }}
    </div>
</div>
