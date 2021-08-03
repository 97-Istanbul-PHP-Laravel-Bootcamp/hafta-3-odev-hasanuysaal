@extends('admin.index')

@section('MainPageTitle', 'Kullanıcı Listeleme')

@section('PageTitle', 'Kullanıcı Listeleme')


@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>username</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>fname</td>
                    <td>lname</td>
                    <td>status</td>
                    <td>Created at</td>
                    <td>Updated at</td>
                    <td><a href="" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                            <i class="fas fa-fw fa-cog"></i>
                        </a></td>
                    <td><a href="" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

