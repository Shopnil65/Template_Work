@extends('template.master')

@section('content')

<h1 class="bg-info text-white text-center p-2">Product List</h1>
<a href="{{route('products.form')}}" class="btn btn-success mb-2">Add list</a>


<table class="table table-bordered">
<thead>
    <tr>
        <th>Product id</th>
        <th>Product Name</th>
        <th>Product Warenty</th>
        <th>Stock Status</th>
        <th>Action</th>
    </tr>
</thead>

@foreach($products as $key=>$viewdata)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$viewdata->product_name}}</td>
            <td>{{$viewdata-> product_warenty}}</td>
            <td>{{$viewdata->stock_status}}</td>
            <td>
                <a href="{{route('products.edit',$viewdata->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('products.delete',$viewdata->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach


</table>

@endsection