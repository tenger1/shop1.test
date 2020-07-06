@extends('layouts.main')

@section('content')   
<style>
    .cat_o{
        margin-left: 50px;
    }
</style>



<div class="cat_o">
                <form action="/order_final/">
                    <div>
                        <p>Vārds:</p><input type="text" name="customer_name" class="form-control" />
                    </div>
                    <div>
                        <p>Telefona numurs:</p><input type="tel" name="phone" class="form-control" />
                    </div>
                    <div>
                        <p>Pilsēta:</p><input type="text" name="city" class="form-control" />
                    </div>
                    <div>
                        <p>Paskaidrojums:</p><textarea type="text" name="comment" class="form-control"></textarea>
                    </div>
                    <div>
                        <p>Ziedu daudzums:</p><input type="number" name="amount" class="form-control" />
                    </div>
                    
                    <input type="hidden" value="{{$goods_id}}" name="product_id" />
                    <input type="submit" value="Order" class="btn btn-success" />
		</form>
    
  
</div>	
@endsection