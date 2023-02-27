@extends('layouts.admin.admin-master')
@section('title', 'List Users')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List users</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Avatar
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Total post
                            </th>
                            <th>
                                Status
                            </th>
                            <th colspan="2">
                                Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #1
                            </td>
                            <td class="py-1">
                                <img src="../../images/faces/face1.jpg" alt="image" />
                            </td>
                            <td>
                                Herman Beck
                            </td>
                            <td>
                                15
                            </td>
                            <td>
                                <label class="badge badge-success">Completed</label>
                            </td>
                            <td>
                                <a class="count-indicator btn btn-sm btn-warning btn-icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-pencil"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                                    <span class="dropdown-item py-3 text-center"><label class="badge badge-danger">Pending</label></span>
                                    <span class="dropdown-item py-3 text-center"><label class="badge badge-warning">In progress</label></span>
                                    <span class="dropdown-item py-3 text-center"><label class="badge badge-success">Completed</label></span>
                                </div>
                                <a href="" class="btn btn-sm btn-danger btn-icon"><i class="mdi mdi-archive"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection