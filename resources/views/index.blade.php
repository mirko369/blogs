<x-layout>
@auth
<a class="btn btn-primary" href="/addblog">Dodaj novi blog</a>
@endauth
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Naziv</th>
          <th scope="col">Opis</th>
          @auth
          <th scope="col">Akcije</th>
          @endauth
        </tr>
      </thead>
      <tbody>
        @foreach($blogs as $key => $blog)
            <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$blog->naziv}}</td>
            <td>{{$blog->opis}}</td>
            @auth
            <td><a class="btn btn-primary"  href="/editblog/{{$blog->id}}">Uredi</a></td>
            <td>
              <form method="post" action="/deleteblog/{{$blog->id}}">
                @csrf
                @method("delete")
                <button class="btn btn-primary"  style="background-color: red;" type="submit">Izbrisi</button>
              </form>
            </td>
            @endauth
            </tr>
        @endforeach
      </tbody>
    </table>
</x-layout>