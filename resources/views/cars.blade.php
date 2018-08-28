@extends("layouts.app")


@section('content')
<div class="container">
    <table class="table table-striped table-dark">
    <th scope="col"> <h1> Mašinos modelis </h1></th>
    <th scope="col"> <h1>Savininkai</h1> </th> 
    <th scope="col"> </th> 
    
	<!-- Einame per visa naujienu masyva gauta is newsController -->
	@foreach($cars as $carsItem)
    <tr scope="row">
		<td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $carsItem->brand }} {{ $carsItem->model }}
			
        </td>
        <td>
			<!-- Kreipimasis i route'a su parametrais -->
				<a href="{{ route('cars.show', $carsItem->id) }}"> 
                
                << Visa info apie
               </a>
		
        </td>
        <td>
				<a href="{{ route('cars.edit', $carsItem->id) }}"> <button  type="button" class="btn btn-secondary">
                
                 Taisyti </button>
				</a>
               
                <button  type="button" class="btn btn-danger"> 
                
                 Istrinti </button>
				</a>
		
        </td>
	</tr>
	@endforeach

    
</table>
@endsection