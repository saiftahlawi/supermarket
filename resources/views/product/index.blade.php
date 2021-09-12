@extends('product.layout.layout')
<head>
    <title>Admin home</title>

</head>
@section('content')

<div class="jumbotron container" style="background-color: rgba(169, 169, 169, 0.5); padding:5rem">



    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create</a>
    <a class="btn btn-primary btn-lg" href="{{route('product.trash')}}" role="button">Trashed Product</a>
  </div>
  <div class="container" style="margin-top: 2rem;">
    @if ($message =Session::get('success'))
    <div class="alert alert-primary" role="alert">
      {{$message}}

       </div>
    @endif

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
                <td style="width:30rem">{{$item->detals }}</td>
                <td>
                  <div class="row" >
                    <div class="col-sm" >
                      <a class="btn btn-success" href="{{route('products.edit',$item->id)}}">Edit</a>
                    </div>

                    <div class="col-sm">
                      <a class="btn btn-primary" href="{{route('products.show',$item->id)}}">Show</a>
                    </div>

                    <div class="col-sm" style="width:38rem">
                      <a class="btn btn-primary" href="{{route('soft.delete',$item->id)}}" >soft Delete </a>
                    </div>

                    <div class="col-sm" style="width:54rem">

                      <form action="{{route('products.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete permanently </button>
                      </form>


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
