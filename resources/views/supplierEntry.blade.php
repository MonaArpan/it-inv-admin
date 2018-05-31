@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Supplier Master</h2>

    <form action="{{action('SupplierController@store')}}" method="POST">
        {{ csrf_field() }}
            
      		
        <div class="form-group">
            <label>Supplier Id:</label>
            <input type="text" id="suppid" name="supp1" class="form-control" required/>
        </div>

        <div class="form-group">
            <label>Supplier Name:</label>
            <input type="text" id="suppname" name="supp2" class="form-control" required="" />
        </div>

        <div class="form-group">
            <label>Address 1:</label>
           
            <textarea class="form-control" rows="5" id="add1"></textarea>
        </div>

        <div class="form-group">
            <label>Address 2:</label>
            <textarea class="form-control" rows="5" id="add2"></textarea>
        </div>

        
        <div class="form-group">
            <label>City:</label>
            <input type="text" id="city" name="ci" class="form-control"/>
        </div>

        
        <div class="form-group">
            <label>Pin:</label>
            <input type="text" id="pin" name="pins" class="form-control"/>
        </div>


        <div class="form-group">
            <label>Contact Person:</label>
            <input type="text" id="conper" name="conpers" class="form-control"/>
        </div>     

          <div class="form-group">
            <label>phone number:</label>
            <input type="text" id="phno" name="phone" class="form-control"/>
        </div>     

          <div class="form-group">
            <label>Email:</label>
            <input type="text" id="email" name="emails" class="form-control"/>
        </div>

        <div class="form-group">
            <input type="submit"  class="btn btn-success" value="submit">
        </div>            


   
    </form>
</div>

@endsection