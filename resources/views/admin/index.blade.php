@include('admin._sidebar')

@include('admin._navbar')
<div class="card shadow mb-4" style="margin:10px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">@yield('PageTitle')</h6>
    </div>
    <div class="card-body">
        @yield('content')
    </div>
</div>


@include('admin._footer')
