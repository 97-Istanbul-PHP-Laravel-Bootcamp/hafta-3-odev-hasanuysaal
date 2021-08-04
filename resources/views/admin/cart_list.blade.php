@extends('admin.index')

@section('MainPageTitle', 'Sipariş Listeleme')

@section('PageTitle', 'Sipariş Listeleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Order Id</th>
                <th>Product</th>
                <th>Sale Code</th>
                <th>Price</th>
                <th>Cid</th>
                <th>Sale Date</th>
                <th>Updated at</th>
                <th>Created at</th>
                <th>Show</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
            <tr>
                <td>{{ $rs->user_id }}</td>
                <td>{{ $rs->orid }}</td>
                <td>{{ $rs->product_id }}</td>
                <td>{{ $rs->code }}</td>
                <td>{{ $rs->price }}</td>
                <td>{{ $rs->cid }}</td>
                <td>{{ $rs->sale_date }}</td>
                <td>{{ $rs->update_at }}</td>
                <td>{{ $rs->created_at }}</td>
                <td><a href="{{route('admin.cart.show', $rs->id)}}" class="btn btn-info btn-circle"><i class="fas fa-fw fa-cog"></i></a></td>
                <td><a href="" class="btn btn-info btn-circle"><i class="fas fa-fw fa-edit"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


