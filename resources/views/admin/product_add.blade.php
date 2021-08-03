@extends('admin.index')

@section('MainPageTitle', 'Ürün Düzenleme')

@section('PageTitle', 'Ürün Düzenleme')

@section('content')

    <form class="user" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-lg-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Category</label>
                    </div>
                    <div class="col-lg-10">
                        <select class="custom-select" name="category_id">
                            <option value="0">Category 1</option>
                            <option value="0">Category 2</option>
                            <option value="0">Category 3</option>
                            <option value="0">Category 4</option>
                            <option value="0">Category 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Unicode</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" value="0" name="unicode">
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
                <div class="row">
                    <div class="col-lg-2">
                        <label>Price</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" value="0" name="price">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Cid</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" value="0" name="cid">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                        Add Product
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection

