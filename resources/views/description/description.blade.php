<x-layout>
    <h1>{{$description->opis}}</h1>
    @auth
    <a href="/editdescription" class="btn btn-primary">Edit</a>
    @endauth
</x-layout>