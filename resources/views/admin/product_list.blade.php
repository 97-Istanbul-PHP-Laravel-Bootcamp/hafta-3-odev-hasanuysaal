@extends('admin.index')

@section('MainPageTitle', 'Ürün Listeleme')

@section('PageTitle', 'Ürün Listeleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Category</th>
                <th>Unicode</th>
                <th>Url</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Price</th>
                <th>Cid</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>category</td>
                    <td>unicode</td>
                    <td>url</td>
                    <td>title</td>
                    <td>description</td>
                    <td>Status</td>
                    <td>Price</td>
                    <td>Cid</td>
                    <td>created</td>
                    <td>updated</td>
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


