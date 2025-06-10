<x-layout>
    <x-slot:title>
        Valsts saraksts
    </x-slot:title>
    
    <h1>Saraksts</h1>
    <div>
      @foreach($cuntry as $c)
        <div>
          <p>{{ $c->name }}</p>
          <a href="/show/{{ $c->id }}">Detaļas</a>
        </div>
      @endforeach
    </div>
    
</x-latout>