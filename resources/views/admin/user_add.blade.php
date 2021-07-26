@section('MainPageTitle', 'Kullanıcı Düzenleme')

@section('PageTitle', 'Kullanıcı Düzenleme')


@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Roles</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>id</td>
                <td>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" height="40px" width="40px" style="border-radius: 10px;" alt="">
                </td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>address</td>
                <td>roles
                    <a href="" onclick="return  !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                        <i class="fas fa-fw fa-plus"></i>
                    </a>
                </td>
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

@include('admin.index')
