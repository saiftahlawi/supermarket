@extends('product.layout.layout')
@section('content')
<div class=" container">
<div class="container" style="padding-top: 10%;">

    <div class="card "   >

        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

</div>



<form style="padding-top: 2%;" action="{{ route('products.store') }}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="Name" class="form-label">Name</label>
      <input type="text" name="product_name" class="form-control" id="Name" >

    </div>

    <div class="mb-3">
      <label for="Price" class="form-label">Price</label>
      <input type="text" name="price" class="form-control" id="Price" >

    </div>

    <div class="mb-3">
      <label for="Detals" class="form-label">Detals</label>
      <textarea class="form-control"  name="detals" id="Detals" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
@endsection
