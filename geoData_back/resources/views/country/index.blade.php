<x-layout>
    <x-slot:title>
        Valsts saraksts
    </x-slot:title>
    
    <h1>Saraksts</h1>
    <div>
      @foreach($cuntry as $c)
      <div>
        <a href="/show/{{ $c->id }}">{{ $c->name }}</a>
      </div>
      @endforeach
    </div>
    
</x-latout>