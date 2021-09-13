


@if ($items)
@php
    $index =0;
@endphp
@foreach ($items as $key=>$item)



    <tr class="cartUpdateRow-{{$key}}">
        <td>
           
          
                <span> <button type="button" class="btn btn-sm btn-link btn-dark"> {{++$index}}</button> <button type="button" onclick="removeItem({{$key}})" class="btn btn-sm btn-link btn-danger"> <i class="fa fa-times"></i> </button> </span>
                {{--  <button type="button"  onclick="updateItem({{$key}})" class="btn btn-sm btn-link btn-success"> <i class="fa fa-check"></i> </button> --}}
 
        </td>
        <td><img src="{{$item->attributes->image}}" alt=""></td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>0%</td>
        <td>
            <input class="form-control quantity" onchange="updateItem({{$key}})"  name="quantity" type="number" min="1"  value="{{$item->quantity}}">
        </td>
        <td>{{$item->getPriceSum()}}</td>
    </tr>


@endforeach



@else

<tr>
    <td colspan="7">No product added</td>
</tr>


@endif

