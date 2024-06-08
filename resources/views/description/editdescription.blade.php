<x-layout>
<form method="post" action="/editdescription">
    @csrf
    @method("put")
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Edit description</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10">{{$description}}</textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout>
