@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

             
@section('content')

<div class="py-12">

    <center>
        <h1 style="font-size: 200%">Customers</h1>
    </center>
</div>

<div>
   
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('customer.create') }}"> Create</a>
            </div>
        </div>
    </div>
</div>

<table class="table table-bordered" >
<tr>
    <th>No</th>
    <th>referral_id</th>
    <th>address</th>
    <th>kelurahan</th>  
    <th>kecamatan</th>
    <th>kota</th>
    <th>provinsi</th>
    <th>kode_pos</th>
    <th>latitude</th>
    <th>longitude</th>
    <th>no_rekening</th>
    <th>buku_rekening</th>
    <th>point</th>
    <th>default_address</th>
    <th>Action</th>
</tr>


@foreach ($customers as $customer)

<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $customer->referral_id }}</td>
    <td>{{ $customer->address }}</td>
    <td>{{ $customer->kelurahan }}</td>
    <td>{{ $customer->kecamatan }}</td>
    <td>{{ $customer->kota }}</td>
    <td>{{ $customer->provinsi }}</td>
    <td>{{ $customer->kode_pos }}</td>
    <td>{{ $customer->latitude }}</td>
    <td>{{ $customer->longitude }}</td>
    <td>{{ $customer->no_rekening }}</td>
    <td>{{ $customer->buku_rekening }}</td>
    <td>{{ $customer->point }}</td>
    <td>{{ $customer->default_address }}</td>
    <td>
        <form action="{{ route('customer.destroy',$customer->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
   
            <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}"><i class="fas fa-edit"></i></a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </form>
    </td>
</tr>

@endforeach

{{!! $customers->links() !!}}
</table>


</div>
@endsection
            </div>
        </div>
    </div>
</div>
@endsection
