@extends('layouts.layout')

@section('title', 'RK Export - Exporter')

@section('content')
<section class="folder_sec p-0">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('error')}}</strong>
    </div>

    @endif
    {{-- Top Action Bar & Stats --}}
    <div class="client-activity">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Exporter List</h4>
            <!-- Create Exporter Button -->
            <button type="button" class="cr_ind_btn btn border-0 text-white" data-bs-toggle="modal"
                data-bs-target="#createExporterModal">
                + Create Exporter
            </button>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="client_box">
                    <span>Total Exporter</span>
                    <h4>{{ $clients->count() ?? 0 }}</h4>
                </div>
            </div>
            <!-- <div class="col-lg-4">
                <div class="client_box">
                    <span>This week</span>
                    <h4>{{ $thisWeekCount ?? 20 }}</h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="client_box">
                    <span>This month</span>
                    <h4>{{ $thisMonthCount ?? 10 }}</h4>
                </div>
            </div> -->
        </div>
    </div>

    {{-- Exporter Table --}}
    <div class="inner_folder">
        <div class="table_hldr">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>
                            <p>Exporter Name
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M560-680v-80h320v80H560Zm0 160v-80h320v80H560Zm0 160v-80h320v80H560Zm-325-75q-35-35-35-85t35-85q35-35 85-35t85 35q35 35 35 85t-35 85q-35 35-85 35t-85-35ZM80-160v-76q0-21 10-40t28-30q45-27 95.5-40.5T320-360q56 0 106.5 13.5T522-306q18 11 28 30t10 40v76H80Zm86-80h308q-35-20-74-30t-80-10q-41 0-80 10t-74 30Zm182.5-251.5Q360-503 360-520t-11.5-28.5Q337-560 320-560t-28.5 11.5Q280-537 280-520t11.5 28.5Q303-480 320-480t28.5-11.5ZM320-520Zm0 280Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>Created Date
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-188.5-11.5Q280-423 280-440t11.5-28.5Q303-480 320-480t28.5 11.5Q360-457 360-440t-11.5 28.5Q337-400 320-400t-28.5-11.5ZM640-400q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-188.5-11.5Q280-263 280-280t11.5-28.5Q303-320 320-320t28.5 11.5Q360-297 360-280t-11.5 28.5Q337-240 320-240t-28.5-11.5ZM640-240q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>Status
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>Export
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="24px"
                                        fill="#e3e3e3">
                                        <path
                                            d="M324-111.5Q251-143 197-197t-85.5-127Q80-397 80-480t31.5-156Q143-709 197-763t127-85.5Q397-880 480-880q20 0 40 2.5t40 4.5v82q-20-2-40-4.5t-40-2.5q-26 36-45 75.5T404-640h116v80H386q-3 20-4.5 40t-1.5 40q0 20 1.5 40t4.5 40h188q3-20 4.5-40t1.5-40q0-20-1.5-40t-4.5-40h80q3 20 4.5 40t1.5 40q0 20-1.5 40t-4.5 40h136q5-20 7.5-40t2.5-40q0-20-2.5-40t-7.5-40h82q4 20 6 40t2 40q0 83-31.5 156T763-197q-54 54-127 85.5T480-80q-83 0-156-31.5ZM170-400h136q-3-20-4.5-40t-1.5-40q0-20 1.5-40t4.5-40H170q-5 20-7.5 40t-2.5 40q0 20 2.5 40t7.5 40Zm206 222q-18-34-31.5-69.5T322-320H204q29 51 73 87.5t99 54.5ZM204-640h118q9-37 22.5-72.5T376-782q-55 18-99 54.5T204-640Zm276 478q26-36 45-75.5t31-82.5H404q12 43 31 82.5t45 75.5Zm104-16q55-18 99-54.5t73-87.5H638q-9 37-22.5 72.5T584-178Zm56-462v-240h240v240H640Zm120-120h80v-80h-80v80Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clients as $client)
                    <tr>
                        <td>
                            <a href="{{ url('/project-details/'.$client->id) }}">
                                <ul class="folder_name">
                                    <li>
                                        <img class="folder_img" src="{{ asset('images/svg/folder.svg') }}" alt="folder">
                                    </li>
                                    <li><span>{{$client->name}}</span></li>
                                </ul>
                            </a>
                        </td>
                        <td>{{date('d-m-Y',strtotime($client->created_at))}}</td>
                        @if($client->status == 1)
                        <td><span class="ongoing bg-success">Active</span></td>
                        @else
                        <td><span class="ongoing bg-danger">Inactive</span></td>
                        @endif
                        <td>{{$client->name}} Export</td>
                    </tr>
                    @empty
                    <tr>
                        <td>No Data Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{$clients->links()}}
    </div>
</section>

<!-- Create Exporter Modal -->
<div class="modal fade" id="createExporterModal" tabindex="-1" aria-labelledby="createExporterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="createExporterModalLabel">Create Exporter</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/client') }}" method="POST" class="common_form">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label>Exporter Name <mark>*</mark></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Exporter Name"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection