@extends('admin.index')

@section('MainPageTitle', 'Kullanıcı Listeleme')

@section('PageTitle', 'Kullanıcı Listeleme')


@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Status</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr>
                    <td>{!! $rs->statusR() !!}</td>
                    <td>{{ $rs->username }}</td>
                    <td>{{ $rs->email }}</td>
                    <td>{{ $rs->mpno }}</td>
                    <td>{{ $rs->fname }}</td>
                    <td>{{ $rs->lname }}</td>
                    <td>{{ $rs->created_at }}</td>
                    <td>{{ $rs->updated_at }}</td>
                    <td><a href="{{ route('admin.user.edit', $rs->id) }}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                            <i class="fas fa-fw fa-cog"></i>
                        </a></td>
                    <td><a href="{{ route('admin.user.delete', $rs->id) }}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

