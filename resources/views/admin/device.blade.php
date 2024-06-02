@extends('layout.layout_admin')
@section('title', 'device')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <div style="display: flex; justify-content:space-between">
                <h5 class="card-title fw-semibold mb-4">This is Device Data</h5>
                <a href="/admin/device/create" class="btn btn-warning">Add Devices</a>
            </div>
            <div class="table-responsive" data-simplebar>
                <table class="table text-nowrap align-middle table-custom mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="text-dark fw-normal ps-0">User
                            </th>
                            <th scope="col" class="text-dark fw-normal">Device id</th>
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
                                <span>A001</span>
                            </td>
                            <td>
                                <a href="/admin/device/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            {{-- <td>
                            <span class="badge bg-success-subtle text-success">Low</span>
                        </td>
                        <td>
                            <span class="text-dark">$3.5k</span>
                        </td> --}}
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
                                <span>A002</span>
                            </td>
                            <td>
                                <a href="/admin/device/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            {{-- <td>
                            <span class="badge bg-warning-subtle text-warning">Medium</span>
                        </td>
                        <td>
                            <span class="text-dark">$3.5k</span>
                        </td> --}}
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
                                <span>A003</span>
                            </td>
                            <td>
                                <a href="/admin/device/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            {{-- <td>
                            <span class="badge bg-secondary-subtle text-secondary">Very
                                High</span>
                        </td>
                        <td>
                            <span class="text-dark">$3.5k</span>
                        </td> --}}
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
                                <span>A005</span>
                            </td>
                            <td>
                                <a href="/admin/device/update" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            {{-- <td>
                            <span class="badge bg-danger-subtle text-danger">High</span>
                        </td>
                        <td>
                            <span class="text-dark">$3.5k</span>
                        </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
