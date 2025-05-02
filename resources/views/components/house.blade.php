@props([
    'title',
    'description',
    'imageUrl'
])

<div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
    class="group min-h-[350px] rounded-2xl bg-[url('{{ $imageUrl }}')] bg-cover bg-center text-white">
    <div
        class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
        <h1 class="text-body-large mb-4 font-[Raleway]">{{ $title }}</h1>
        <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">{{ $description }}</span>
    </div>
</div>
