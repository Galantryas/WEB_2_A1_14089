@extends('base')
@section('content')
    <!-- Main Section -->
	<style>
		table, th, td {
		border: 1px solid grey;
		
	}
	th{
		padding-left : 15px;
	}
	h1{
		padding-bottom :30px;
	}
	</style>
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel customer</h1>
        </div>
        <!-- /.content -->
		<div>
			<table style="width:96%" align="center">
		  <tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Credit Card Number</th>
		  </tr>
		  @foreach($data as $i=>$value)
		  <tr>
			<td>{{$value->name}}</td>
			<td>{{$value->email}}</td>
			<td>{{$value->password}}</td>
			<td>{{$value->editCardNumber}}</td>

		  </tr>
		  @endforeach
		</table>
		</div>
    </section>
    <!-- /.main-section -->

@endsection