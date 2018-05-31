@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Supplier Master</h2>

    <form action="{{action('PostsController@store')}}" method="POST">
        {{ csrf_field() }}
            
        <div class="form-group">
            <label>Title</label>
            <input type="text" id="title" name="title" class="form-control"/>
        </div>
   
    </form>
</div>

@endsection