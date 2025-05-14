<x-app-layout>
    <div class="grid grid-cols-7 gap-1">
        @foreach ($fechas as $fecha)

                <div class="border border-gray-300 p-2 text-center">
                    <a href="{{route('citas.horas', $fecha)}}">
                        {{ $fecha }}
                    </a>
                </div>



        @endforeach
    </div>
</x-app-layout>
