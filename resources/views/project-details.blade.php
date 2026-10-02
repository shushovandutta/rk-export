@extends('layouts.layout')

@section('title', ($client->name ?? 'Client') . ' - Details')

@section('content')
<section class="folder_sec p-0">
    <div class="inner_folder">

        {{-- Client / Exporter Top Information Card --}}
        <div class="client_details">
            <ul>
                <li>Exporter: <strong>{{ $client->name ?? '-' }}</strong></li>
                <li>
                    Email:
                    <a href="mailto:{{ $client->email ?? 'ripon@example.com' }}">
                        {{ $client->email ?? '-' }}
                    </a>
                </li>
                <li>
                    Phone:
                    <a href="tel:{{ $client->phone ?? '1234567890' }}">
                        {{ $client->mobile ?? '-' }}
                    </a>
                </li>
                <li>Total Projects: {{ $client->total_projects ?? (isset($projects) ? $projects->count() : 0) }}</li>
                <li>
                    Active Projects:
                    {{ $client->active_projects ?? (isset($projects) ? $projects->where('status', 1)->count() : 0) }}
                </li>
            </ul>
        </div>

        {{-- Projects / Financial List Table --}}
        <div class="table_hldr">
            <table class="table table-hover table-striped mb-0">
                <thead>
                    <tr>
                        <th>
                            <p>Project Name
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-188.5-11.5Q280-423 280-440t11.5-28.5Q303-480 320-480t28.5 11.5Q360-457 360-440t-11.5 28.5Q337-400 320-400t-28.5-11.5ZM640-400q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400Zm480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-188.5-11.5Q280-263 280-280t11.5-28.5Q303-320 320-320t28.5 11.5Q360-297 360-280t-11.5 28.5Q337-240 320-240t-28.5-11.5ZM640-240q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>Starting Date
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-188.5-11.5Q280-423 280-440t11.5-28.5Q303-480 320-480t28.5 11.5Q360-457 360-440t-11.5 28.5Q337-400 320-400t-28.5-11.5ZM640-400q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400Zm480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-188.5-11.5Q280-263 280-280t11.5-28.5Q303-320 320-320t28.5 11.5Q360-297 360-280t-11.5 28.5Q337-240 320-240t-28.5-11.5ZM640-240q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                        <th>
                            <p>Closing Date
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-188.5-11.5Q280-423 280-440t11.5-28.5Q303-480 320-480t28.5 11.5Q360-457 360-440t-11.5 28.5Q337-400 320-400t-28.5-11.5ZM640-400q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400Zm480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-188.5-11.5Q280-263 280-280t11.5-28.5Q303-320 320-320t28.5 11.5Q360-297 360-280t-11.5 28.5Q337-240 320-240t-28.5-11.5ZM640-240q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
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
                            <p>Action
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#e3e3e3">
                                        <path
                                            d="M740-160v-488l-44 44-56-56 140-140 140 140-57 56-43-43v487h-80Zm-620-80v-163l295-294q24-24 57.5-23t56.5 25l48 50q23 23 22.5 56T576-533L283-240H120Zm80-80h50l162-162-25-25-25-25-162 162v50Zm269-219-50-50 50 50Z" />
                                    </svg>
                                </span>
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($projects) && count($projects) > 0)
                    @foreach($projects as $project)
                    <tr>
                        <td>
                            <span>
                                {{ $project->project_name }}
                            </span>
                        </td>
                        <td>
                            <span>
                                {{ !empty($project->starting_date) ? \Carbon\Carbon::parse($project->starting_date)->format('d-m-Y') : '-' }}
                            </span>
                        </td>
                        <td>
                            <span>
                                {{ !empty($project->closing_date) ? \Carbon\Carbon::parse($project->closing_date)->format('d-m-Y') : '-' }}
                            </span>
                        </td>
                        <td>
                            <span class="ongoing {{ $project->status == '1' ? 'bg-success' : 'bg-danger' }}">
                                {{ $project->status == 1 ? 'Active': 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ url('/entry-list/' . ($project->id ?? '')) }}" class="cr_ind_btn">
                                More Details
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e3e3e3">
                                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                                </svg>
                            </a>
                            @php
                            $url = url('project/status/update/'.$project->id)
                            @endphp
                            @if($project->status == 1)
                            <button class="btn btn-danger"
                                onclick="closeproject('{{$project->id}}','{{$url}}')">Close</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>No Data Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        {{-- Pagination (যদি Controller থেকে paginate করা থাকে) --}}
        @if(isset($projects) && method_exists($projects, 'links'))
        <div class="pagination_hldr mt-3">
            {{ $projects->links() }}
        </div>
        @endif

    </div>
</section>
@endsection