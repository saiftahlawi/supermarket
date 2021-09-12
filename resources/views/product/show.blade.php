@extends('product.layout.layout')
@section('content')
<div class=" container">
<div class="container" style="padding-top: 10%;">

    <div class="card "   >

        <div class="card-body">
          <span> <a href="{{route('products.index')}}">
                <p class="card-text">Back</p>
              </a>
            </span>
            <span>
            <a href="{{route('products.edit',$product->id)}}">
          <p class="card-text">Edit</p>
        </a>
    </span>
        </div>
      </div>

</div>

<br/>
     <br/>
<div>


    <div class="mb-3">
      <label for="Name" class="form-label">Product Name: {{$product->product_name }}</label>


    </div>

    <div class="mb-3">
      <label for="Price" class="form-label">Product Price: {{$product->price }} JOD</label>


    </div>

    <div class="mb-3">
      <label for="Detals" class="form-label">Product Detals: {!! $product->detals !!}</label>

    </div>

</div>
</div>
@endsection
