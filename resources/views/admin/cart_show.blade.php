@extends('admin.index')

@section('MainPageTitle', 'Sipariş Görüntüleme')

@section('PageTitle', 'Sipariş Görüntüleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Product</th>
                <th>Total</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->fname }} {{ $user->lname }}</td>
                <td>{{ $user->mpno }}</td>
                <td>{{ $user->email }}</td>
                <td>Adres</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $order->sale_date }}</td>
                <td>status</td>
                <td><a href="" class="btn btn-info btn-circle"><i class="fas fa-fw fa-edit"></i></a></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection

