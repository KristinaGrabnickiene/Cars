@extends("layouts.app")


@section('content')


<div class="container">
<form method="post" action= '{{ route("update") }}'>
{{ csrf_field()}}
 <input type="hidden" name ="userId" value='
 {{ ($cars) ? $cars["id"]: "" }}'>

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
   
    <td> <input type="submit" name="submit" value="Taisyti"> </td>
    
    </tr>
</table>
</form>

</div>
@endsection