@extends('layouts.app')

@section('hero')
    <div class="flex flex-col items-center justify-center gap-14 px-4 py-8">
        <div class="flex flex-col gap-8 px-8 text-center">
            <h1 class="text-headline-large md:text-display-large font-[Raleway]">
                Abre la puerta a tu Hogar perfecto
            </h1>
            <p class="text-body-small mx-auto max-w-4xl">
                En Grupo Hábitat, conectamos personas con espacios que inspiran. Encuentra casas, departamentos y terrenos
                en las mejores zonas con asesoría personalizada.
            </p>
        </div>
        <div
            class="mx-auto flex w-full max-w-4xl items-center justify-between rounded-full bg-white px-8 py-4 drop-shadow-[0px_4px_6px_rgba(0,0,0,0.06)]">
            <div class="flex flex-col gap-2">
                <h2 class="text-label-medium font-bold">
                    Tipo de propiedad
                </h2>
                <select name="" id="" class="text-gray-400">
                    <option value="">Casa</option>
                    <option value="">Casa</option>
                </select>
            </div>
            <x-button>
                Buscar
            </x-button>
        </div>
        <div class="container mx-auto hidden md:flex snap-x items-center justify-center gap-8 overflow-y-auto py-4">
            <div
                class="hidden lg:flex h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400">
                <span>Placeholder</span>
            </div>
            <div
                class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400">
                <span>Placeholder</span>
            </div>
            <div
                class="flex h-[300px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400">
                <span>Placeholder</span>
            </div>
            <div
                class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400">
                <span>Placeholder</span>
            </div>
            <div
                class="hidden lg:flex h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400">
                <span>Placeholder</span>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <div class="px-4 container mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-12">
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="group flex min-h-[350px] flex-col items-start justify-end rounded-2xl bg-gray-200 bg-gradient-to-b from-transparent from-60% to-black px-4 py-8 text-white">
            <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
            <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
        </div>
    </div>
@endsection
