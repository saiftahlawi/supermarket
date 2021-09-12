@extends('product.layout.layout')
@section('content')
<div class=" container">
<div class="container" style="padding-top: 10%;">

    <div class="card ">

        <div class="card-body">
          <p class="card-text">Product Name: {{ $product->product_name }}</p>
        </div>
      </div>

</div>



<form style="padding-top: 2%;" action="{{ route('products.update',$product->id) }}" method="POST" >

  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="Name" class="form-label">Name</label>
      <input type="text" name="product_name" value="{{$product->product_name }}" class="form-control" id="Name" >

    </div>

    <div class="mb-3">
      <label for="Price" class="form-label">Price</label>
      <input type="text" name="price" value="{{$product->price }}" class="form-control" id="Price" >

    </div>

    <div class="mb-3">
      <label for="Detals" class="form-label">Detals</label>
      <textarea class="form-control"  name="detals"  id="Detals" rows="3">

        {!! $product->detals !!}
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
@endsection
