@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>
                <h1>My Orders</h1>
                @foreach($orders as $order)
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">$ {{ $item['price']}} </span>
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                            </li> 
                            @endforeach  
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: $ {{ $order->cart->totalPrice}}</strong>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
