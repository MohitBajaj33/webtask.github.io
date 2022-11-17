<center>
<h1>Cake Details</h1>
<hr>


<img src="{{url($cake->image)}}" alt="" style="height:200px; width:200px;border:3px solid red;">

<p>
    
    <br/>
    <b>Cake Name : {{$cake->name}}</b>
</p>
<p>
    <b>Cake Details :{{$cake->description}} </b>
</p>
<p>
    <b>Cake Price : {{$cake->cost}}</b>
</p>



<p>
    <br/>
    <a href="{{url('add-to-cart/'.$cake->id)}}">
    <button class="btn btn" style="border-radius: 12px;background-color: red;">Add to Card</button>
    </a>
    <a href="{{url('buy-now/'.$cake->id)}}">
    <button class="btn btn" style="border-radius: 12px;background-color: red">Buy Now</button>
    </a>
</p>




<br>
<br>
</center>