@extends('auth.layouts.app')

@push('styles')
    {{-- custom style --}}
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Add Multi Input</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-test-tab" data-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-test" aria-selected="true">Git Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Customer Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">File upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-chart-tab" data-toggle="pill" href="#pills-chart" role="tab" aria-controls="pills-chart" aria-selected="false">Laravel Chart</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @livewire('multi-input')
                </div>
                <div class="tab-pane fade show active" id="pills-test" role="tabpanel" aria-labelledby="pills-test-tab">
                    GIT TEST
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @livewire('live-search-bar')
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    {{-- Todo --}}
                </div>
                <div class="tab-pane fade" id="pills-chart" role="tabpanel" aria-labelledby="pills-chart-tab">
                    {{-- Laravel Chart --}}
                    <!-- Chart's container -->
                    {{--<div id="chart" style="height: 400px;"></div>--}}
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- Custom JS --}}
    <script src="{{ mix('js/custom/ctm-chart.js') }}"></script>
@endpush
