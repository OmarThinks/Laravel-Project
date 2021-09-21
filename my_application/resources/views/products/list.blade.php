@extends("layouts.app")


@section("content")






<h1>{{ $heading }}:</h1>




@if($logged_in)
<div>
	<a href="/products/create">Create a new Product</a>
</div>
@endif






<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Link</th>
	</tr>






@foreach($products as $key=>$product)

<tr> <th>{{ $product->id }}</th> 
	<td>{{ $product->name }} </td> 
<td>${{$product->price}}</td>
<td><a href="/products/{{$product->id}}">/products/{{$product->id}}</a></td>

@endforeach

</table>
















@endsection
