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
            <tr>
                <td>userid</td>
                <td>orid</td>
                <td>product</td>
                <td>salecode</td>
                <td>price</td>
                <td>cid</td>
                <td>sale date</td>
                <td>update</td>
                <td>crdate</td>
                <td><a href="{{route('admin.cart.show',['id' => $id])}}" class="btn btn-info btn-circle"><i class="fas fa-fw fa-cog"></i></a></td>
                <td><a href="" class="btn btn-info btn-circle"><i class="fas fa-fw fa-edit"></i></a></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection


