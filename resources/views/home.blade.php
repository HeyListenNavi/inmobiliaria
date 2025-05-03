@extends('layouts.app')

@section('hero')
    <div class="container mx-auto hidden snap-x items-center justify-center gap-8 overflow-y-auto py-4 md:flex">
        <img
            class="hidden h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400 lg:flex"
            src="{{asset("/img/galeria/6.jfif")}}"/>
        <img
            class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400"
            src="{{asset("/img/galeria/2.jfif")}}"/>
        <img
            class="flex h-[300px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400"
            src="{{asset("/img/galeria/4.jfif")}}"/>
        <img
            class="flex h-[250px] w-[240px] shrink-0 items-center justify-center rounded-2xl bg-gray-200 text-gray-400"
            src="{{asset("/img/galeria/5.jfif")}}"/>
        <img
            class="hidden h-[200px] w-[240px] shrink-0 snap-center items-center justify-center rounded-2xl bg-gray-200 text-gray-400 lg:flex"
            src="{{asset("/img/galeria/1.jfif")}}"/>
    </div>

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
    </div>
@endsection

@section('body')
    <div class="container mx-auto grid gap-12 px-4 md:grid-cols-2 lg:grid-cols-3">

        <a href="{{ route('americana') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/americana/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Loft en Renta Americana Nau Living Guadalajara</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Departamento Tipo Loft Americana Arcos Vallarta Renta Guadalajara muy cerca de la Minerva y Colonia Americana</span>
            </div>
        </a>

        <a href="{{ route('arboledas') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/arboledas/1.webp') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Amplia Casa Fracc. Arboledas</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Excelente ubicación, céntrico punto estratégico para ir a cualquier parte de la Ciudad</span>
            </div>
        </a>

        <a href="{{ route('chapalita') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/chapalita/Chapalita.jpeg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Chapalita Casa en Renta Guadalajara</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300"> La Casa tiene 3 Recamaras, estudio, sala comedor, y mucho mas</span>
            </div>
        </a>

        <a href="{{ route('cumbres') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/cumbres/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Departamento en Venta Altura Cumbres Cancun</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300"> Oportunidad Espectacular, departamento de 3 recamaras, 3 baños completos. Medio baño para visitas. Cuarto de servicio con baño completo. Cuarto de TV. Sala comedor y cocina</span>
            </div>
        </a>

        <a href="{{ route('providencia') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/providencia/Providencia-Departamento-1.jpeg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Providencia Departamento Remodelado</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">El edificio ubicado en la Avenida Rubén Darío cruce con Garibaldi</span>
            </div>
        </a>

        <a href="{{ route('rio') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/rio/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Casa en Rio Residencial</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Casa en Venta en Fraccionamiento Río, Cancún</span>
            </div>
        </a>

        <a href="{{ route('suchiate') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/suchiate/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Casa de Renta en Lomas del Valle</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Se renta hermosa casita de 2 recámaras y 2 niveles totalmente amueblada.</span>
            </div>
        </a>

        <a href="{{ route('muralla') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/muralla/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Renta Casa en San Pedro Garza Garcia, La Muralla</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">e renta espaciosa casa en Valle Oriente, San Pedro Garza García, dentro del exclusivo Residencial La Muralla.</span>
            </div>
        </a>

        <a href="{{ route('santander') }}" x-data="{ show: false }" x-on:mouseenter="show = true" x-on:mouseleave="show = false"
            class="bg-cover bg-center group min-h-[350px] rounded-2xl text-white" style="background-image: url({{ asset('img/santander/1.jpg') }})">
            <div
                class="flex h-full w-full flex-col items-start justify-end rounded-2xl bg-gradient-to-b from-transparent from-70% to-black px-4 py-8">
                <h1 class="text-body-large mb-4 font-[Raleway]">Casa en Renta en San Pedro Garza García</h1>
                <span x-show="show" x-cloak x-collapse class="text-body-small text-gray-300">Cocina equipada Area social con alberca y asador Sótano con area para gimnasio, cine, bar y cuarto de visitas con baño completo.</span>
            </div>
        </a>
    </div>
@endsection
