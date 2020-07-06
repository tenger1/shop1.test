@foreach(App\Goods::all() as $good1)


<style>
    .cat_c{
        color: #520a01;
    }
</style>
	<p>
	
		Good: {{$good1->name}}
		
		
	</p>

@endforeach