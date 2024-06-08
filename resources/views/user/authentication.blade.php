<x-layout>
    <form method="post" action="/login">
        @csrf

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</x-layout>