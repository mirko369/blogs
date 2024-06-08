<x-layout>
    <form method="post" action="/register">
        @csrf

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Pero123">
        </div>

        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        </div>

        <label for="inputPassword5" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</x-layout>