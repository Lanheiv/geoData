<x-layout>
    <x-slot:title>
        Rediģēšana
    </x-slot:title>

    <h1>Rediģēt: {{ $country->name }}</h1>

    <form method="POST" action="/list/{{ $country->id }}">
        @csrf
        @method('PUT')


        <p>Nosaukums:</p>
        <input type="text" name="name" placeholder="Valst nosaukums šeit" required value="{{ $country->name }}" />
            @error("name")
                <p>{{ $message }}</p>
            @enderror
        
        <p>Izmērs:</p>
        <input type="number" name="area_km2" placeholder="Valsts izmērs šeit" required value="{{ $country->area_km2 }}" />
            @error("area_km2")
                <p>{{ $message }}</p>
            @enderror

        <p>Populācija:</p>
        <input type="number" name="population" placeholder="Valsts iedzīvotāju skaits" required value="{{ $country->population }}" />
            @error("population")
                <p>{{ $message }}</p>
            @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>
