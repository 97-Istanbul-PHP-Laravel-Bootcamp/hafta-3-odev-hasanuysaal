@section('MainPageTitle', 'Kullanıcı Listeleme')

@section('PageTitle', 'Kullanıcı Listeleme')


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
                    <td>roles</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@include('admin.index')
