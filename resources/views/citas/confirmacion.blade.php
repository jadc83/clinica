<x-app-layout>
    <p>Soy la pagina de confirmacion de datos de la cita</p>
    <p>
        {{ucfirst(Carbon\Carbon::parse($dia)->translatedFormat('l'))}} a las {{$hora}} del
        {{Carbon\Carbon::parse($dia)->format('d')}} de {{Carbon\Carbon::parse($dia)->translatedFormat('F')}}
        de {{Carbon\Carbon::parse($dia)->format('Y')}}
    </p>
</x-app-layout>