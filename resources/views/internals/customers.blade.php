@extends('layout')
@section('content')
    <form action="customers" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="name">
        </div>
        <button type="submit">add name</button>

        @csrf      

    </form>
    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>    
@endsection
