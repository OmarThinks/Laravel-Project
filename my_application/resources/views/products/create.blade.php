@extends("layouts/layout")

@section("content")

<h1>
{{$title}}:
</h1>



<div>

<form method="POST" action="/products">
<div>
	<label>Name:</label>
	<input type="text" name="name">
</div>
<div>
	<label>Description:</label>
	<textarea name="description"></textarea>
</div>
<div>
	<label>Price:</label>
	<input type="number" name="price" step="0.01"></input>
</div>


<input type="submit" value="Create">



</form>
	

</div>


@endsection