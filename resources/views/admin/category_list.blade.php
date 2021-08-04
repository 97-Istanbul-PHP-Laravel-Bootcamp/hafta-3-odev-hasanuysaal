@extends('admin.index')

@section('MainPageTitle', 'Kategori Listeleme')

@section('PageTitle', 'Kategori Listeleme')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Status</th>
                <th>Title</th>
                <th>Description</th>
                <th>Url</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr height="25px">
                    <td>{!! $rs->statusR() !!}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->slug}}</td>
                    <td>{{$rs->created_at}}</td>
                    <td>{{$rs->updated_at}}</td>
                    <td><a href="{{ route('admin.category.edit', $rs->id) }}" onclick="return confirm('Edit ! Are you sure?')" class="btn btn-info btn-circle">
                            <i class="fas fa-fw fa-cog"></i>
                        </a></td>
                    <td><a href="{{ route('admin.category.delete', $rs->id) }}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
