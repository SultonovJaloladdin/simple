@extends('layout')
@section('content')
    <form action="customers" method="POST" class="pb-5">
        <p>name</p>
        <div class="input-group">
            <input type="text" name="name">
            {{$errors->first('name')}}
        </div>
        <p>email</p>
        <div class="from-group">
            <input type="text" name="email">            
            {{$errors->first('email')}}
        </div>
        <div class="from-group">
            <p>Status</p>
            <select name="active" id="active" class="form-control">
                <option value="">Select customers stsus</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <br>
        <button class="pb+5" type="submit">add name</button>

        @csrf      

    </form>
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activecustomers as $activecustomer)
                    <li>{{ $activecustomer->name }} ({{ $activecustomer->email }})</li>
                @endforeach
            </ul>    
        </div>
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inactivecustomers as $inactivecustomer)
                    <li>{{ $inactivecustomer->name }} ({{ $inactivecustomer->email }})</li>
                @endforeach
            </ul>    
        </div>
    </div>
    
@endsection
