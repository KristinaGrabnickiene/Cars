@extends("layouts.app")


@section('content')
<div class="container">
<h1> Viso mašinų yra: {{ $cars->count() }} </h1>
 <a href="{{ route('cars.create') }}"><button  type="button" class="btn btn-dark btn-lg"> 
                
                 Sukurti naują mašinos įrašą </button>
				</a>
                <br>
                <br>
    <table class="table table-striped table-dark">
    <th scope="col-3"> <h1> Mašinos modelis </h1></th>
    <th scope="col"> <h1>Savininkai</h1> </th> 
    <th scope="col"> </th> 
    
	<!-- Einame per visa masinu masyva gauta is carsController -->
	@foreach($cars as $carsItem)
    <tr scope="row">
		<td>
			
				<!--  Spausdiname masinos pavadinima -->
				{{ $carsItem->brand }} {{ $carsItem->model }}
			
        </td>
        <td>
			<!-- Kreipimasis i route'a su parametrais -->
				<a href="{{ route('cars.show', $carsItem->id) }}"> 
                
                << savininkų duomenys {{ $carsItem->owners->count() }}
               </a>
		
        </td>
        <td>
				<a href="{{ route('cars.edit', $carsItem->id)}}"> <button  type="button" class="btn btn-secondary">
                
                 Taisyti </button>
				</a>
              
		
        </td>
        <td>  
         <form action="{{ route('cars.delete', $carsItem->id) }}" method="POST">
                            <!--  Su post metodu dirbant sau formom visada butina ideti sita laukeli  -->
                            {{ csrf_field() }}
                            <input
                            class="btn btn-danger"
                            type="submit" value="Trinti">
                        </form>
         </td>
	</tr>
	@endforeach

    
</table>
@endsection