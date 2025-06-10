<x-layout>
    <x-slot:title>
        {{ $country->name }}
    </x-slot:title>
    
    <h1>Valsts: {{ $country->name }}</h1>
    <p>Izmērs: {{ $country->area_km2 }}km</p>  
    <p>Populācija: {{ $country->population }}</p>

    <a href="/edit/{{ $country->id }}">Rediģēt</a>

    <form method="POST" action="/delete/{{ $country->id }}">
        @csrf
        @method('delete')

        <button>Dzēst</button>
    </form>
</x-latout>