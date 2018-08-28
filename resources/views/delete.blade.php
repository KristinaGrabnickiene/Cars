@extends('layouts.app')

@section('content')
<div class="container">

	<a href="{{ route('cars.index') }}"><< Grįžti atgal</a>
	
    <br>
    <br>
    <div class="container">
    
    <h5>  Šis įrašas ištrintas sėkmingai: </h5>

{{$cars->brand}}  {{$cars->model}}  {{$cars->reg_number}}
    </div>
        
</div>
@endsection