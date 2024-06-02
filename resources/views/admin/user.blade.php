@extends('layout.layout_admin')
@section('title', 'Admin')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <div style="display: flex; justify-content:space-between">
                <h5 class="card-title fw-semibold mb-4">This is Users Data</h5>
                <a href="/admin/user/create" class="btn btn-warning">Add Users</a>
            </div>
            <div class="table-responsive" data-simplebar>
                <table class="table text-nowrap align-middle table-custom mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="text-dark fw-normal ps-0">Name and Avatar
                            </th>
                            <th scope="col" class="text-dark fw-normal">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                    <img src="{{ asset('images/products/dash-prd-1.jpg') }}" alt="prd1" width="48"
                                        class="rounded" />
                                    <div>
                                        <h6 class="mb-0">Minecraf App</h6>
                                        <span>Jason Roy</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>user@example.com</span>
                            </td>
                            <td>
                                <a href="/admin/user/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                    <img src="{{ asset('images/products/dash-prd-2.jpg') }}" alt="prd1" width="48"
                                        class="rounded" />
                                    <div>
                                        <h6 class="mb-0">Web App Project</h6>
                                        <span>Mathew Flintoff</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>user@example.com</span>
                            </td>
                            <td>
                                <a href="/admin/user/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                    <img src="{{ asset('images/products/dash-prd-3.jpg') }}" alt="prd1" width="48"
                                        class="rounded" />
                                    <div>
                                        <h6 class="mb-0">Modernize Dashboard</h6>
                                        <span>Anil Kumar</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>user@example.com</span>
                            </td>
                            <td>
                                <a href="/admin/user/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                    <img src="{{ asset('images/products/dash-prd-4.jpg') }}" alt="prd1" width="48"
                                        class="rounded" />
                                    <div>
                                        <h6 class="mb-0">Dashboard Co</h6>
                                        <span>George Cruize</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>user@example.com</span>
                            </td>
                            <td>
                                <a href="/admin/user/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
