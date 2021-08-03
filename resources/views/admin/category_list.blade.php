@extends('admin.index')

@section('MainPageTitle', 'Kategori Listeleme')

@section('PageTitle', 'Kategori Listeleme')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Url</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>title</td>
                    <td>desc</td>
                    <td>url</td>
                    <td>status</td>
                    <td>crupdate</td>
                    <td>update</td>
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
