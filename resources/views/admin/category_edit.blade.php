@extends('admin.index')

@section('MainPageTitle', 'Kategori Düzenleme')

@section('PageTitle', 'Kategori Düzenleme')

@section('content')

    <form class="user" action="{{route('admin.category.update', $data->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-lg-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Title</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Description</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="description" value="{{ $data->description }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Url</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="slug" value="{{ $data->slug }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Status</label>
                    </div>
                    <div class="col-lg-10">
                        <select class="custom-select" name="status" >
                            <option @if ($data->status == 'a') selected @endif >a</option>
                            <option @if ($data->status == 'p') selected @endif >p</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                        Edit Category
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection

