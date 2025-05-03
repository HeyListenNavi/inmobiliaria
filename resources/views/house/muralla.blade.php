@extends('layouts.app')

@section('hero')
    <div class="container mx-auto grid lg:grid-cols-2 gap-6 px-4 py-8">
        <div x-data="modelGallery([
            '{{asset("img/muralla/1.jpg")}}',
            '{{asset("img/muralla/2.jpg")}}',
            '{{asset("img/muralla/3.jpg")}}',
            '{{asset("img/muralla/4.jpg")}}',
            '{{asset("img/muralla/5.jpg")}}',
            '{{asset("img/muralla/6.webp")}}',
            '{{asset("img/muralla/7.webp")}}',
            '{{asset("img/muralla/8.webp")}}',
            '{{asset("img/muralla/9.jpg")}}',
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
                    <h1 class="text-headline-large font-[Raleway]">Renta Casa en San Pedro Garza Garcia, La Muralla</h1>
                    <h2 class="text-label-large font-normal text-gray-400">Casa</h2>
                </div>
                <div class="flex items-center gap-1 text-gray-400">
                    <i class="bx bxs-heart text-4xl"></i>
                    <span>12</span>
                </div>
            </div>

            <h3 class="text-headline-medium font-normal">$70,000.00</h3>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-body-large font-[Raleway]">Descripción</h1>
                </div>

                <p class="text-body-small text-gray-400">RENTA: $70,000 con mantenimiento
                    TERRENO: 275m2 CONSTRUCCION: 350m2
                    Se renta espaciosa casa en Valle Oriente, San Pedro Garza García, dentro del exclusivo Residencial La Muralla. Disfruta de una ubicación privilegiada frente al Parque Rufino Tamayo, a un paso del Hospital Zambrano y rodeado de áreas comerciales y colegios de prestigio, con fácil acceso a la avenida Lázaro Cárdenas. El fraccionamiento ofrece seguridad las 24 horas, acceso controlado con QR, juegos infantiles y una cancha de usos múltiples.
                    La residencia de dos plantas cuenta con tres recámaras en la planta alta, cada una con baño propio. La recámara principal y una secundaria disponen de vestidor, mientras que la tercera recámara cuenta con clóset. También encontrarás una sala de TV y un área de estudio en la planta alta. En la planta baja, un amplio estudio que puede funcionar como family room, una sala con acceso al jardín (con piso), comedor, cocina con espacio para desayunador, medio baño de visitas, escalera con área de doble altura, domo que aporta gran iluminación y una hermosa fuente. Además, cuenta con estacionamiento para dos autos y espacio para dos autos más frente a la casa, área de lavandería con lavadora y secadora instalada y cuarto de servicio con baño completo.
                    La casa está equipada con tres climas centrales (uno en planta baja y dos en planta alta), 16 paneles solares, dos boilers, cisterna con bomba, fuente y ventiladores de techo en cada recámara.</p>
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
