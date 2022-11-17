<center>
<h1>My Cart</h1>
<table style="text-align: center;">
    <thead>
         <th># </th>
         <th>Cake Info</th>
         <th>Cake Image</th>
         <th>Price</th>
         <th>Buy Now</th>
         <th>Delete</th>
    </thead>
    <tbody>
        @php
                $i=1;
        @endphp
    @foreach($items as $item)
     <tr>
       <td>{{$i}}</td>
       <td>{{$item->name}}</td>
       <td><img src="{{$item->image}}" alt=""style="height:100px; width:100px;"></td>
       <td><b>{{$item->cost}}</b></td>
       
       <td>
       <a href="{{url('buy-now/'.$item->cake_id.'/'.$item->cart_id)}}">
           <button class="btn btn-success"style="border-radius: 12px;">Buy Now</button>
           </a>
        </td>
      
       <td>
           <form action="{{url('delete-item')}}" method="POST">
               @method('DELETE')
               @csrf
               <input type="hidden" name="cart_id" value="{{$item->id}}">
       <button type="submit" class="btn btn-danger" style="border-radius: 12px;background-color: red;">Delete</button>
</form>
    </td>
     </tr>
     @php
       $i++;
     @endphp
     @endforeach
    </tbody>
</table>
</center>