@extends('admin.index')

@section('MainPageTitle', 'Kategori Düzenleme')

@section('PageTitle', 'Kategori Düzenleme')

@section('content')

    <form class="user" action="" method="post">
        @csrf
        <div class="form-group col-lg-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Title</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Description</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="description">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Url</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="slug">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Status</label>
                    </div>
                    <div class="col-lg-10">
                        <select class="custom-select" name="status">
                            <option selected="selected">a</option>
                            <option>p</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                        Add Category
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection

