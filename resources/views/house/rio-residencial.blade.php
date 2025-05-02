@extends('layouts.app')

@section('hero')
    <div class="container mx-auto grid lg:grid-cols-2 gap-6 px-4 py-8">
        <div x-data="modelGallery([
            '{{asset("img/rio/1.jpg")}}',
            '{{asset("img/rio/2.webp")}}',
            '{{asset("img/rio/3.webp")}}',
            '{{asset("img/rio/4.webp")}}',
            '{{asset("img/rio/5.webp")}}',
            '{{asset("img/rio/6.webp")}}',
        ])" class="flex flex-col gap-2">

            <div class="relative">
                <i class="bx bxs-chevron-left bx-lg hover:scale-85 absolute left-0 top-1/2 -translate-y-1/2 cursor-pointer text-white/60 transition-transform md:left-4"
                    x-on:click="previousImage()"></i>
                <div class="md:h-140 h-80 w-full select-none rounded-2xl bg-cover bg-center bg-no-repeat"
                    x-bind:style="{ 'background-image': `url('${currentImage()}')` }" x-transition></div>
                <i class="bx bxs-chevron-right bx-lg hover:scale-85 absolute right-0 top-1/2 -translate-y-1/2 cursor-pointer text-white/60 transition-transform md:right-4"
                    x-on:click="nextImage()"></i>
            </div>
            <div class="flex justify-center gap-4">
                <template x-for="(image, index) in images.slice(0, maxPreviewImages)">
                    <img class="flex h-20 w-20 cursor-pointer select-none items-center justify-center rounded-2xl bg-cover bg-clip-content p-1 transition-transform hover:scale-105 hover:shadow-lg"
                        x-bind:src="image" x-bind:class="galleryIndex == index ? 'ring-2 ring-gray-200' : ''"
                        x-on:click="setImage(index)">
                </template>
                <div class="flex h-20 w-20 cursor-pointer select-none items-center justify-center rounded-2xl bg-gray-200 bg-clip-content p-1 transition-transform hover:scale-105 hover:shadow-lg"
                    x-bind:class="galleryIndex >= maxPreviewImages ? 'ring-2 ring-gray-200' : ''" x-on:click="toggleModal">
                    <p class="text-gray-400" x-text="`+${images.length - maxPreviewImages}`"></p>
                </div>
                <div x-show="showImagesModal" x-transition x-on:click="toggleModal"
                    class="w-vw pointer-events-auto fixed inset-0 z-50 flex min-h-dvh justify-center overflow-auto bg-black/80 p-4 py-4">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 max-w-9xl md:p-8 items-center justify-center gap-12">
                        <template x-for="(image, index) in images">
                            <img x-bind:src="image" x-on:click="setImage(index)"
                                class="w-full rounded-2xl bg-clip-content p-1 transition-transform hover:scale-105 hover:shadow-lg"
                                x-bind:class="{
                                    'ring-2 ring-gray-200': galleryIndex == index,
                                    'cursor-pointer': true
                                }">
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-10">
            <div class="flex items-center justify-between gap-2">
                <div class="flex flex-col gap-1">
                    <h1 class="text-headline-large font-[Raleway]">Se Vende Casa en Rio Residencial</h1>
                    <h2 class="text-label-large font-normal text-gray-400">Casa</h2>
                </div>
                <div class="flex items-center gap-1 text-gray-400">
                    <i class="bx bxs-heart text-4xl"></i>
                    <span>12</span>
                </div>
            </div>

            <h3 class="text-headline-medium font-normal">5,900,000</h3>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-body-large font-[Raleway]">Descripción</h1>
                </div>

                <p class="text-body-small text-gray-400">Se Vende Casa en Rio Residencial
                    $5,900,000 MXN – Casa en Venta en Fraccionamiento Río, Cancún
                    Ubicación: Casa Río Congo, Manzana 19 Lote 8

                    Terreno: 160 m²
                    Construcción: 225 m²

                    Características principales:

                    Planta Baja:
                    • Sala con doble altura
                    • Estancia comedor
                    • Cocina integral con isla cubierta de cuarzo Calacatta
                    • Medio baño
                    • Estudio
                    • Amplios ventanales de aluminio tipo europeo con cristal de 10 mm
                    • Cisterna
                    • Patio trasero muy amplio
                    • Terraza
                    • Área de servicio lateral
                    • Estacionamiento con espejo de agua

                    Primer Nivel:
                    • Recámara principal con baño completo, vestidor, aire acondicionado y terraza
                    • Recámara secundaria 1 con baño completo, clóset, aire acondicionado y terraza
                    • Recámara secundaria 2 con baño completo, clóset, aire acondicionado y terraza

                    Amenidades del fraccionamiento:
                    • Casa club
                    • Gimnasio
                    • Alberca
                    • Área infantil
                    • Cancha deportiva
                    • Seguridad 24/7</p>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-body-large font-[Raleway]">Características</h1>
                </div>

                <ul class="ml-4 grid grid-cols-2 gap-2 text-gray-400">
                    <li>2 Baños</li>
                    <li>3 Recamaras</li>
                    <li>2 Estacionamientos</li>
                    <li>Sala</li>
                    <li>Comedor</li>
                    <li>Patio</li>
                    <li>Alberca</li>
                    <li>Gimnasio</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('body')
@endsection
