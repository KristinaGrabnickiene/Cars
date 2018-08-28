@extends("layouts.app")


@section('content')


<div class="container">
<form method="post" action= "{{ route('cars.store') }}">

 <input type="hidden" name ="userId" value=''>
 {{ csrf_field()}}
<table class="table table-striped table-light">
    <tr>
    <td>  Mašinos gamintojas:  </td>
    <td> <input type="text" name="brand"
   value = 'MERSEDES BENZ'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos modelis: </td>
    <td> <input type="text" name="model"
    value = 'A Class'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos registracijos nr: </td>
    <td> <input type="text" name="reg_number"    
    value = '123456'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos paveiklsiukas: </td>
    <td> <input type="text" name="jpg"    
    value = '//res.cloudinary.com/carsguide/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_low/v1/editorial/vhs/Mercedes-Benz-A-Class.png'
    > </td>
    </tr>

    <tr>
    <td>  Mašinos savininkas: </td>
    <td> <input type="text" name="owner_id"    
    value = '1'
    > </td>
    </tr>
    <tr>
   
    <td> <input type="submit" name="submit" value="Pridėti naują"> </td>
    
    </tr>
</table>
</form>

</div>
@endsection