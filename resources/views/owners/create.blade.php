@extends("layouts.app")


@section('content')


<div class="container">
<form method="post" action= "{{ route('owners.store') }}">

 <input type="hidden" name ="userId" value=''>
 {{ csrf_field()}}
<table class="table table-striped table-light">
    <tr>
    <td>  Vartotojo vardas:  </td>
    <td> <input type="text" name="name"
   value = 'Kristina'
    > </td>
    </tr>

    <tr>
    <td>  Vartotojo pavardė: </td>
    <td> <input type="text" name="surname"
    value = 'Kazakevič'
    > </td>
    </tr>

    <tr>
    <td>  Telefono numeris: </td>
    <td> <input type="text" name="phone"    
    value = '8686 31605'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos tipas: </td>
    <td> <input type="text" name="cars_id"    
    value = '10'
    > </td>
    

    <tr>
   
    <td> <input type="submit" name="submit" value="Pridėti naują"> </td> <td> </td>
    </tr>
    
</table>
</form>

</div>
@endsection