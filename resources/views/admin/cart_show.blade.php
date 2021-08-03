@extends('admin.index')

@section('MainPageTitle', 'Sipariş Görüntüleme')

@section('PageTitle', 'Sipariş Görüntüleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
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
                <td>{{$id}}</td>
                <td>user</td>
                <td>name</td>
                <td>phone</td>
                <td>email</td>
                <td>address</td>
                <th>Product</th>
                <td>total</td>
                <td>date</td>
                <td>status</td>
                <td><a href="" class="btn btn-info btn-circle"><i class="fas fa-fw fa-edit"></i></a></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection

