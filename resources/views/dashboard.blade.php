@extends('layouts.layout')

@section('title', 'Dashboard | RK Export')

@section('content')

<section class="folder_sec p-0">
    <div class="inner_folder">

        <div class="client-activity">
            <div class="row gy-4">

                {{-- Total Exporter --}}
                <div class="col-lg-4">
                    <div class="client_box">
                        <span>Total Exporter</span>
                        <h4>{{ $totalExporter ?? 101 }}</h4>
                    </div>
                </div>

                {{-- This Week --}}
                <div class="col-lg-4">
                    <div class="client_box">
                        <span>This week</span>
                        <h4>{{ $thisWeek ?? 20 }}</h4>
                    </div>
                </div>

                {{-- This Month --}}
                <div class="col-lg-4">
                    <div class="client_box">
                        <span>This month</span>
                        <h4>{{ $thisMonth ?? 10 }}</h4>
                    </div>
                </div>

                {{-- Due --}}
                <div class="col-lg-4">
                    <div class="client_box">
                        <span>Due</span>
                        <h4>{{ $due ?? 10 }}</h4>
                    </div>
                </div>

                {{-- Advance --}}
                <div class="col-lg-4">
                    <div class="client_box">
                        <span>Advance</span>
                        <h4>{{ $advance ?? 10 }}</h4>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
