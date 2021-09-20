@extends("layouts.layout")


@section("content")


<h1>{{ $heading }}:</h1>


<p>
Hello, {{$name}}!
</p>




<table>
	<tr>
		<th>Index</th>
		<th>Name</th>
		<th>Price</th>
		<th>Link</th>
	</tr>






@foreach($products as $key=>$product)

<tr> <th>{{ $key }}</th> 
	<td>{{ $product->name }} </td> 
<td>${{$product->price}}</td>
<td><a href="/products/{{$product->id}}">/products/{{$product->id}}</a></td>

@endforeach

</table>





@if($just_a_number>1)
	<p>Blade just_a_number is more than 1</p>
@elseif($just_a_number<1)
	<p>Blade just_a_number is less than 1</p>
@else
	<p>Blade just_a_number is equal to 1</p>
@endif


<p>

@php
	echo "This is php using Blade";
@endphp
</p>








<div>

<?php


if ($just_a_number>1) 
{echo "php just_a_number is more than 1";}
elseif($just_a_number<1)
{echo "php just_a_number is less than 1";}
else
{echo "php just_a_number is equal to 1";}

echo "<div>Hi</div>";
echo $heading;
?>

</div>



@endsection
