@extends('admin.index')

@section('MainPageTitle', 'Kullanıcı Düzenleme')

@section('PageTitle', 'Kullanıcı Düzenleme')


@section('content')

    <form class="user" action="" method="post">
        @csrf
        <div class="form-group col-lg-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Username</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="username">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Password</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>E-Mail</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="mail" class="form-control" name="email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Phone</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="mpno">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>First Name</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="fname">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-2">
                        <label>Last Name</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="lname">
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
                        Add User
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection

