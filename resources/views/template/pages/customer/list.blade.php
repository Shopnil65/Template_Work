@extends('template.master')

@section('content')
<h1 class="text-center p-2">Add Customer form</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5 bg-secondary text-white py-2">
            <form action="{{route('')}}" method="post">
            @csrf
            <div class="form-group mb-2">
            <label for="customer_name" class="mb-2">Customer Name</label>
            <input type="text" class="form-control" name="customer_name" placeholder="Plase Enter Customer Name" id="customer_name">
            </div>         
            <div class="form-group text-center mt-2">
                <button class="btn btn-success">submit</button>
            </div>

            </form>
        </div>
    </div>
</div>


@endsection
