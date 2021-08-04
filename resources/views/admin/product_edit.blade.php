@extends('admin.index')

@section('MainPageTitle', 'Ürün Ekleme')

@section('PageTitle', 'Ürün Ekleme')

@section('content')

    <form class="user" action="{{ route('admin.product.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group col-lg-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Category</label>
                    </div>
                    <div class="col-lg-10">
                        <select class="custom-select" name="category_id">
                            {{ $datalist = \App\Models\Categories::where('status', '<>', 't')->get() }}
                            @foreach($datalist as $rs)
                                <option @if($rs->id == $data->category_id) selected @endif value="{{ $rs->id }}">{{ $rs->title }}</option>
                            @endforeach
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
                        <input type="number" class="form-control" name="unicode" value="{{ $data->unicode }}">
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
                        <label>Status</label>
                    </div>
                    <div class="col-lg-10">
                        <select class="custom-select" name="status" >
                            <option @if($data->status == 'a') selected @endif >a</option>
                            <option @if($data->status == 'p') selected @endif >p</option>
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
                        <input type="number" class="form-control"  name="price" value="{{ $data->price }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Cid</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control"  name="cid" value="{{ $data->cid }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Stock</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="stock" value="{{ $data->stock }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                        Update Product
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection

