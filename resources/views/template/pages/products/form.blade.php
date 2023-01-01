@extends('template.master')

@section('content')
<h1 class="text-center p-2">Add Product form</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-secondary text-white py-2">
            <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="product_name" class="mb-2">Product Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Plase Enter product name" id="product_name">
            </div>
            <div class="form-group mb-2">
            <label for="pro_war" class="mb-2">Product Warenty</label>
            <input type="text" class="form-control" name="product_warenty" placeholder="Plase Enter Product Warenty" id="pro_war">
            </div>
            <div class="form-group mb-2">
            <label for="stock_status" class="mb-2">Stock Status</label>
            <input type="text" class="form-control" name="stock_status" placeholder="stock_status" id="stock_status">
            </div>
            <div class="form-group mb-2">
            <label for="image" class="mb-2">Image</label>
            <input type="file" class="form-control" name="image" placeholder="" id="image">
            </div>


            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection