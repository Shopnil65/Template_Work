@extends('template.master')

@section('content')
<a href="{{url('categorylist')}}" class="btn btn-info text-white">back</a>
<h1 class="text-center p-2">Add Category form</h1>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-lg-5">
            <form action="{{route('store.data')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="category">Category Name</label>
                <input type="text" class="form-control" name="category_name" placeholder="" id="category">
                </div>


                <div class="form-group text-center mt-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

