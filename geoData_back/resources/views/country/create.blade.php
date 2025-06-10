<x-layout>
  <x-slot:title>
      Valsts pievienošana
  </x-slot:title>

  <h1>Valsts pievienošana</h1>
  <form class="create" action="/list" method="POST">
    @csrf

    <p>Nosaukums:</p>
    <input type="text" name="name" placeholder="Valst nosaukums šeit" required />
      @error("name")
          <p>{{ $message }}</p>
      @enderror
    
    <p>Izmērs:</p>
    <input type="number" name="area_km2" placeholder="Valsts izmērs šeit" required />
      @error("area_km2")
          <p>{{ $message }}</p>
      @enderror

    <p>Populācija:</p>
    <input type="number" name="population" placeholder="Valsts iedzīvotāju skaits" required />
      @error("population")
          <p>{{ $message }}</p>
      @enderror

    <button>Saglabāt</button> 
  </form>

</x-latout>