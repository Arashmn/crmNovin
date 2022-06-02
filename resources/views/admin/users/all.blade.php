@extends('admin.layouts.master')
@section('title', __('public.title.title user'))
@section('vendor-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('content')

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">جلسه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>مجموع کاربران</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران ویژه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>تحلیل هفته اخیر </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران فعال</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>تحلیل هفته اخیر</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران در انتظار</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>تحلیل هفته اخیر</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title">@lang('table.Dadatable.search filter')</h5>
            <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top" id="getUsers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('table.Dadatable.users.name')</th>
                        <th>@lang('table.Dadatable.users.email')</th>
                        <th>@lang('table.Dadatable.users.phone Number')</th>
                        <th>@lang('table.Dadatable.users.national Code')</th>
                        <th>@lang('table.Dadatable.users.roles')</th>
                        <th>@lang('table.Dadatable.users.actions')</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
    </div>
@endsection
@section('vendor-js')
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
@endsection

@section('page-js')

<!-- DataTable-->
<script>
    $(function() {
        var table = $('#getUsers').DataTable({
            "oLanguage": {
                "sUrl": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Persian.json"
            },
            "aoColumnDefs": [{
                "bSearchable": false,
                "aTargets": [5]
            }],
            pageLength: 10,
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "/",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'full_name',
                    name: 'full_name'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'organization',
                    name: 'organization'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ],
        });
        //filter hospital select option
        $('#hospital_filter').change(function() {
            table.column($(this).data('column')).search($(this).val()).draw();
        });
        //filter role select option
        $('#role_filter').change(function() {
            table.column($(this).data('column')).search($(this).val()).draw();
        });
    });
</script>


@endsection

