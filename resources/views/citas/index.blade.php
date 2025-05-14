<x-app-layout>
    <div class="grid grid-cols-7 gap-1">
        @foreach ($mes as $dia)
            @if (!in_array($dia->TranslatedFormat('l'), ['sábado', 'domingo']) )
                <div class="border border-gray-300 p-2 text-center">
                    <a href="{{route('citas.horas', $dia)}}">
                        {{ ucfirst($dia->TranslatedFormat('l')) }}  {{ $dia->translatedFormat('d/m/Y') }}
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</x-app-layout>
