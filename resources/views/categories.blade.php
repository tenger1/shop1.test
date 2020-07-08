@foreach(App\Categories::all() as $category)

<style>
    .cat_c{
        color: #520a01;
    }
</style>
	<p>
	<a class= "cat_c" href="/categories/{{$category->id}}">
		{{$category->id}}. {{$category->name}}
		</a>
		
	</p>
@endforeach