@extends("layouts.app")


@section('content')

       

<div class="container">
<div class="col-md-8">
    @if (Session::has('status'))
         <div class="alert alert-info">{{ Session::get('status') }}</div>
    @endif
</div>
<h1> Viso yra: {{ $owners->count() }} </h1>

 <a href="{{ route('owners.create')}}"><button  type="button" class="btn btn-dark btn-lg"> 
                
                 Sukurti naują </button>
				</a>
                <br>
                <br>
        <div class="row">
            <div class="col-3">
                    Rikiuoti pagal :   
                    <a href="?sort=asc" > A -> Ž  </a> arba 
                    <a href="?sort=desc" > Ž -> A   </a>
                    </div>
            <div class="col-9">
                    Filtruoti pagal :   
                    <a href="?gender=Vyras" > Vyrus </a> arba
                    <a href="?gender=Moteris" > Moteris  </a> arba parodyti tik 
                    <a href="?name=Kristina" > Kristina  </a>
            </div>
        </div>
    <table class="table table-striped table-dark">
    <th scope="col-3"> <h1> Vardas </h1></th>
    <th scope="col"> <h1>Pavardė </h1> </th> 
    <th scope="col"> <h1>Mašinos modelis </h1></th> 
    <th scope="col"><h1>Tel numeris </h1></th>
    <th scope="col"><h1>Lytis</h1></th>  
    <th scope="col"></th> 
    <th scope="col"></th> 
    
	<!-- Einame per visa masinu masyva gauta is OwnersController -->
	@foreach($owners as $oneOwner)
    <tr scope="row">
		<td>{{ $oneOwner->name }} </td>
        <td> {{ $oneOwner->surname }} </td>
        <td> << tokia ( {{ $oneOwner->cars_id }} ) </td>
        <td> {{ $oneOwner->phone }} </td>
        <td> {{ $oneOwner->gender }} </td>
        
       
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

{{ $owners->links() }}



@endsection