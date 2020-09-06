@extends('backend.backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Order List</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Voucher No</th>
						<th>User</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; $total=0; @endphp
					@foreach($orders as $order)
					
					<tr>
						<td>{{$i++}}</td>
						<td>{{$order->voucherno}}MMK</td>
						<td>{{$order->user->name}}</td>
						<td>{{$order->total}}</td>
						<td><a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection