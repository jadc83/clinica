<x-app-layout>

    <h1>Dia de la cita {{ $dia }}</h1>

    <p>Seleccione la hora de la cita:</p>
    <div class="flex flex-col">

        @foreach ($horarios as $hora)
            <form action="" method="post" class="mb-2">
                <p>{{ $hora }}</p>
            </form>
        @endforeach
    </div>
</x-app-layout>
