@extends('layouts.app')
@section('content')
	<div class="row">
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
				<h1>Checkout</h1>
				<h4>Your Total: ${{ $total}}</h4>
				<div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}">
					{{ Session::has('error')}}
				</div>
				<form action="{{ route('checkout')}}" method="post" id="checkout-form">
					{{ csrf_field()}}
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-name">Card Holder Name</label>
								<input type="text" name="card-name" id="card-name" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-number">Credit Card Number</label>
								<input type="text" name="card-number" id="card-number" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-expiry-month">Expiration Month</label>
								<input type="text" name="card-expery-month" id="card-expiry-month" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-expiry-year">Expiration Year</label>
								<input type="text" name="card-expiry-year" id="card-expiry-year" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-cvc">CVC</label>
								<input type="text" name="card-cvc" id="card-cvc" class="form-control" required>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Buy Now</button>
				</form>
			</div>
		</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script src="{{ asset('js/checkout.js') }}"></script>
@endsection