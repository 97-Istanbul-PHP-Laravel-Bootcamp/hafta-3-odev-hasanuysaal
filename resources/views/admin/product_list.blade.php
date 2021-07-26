@section('MainPageTitle', 'Ürün Listeleme')

@section('PageTitle', 'Ürün Listeleme')


@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Title</th>
                <th>Make</th>
                <th>Series</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Status</th>
                <th>Image</th>
                <th>Image Gallery</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>
                       parent name
                    </td>
                    <td>title</td>
                    <td>make</td>
                    <td>series</td>
                    <td>model</td>
                    <td>year</td>
                    <td>price</td>
                    <td>status</td>
                    <td>
                            <img src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" height="40px" alt="">

                    </td>
                    <td><a href="" onclick="return  !window.open(this.href,'','top=50 left=100 width=1100,height=700')" class="btn btn-info btn-circle" style="align-content: center;"><i class="fa fa-images" height="50px"></i></a></td>
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
