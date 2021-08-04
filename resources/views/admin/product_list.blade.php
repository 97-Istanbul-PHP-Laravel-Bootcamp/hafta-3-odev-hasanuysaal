@extends('admin.index')

@section('MainPageTitle', 'Ürün Listeleme')

@section('PageTitle', 'Ürün Listeleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Status</th>
                <th>Category</th>
                <th>Unicode</th>
                <th>Url</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Cid</th>
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
                    <td>{{$rs->category_id}}</td>
                    <td>{{$rs->unicode}}</td>
                    <td>{{$rs->slug}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->price}}</td>
                    <td>{{$rs->cid}}</td>
                    <td>{{$rs->created_at}}</td>
                    <td>{{$rs->updated_at}}</td>
                    <td><a href="{{ route('admin.product.edit', $rs) }}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                            <i class="fas fa-fw fa-cog"></i>
                        </a></td>
                    <td><a href="{{ route('admin.product.delete', $rs->id) }}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


