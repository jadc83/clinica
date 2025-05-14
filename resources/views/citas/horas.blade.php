<x-app-layout>

    <p>Seleccione la hora de la cita:</p>
    <div class="flex flex-col">
        <div class="flex">
            @foreach ($horarios as $hora)
            <form action="" method="post" class="mb-2">
                <a href="{{route('citas.confirmacion', [ $dia, $hora ] )}}">
                    <p class="ml-2 border border-gray-300 p-2 text-center">{{ $hora }}</p>
                </a>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>
