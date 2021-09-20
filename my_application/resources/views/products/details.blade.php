@extends("layouts/layout")

@section("content")

<h1>
{{$title}}
</h1>

<div>

<p>

Id:
{{$product->id}}
</p>



<p>

Name:
{{$product->name}}
</p>



<p>

Description:
{{$product->description}}
</p>



<p>

Price:
{{$product->price}}
</p>




<div>
	<form method="POST">
	@csrf
	@method("DELETE")
		<input type="submit" value="Delete This Product">
	</form>
</div>









</div>

<div>

<a href="/products"> <-Products List</a>

</div>


@endsection