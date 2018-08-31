@extends("layouts.app")


@section('content')


<div class="container">
<h1> Viso savininkų yra: {{ $owners->count() }} </h1>

 <a href="{{ route('owners.create')}}"><button  type="button" class="btn btn-dark btn-lg"> 
                
                 Sukurti naują </button>
				</a>
                <br>
                <br>
    <table class="table table-striped table-dark">
    <th scope="col-3"> <h1> Vardas </h1></th>
    <th scope="col"> <h1>Pavardė </h1> </th> 
    <th scope="col"> <h1>Mašinos modelis </h1></th> 
    <th scope="col"><h1>Tel numeris </h1></th> 
    <th scope="col"></th> 
    <th scope="col"></th> 
    
	<!-- Einame per visa masinu masyva gauta is OwnersController -->
	@foreach($owners as $oneOwner)
    <tr scope="row">
		<td>{{ $oneOwner->name }} </td>
        <td> {{ $oneOwner->surname }} </td>
        <td> << tokia ( {{ $oneOwner->cars_id }} ) </td>
        <td> {{ $oneOwner->phone }} </td>
        
       
        <td>
				<a href="{{ route('owners.edit', $oneOwner->id)}}"> <button  type="button" class="btn btn-secondary">
                
                 Taisyti </button>
				</a>
              
		
        </td>
        <td>  
         <form action="{{ route('owners.delete', $oneOwner->id) }}" method="POST">
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