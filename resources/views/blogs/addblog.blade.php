<x-layout>
<form method="post" action="/addblog">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Naziv bloga</label>
  <input type="text" name="naziv" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Text</label>
  <textarea class="form-control" name="opis" id="exampleFormControlTextarea1" rows="10"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout>