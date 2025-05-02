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
                    <option value="">Departamento</option>
                </select>
            </div>
            <x-button>
                Buscar
            </x-button>
        </div>
        <div class="container mx-auto hidden snap-x items-center justify-center gap-8 overflow-y-auto py-4 md:flex">
            <img
            class="hidden h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400 lg:flex" src="https://picsum.photos/1920/1080"/>
            <img
            class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400" src="https://picsum.photos/1920/1080"/>
            <img
            class="flex h-[300px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400" src="https://picsum.photos/1920/1080"/>
            <img
            class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400" src="https://picsum.photos/1920/1080"/>
            <img
            class="hidden h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400 lg:flex" src="https://picsum.photos/1920/1080"/>
        </div>
    </div>
@endsection

@section('body')
    <div class="container mx-auto grid gap-12 px-4 md:grid-cols-2 lg:grid-cols-3">

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>

        <div x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl bg-[url('https://picsum.photos/1920/1080')] text-white">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-60% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Placeholder</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Placeholder</span>
            </div>
        </div>
    </div>
@endsection
