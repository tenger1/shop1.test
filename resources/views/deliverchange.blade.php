@extends('layouts.main')

@section('content')  

<div class="content mx-3">
    <h1 style="text-align: center;">Mainīt <b>{{$order['0']['order_id']}}</b>. pasūtījuma datus</h1>
<form action="/deliverchange_final/">
  <div class="form-group">
    <label for="vards">Vārds</label>
    <input type="text" class="form-control" id="vards" name="vards" value="{{$order['0']['customer_name']}}">
    <input style="display: none;" type="radio" name="order_id" id="order_id" value="{{$order['0']['order_id']}}" checked>
  </div>
  <div class="form-group">
    <label for="adrese">Adrese</label>
    <input type="text" class="form-control" id="adrese" name="adrese" value="{{$order['0']['adress']}}">
  </div>
    <div class="form-group">
    <label for="telefons">Telefons</label>
    <input type="text" class="form-control" id="telefons" name="telefons" value="{{$order['0']['phone']}}">
  </div>
  <div class="form-group">
    <label for="daudzums">Daudzums</label>
    <input type="text" class="form-control" id="daudzums" name="daudzums" value="{{$order['0']['countf']}}">
  </div>
   <button type="submit" class="btn btn-warning">Change</button>
</form>

</div>
@endsection