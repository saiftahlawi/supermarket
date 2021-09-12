@extends('product.layout.layout')

@section('content')

<div class="jumbotron container" style="background-color: rgba(169, 169, 169, 0.5); padding:5rem">



    <p>Trashed Products.</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Home</a>
  </div>

<div class="container">

  @php
   $i=0;
  @endphp
    <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Detals</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{$item->product_name  }}</td>
                <td>{{$item->price  }} JOD</td>
                <td style="width: 40%">{{$item->detals }}</td>
                <td>
                  <div class="row">


                    <div class="col-sm">
                      <a class="btn btn-danger" href="{{route('delete.from.db',$item->id)}}">Delete</a>
                    </div>


                    <div class="col-sm">
                      <a class="btn btn-primary" href="{{route('product.back.trash',$item->id)}}">Back</a>
                    </div>


                  </div>




                </td>
              </tr>

            @endforeach



        </tbody>
      </table>
{!! $products->links() !!}
</div>
@endsection
