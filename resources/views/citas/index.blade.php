<x-app-layout>
    <div class="grid grid-cols-7 gap-1">
        @foreach ($mes as $dia)

            @if ($dia->format('l') != 'Saturday' && $dia->format('l') != 'Sunday')
                <div class="border border-gray-300 p-2 text-center">
                    {{ $dia->format('d/m/Y') }}
                </div>
            @endif

        @endforeach
    </div>
</x-app-layout>
