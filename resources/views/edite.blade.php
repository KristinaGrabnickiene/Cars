@extends("layouts.app")


@section('content')


<div class="container">
<form method="post" action= '{{ route("cars.update", $cars->id) }}'>

 <input type="hidden" name ="userId" value='
 {{ ($cars) ? $cars["id"]: "" }}'>
 {{ csrf_field()}}

 <h1> Redaguojamas komentaras : {{ $cars->id }}</h1> 
<table class="table table-striped table-light">
    <tr>
    <td>  Mašinos gamintojas:  </td>
    <td> <input type="text" name="brand"
   value = '{{ ($cars) ? $cars["brand"]: "" }}'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos modelis: </td>
    <td> <input type="text" name="model"
    value = '{{ ($cars) ? $cars["model"]: "" }}'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos registracijos nr: </td>
    <td> <input type="text" name="reg_number"    
    value = '{{ ($cars) ? $cars["reg_number"]: "" }}'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos paveiklsiukas: </td>
    <td> <input type="text" name="jpg"    
    value = '{{ ($cars) ? $cars["jpg"]: "" }}'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos savininkas: </td>
    <td> <input type="text" name="owner_id"    
    value = '{{ ($cars) ? $cars["owner_id"]: "" }}'
    > </td>
    </tr>
    <tr>
   
    <td> <input type="submit" name="submit" value="Atnaujinti"> </td>
    
    </tr>
</table>
</form>

</div>
@endsection