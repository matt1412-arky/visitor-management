@extends('layout.apps')
@section('title', ' Dashboard Admin ')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <h4 class="card-title">List Visitor</h4>
            <div class="list-group mb-4 " id="list-tab" role="tablist">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="example4_length"><label>Show
                                            <select name="example4_length" aria-controls="example4" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="example4_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" wire:model='search' class=""
                                                placeholder="" aria-controls="example4"></label>
                                    </div>
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="fs-6"><strong>NAME</strong></th>
                                                <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                                <th class="fs-6"><strong>STATUS</strong></th>
                                                {{-- <th class="fs-6"><strong>Check In</strong></th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($visitors as $visitor)
                                                <tr>
                                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                                    <td>{{ __($visitor->visitor->name ?? '') }}</td>
                                                    <td>{{ __($visitor->karyawan_ga->name ?? '') }}</td>
                                                    <td class="" {{ $visitor->count() ?? hidden }}">
                                                        <span
                                                            class="badge light badge-{{ $visitor->status == 'pending' ? 'danger' : 'success' }}">
                                                            <i
                                                                class="fa fa-circle text-{{ $visitor->status == 'pending' ? 'danger' : 'success' }} me-1"></i>
                                                            {{ __($visitor->status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('home.form-kesehatan') }}"
                                                            type="button"
                                                            class="btn btn-success btn-xs btn-block">
                                                            Checkin now
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                    <div class="mt-2 fs-3 ">
                                        {{-- {{ $visitors->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Advanced Smil Animation</h4>
                </div>
                <div class="card-body">
                    <div id="smil-animations" class="ct-chart ct-golden-section chartlist-chart">
                        <div class="chartist-tooltip" style="top: -21.1875px; left: 330.875px;">
                        </div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                            class="ct-chart-line" style="width: 100%; height: 100%;">
                            <g class="ct-grids">
                                <line x1="50" x2="50" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="77.72916666666667" x2="77.72916666666667" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1">
                                </line>
                                <line x1="105.45833333333334" x2="105.45833333333334" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1">
                                </line>
                                <line x1="133.1875" x2="133.1875" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="160.91666666666669" x2="160.91666666666669" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1">
                                </line>
                                <line x1="188.64583333333334" x2="188.64583333333334" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1">
                                </line>
                                <line x1="216.375" x2="216.375" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="244.10416666666669" x2="244.10416666666669" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="271.83333333333337" x2="271.83333333333337" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="299.5625" x2="299.5625" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1">
                                </line>
                                <line x1="327.2916666666667" x2="327.2916666666667" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line x1="355.02083333333337" x2="355.02083333333337" y1="15" y2="184.796875"
                                    class="ct-grid ct-horizontal" opacity="1"></line>
                                <line y1="184.796875" y2="184.796875" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1">
                                </line>
                                <line y1="150.8375" y2="150.8375" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1">
                                </line>
                                <line y1="116.878125" y2="116.878125" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1">
                                </line>
                                <line y1="82.91875" y2="82.91875" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1">
                                </line>
                                <line y1="48.959374999999994" y2="48.959374999999994" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1"></line>
                                <line y1="15" y2="15" x1="50" x2="382.75"
                                    class="ct-grid ct-vertical" opacity="1">
                                </line>
                            </g>
                            <g>
                                <g class="ct-series ct-series-a">
                                    <path
                                        d="M50,21.792C59.243,35.376,68.486,51.676,77.729,62.543C86.972,73.41,96.215,89.711,105.458,89.711C114.701,89.711,123.944,76.127,133.188,76.127C142.431,76.127,151.674,110.086,160.917,116.878C170.16,123.67,179.403,130.462,188.646,130.462C197.889,130.462,207.132,103.294,216.375,103.294C225.618,103.294,234.861,157.629,244.104,157.629C253.347,157.629,262.59,144.046,271.833,144.046C281.076,144.046,290.319,144.046,299.563,144.046C308.806,144.046,318.049,136.499,327.292,130.462C336.535,124.425,345.778,112.35,355.021,103.294"
                                        class="ct-line" opacity="0">
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" fill="freeze"></animate>
                                    </path>
                                    <line x1="50" y1="21.791875000000005" x2="50" y2="21.791875000000005"
                                        class="ct-point" ct:value="12" opacity="1">
                                    </line>
                                    <line x1="77.72916666666667" y1="62.543125" x2="77.72916666666667" y2="62.543125"
                                        class="ct-point" ct:value="9" opacity="1">
                                    </line>
                                    <line x1="105.45833333333334" y1="89.710625" x2="105.45833333333334" y2="89.710625"
                                        class="ct-point" ct:value="7" opacity="1">
                                    </line>
                                    <line x1="133.1875" y1="76.126875" x2="133.1875" y2="76.126875" class="ct-point"
                                        ct:value="8" opacity="1"></line>
                                    <line x1="160.91666666666669" y1="116.878125" x2="160.91666666666669"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="1">
                                    </line>
                                    <line x1="188.64583333333334" y1="130.461875" x2="188.64583333333334"
                                        y2="130.461875" class="ct-point" ct:value="4" opacity="1">
                                    </line>
                                    <line x1="216.375" y1="103.294375" x2="216.375" y2="103.294375"
                                        class="ct-point" ct:value="6" opacity="1"></line>
                                    <line x1="244.10416666666669" y1="157.629375" x2="244.10416666666669"
                                        y2="157.629375" class="ct-point" ct:value="2" opacity="1">
                                    </line>
                                    <line x1="271.83333333333337" y1="144.045625" x2="271.83333333333337"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="1">
                                    </line>
                                    <line x1="299.5625" y1="144.045625" x2="299.5625" y2="144.045625"
                                        class="ct-point" ct:value="3" opacity="1"></line>
                                    <line x1="327.2916666666667" y1="130.461875" x2="327.2916666666667" y2="130.461875"
                                        class="ct-point" ct:value="4" opacity="1">
                                    </line>
                                    <line x1="345.02083333333337" y1="103.294375" x2="345.02083333333337"
                                        y2="103.294375" class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                </g>
                                <g class="ct-series ct-series-b">
                                    <path
                                        d="M50,130.462C59.243,125.934,68.486,116.878,77.729,116.878C86.972,116.878,96.215,144.046,105.458,144.046C114.701,144.046,123.944,89.711,133.188,89.711C142.431,89.711,151.674,144.046,160.917,144.046C170.16,144.046,179.403,116.878,188.646,116.878C197.889,116.878,207.132,116.878,216.375,116.878C225.618,116.878,234.861,144.046,244.104,144.046C253.347,144.046,262.59,130.462,271.833,130.462C281.076,130.462,290.319,130.462,299.563,130.462C308.806,130.462,318.049,116.878,327.292,116.878C336.535,116.878,345.778,116.878,355.021,116.878"
                                        class="ct-line" opacity="0">
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" fill="freeze"></animate>
                                    </path>
                                    <line x1="40" y1="130.461875" x2="40" y2="130.461875"
                                        class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="67.72916666666667" y1="116.878125" x2="67.72916666666667" y2="116.878125"
                                        class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="95.45833333333334" y1="144.045625" x2="95.45833333333334" y2="144.045625"
                                        class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="123.1875" y1="89.710625" x2="123.1875" y2="89.710625" class="ct-point"
                                        ct:value="7" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="123.1875"
                                            to="133.1875" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="123.1875"
                                            to="133.1875" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="150.91666666666669" y1="144.045625" x2="150.91666666666669"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="178.64583333333334" y1="116.878125" x2="178.64583333333334"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="206.375" y1="116.878125" x2="206.375" y2="116.878125"
                                        class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="234.10416666666669" y1="144.045625" x2="234.10416666666669"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="261.83333333333337" y1="130.461875" x2="261.83333333333337"
                                        y2="130.461875" class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="289.5625" y1="130.461875" x2="289.5625" y2="130.461875"
                                        class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="289.5625"
                                            to="299.5625" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="289.5625"
                                            to="299.5625" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="317.2916666666667" y1="116.878125" x2="317.2916666666667" y2="116.878125"
                                        class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="345.02083333333337" y1="116.878125" x2="345.02083333333337"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                </g>
                                <g class="ct-series ct-series-c">
                                    <path
                                        d="M50,116.878C59.243,125.934,68.486,144.046,77.729,144.046C86.972,144.046,96.215,134.99,105.458,130.462C114.701,125.934,123.944,121.406,133.188,116.878C142.431,112.35,151.674,103.294,160.917,103.294C170.16,103.294,179.403,144.046,188.646,144.046C197.889,144.046,207.132,144.046,216.375,144.046C225.618,144.046,234.861,134.99,244.104,130.462C253.347,125.934,262.59,121.406,271.833,116.878C281.076,112.35,290.319,103.294,299.563,103.294C308.806,103.294,318.049,144.046,327.292,144.046C336.535,144.046,345.778,134.99,355.021,130.462"
                                        class="ct-line" opacity="0">
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" fill="freeze"></animate>
                                    </path>
                                    <line x1="40" y1="116.878125" x2="40" y2="116.878125"
                                        class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="67.72916666666667" y1="144.045625" x2="67.72916666666667" y2="144.045625"
                                        class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="95.45833333333334" y1="130.461875" x2="95.45833333333334" y2="130.461875"
                                        class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="123.1875" y1="116.878125" x2="123.1875" y2="116.878125"
                                        class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="123.1875"
                                            to="133.1875" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="123.1875"
                                            to="133.1875" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="150.91666666666669" y1="103.294375" x2="150.91666666666669"
                                        y2="103.294375" class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="178.64583333333334" y1="144.045625" x2="178.64583333333334"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="206.375" y1="144.045625" x2="206.375" y2="144.045625"
                                        class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="234.10416666666669" y1="130.461875" x2="234.10416666666669"
                                        y2="130.461875" class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="261.83333333333337" y1="116.878125" x2="261.83333333333337"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="289.5625" y1="103.294375" x2="289.5625" y2="103.294375"
                                        class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="289.5625" to="299.5625" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="289.5625" to="299.5625" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="317.2916666666667" y1="144.045625" x2="317.2916666666667"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="345.02083333333337" y1="130.461875" x2="345.02083333333337"
                                        y2="130.461875" class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                </g>
                                <g class="ct-series ct-series-d">
                                    <path
                                        d="M50,144.046C59.243,139.518,68.486,134.99,77.729,130.462C86.972,125.934,96.215,121.406,105.458,116.878C114.701,112.35,123.944,107.822,133.188,103.294C142.431,98.766,151.674,89.711,160.917,89.711C170.16,89.711,179.403,97.257,188.646,103.294C197.889,109.332,207.132,130.462,216.375,130.462C225.618,130.462,234.861,121.406,244.104,116.878C253.347,112.35,262.59,107.822,271.833,103.294C281.076,98.766,290.319,89.711,299.563,89.711C308.806,89.711,318.049,96.503,327.292,103.294C336.535,110.086,345.778,130.462,355.021,144.046"
                                        class="ct-line" opacity="0">
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" fill="freeze"></animate>
                                    </path>
                                    <line x1="40" y1="144.045625" x2="40" y2="144.045625"
                                        class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="40"
                                            to="50" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="67.72916666666667" y1="130.461875" x2="67.72916666666667"
                                        y2="130.461875" class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="67.72916666666667" to="77.72916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="95.45833333333334" y1="116.878125" x2="95.45833333333334"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="95.45833333333334" to="105.45833333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="123.1875" y1="103.294375" x2="123.1875" y2="103.294375"
                                        class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="123.1875" to="133.1875" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="123.1875" to="133.1875" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="150.91666666666669" y1="89.710625" x2="150.91666666666669"
                                        y2="89.710625" class="ct-point" ct:value="7" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="150.91666666666669" to="160.91666666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="178.64583333333334" y1="103.294375" x2="178.64583333333334"
                                        y2="103.294375" class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="178.64583333333334" to="188.64583333333334" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="206.375" y1="130.461875" x2="206.375" y2="130.461875"
                                        class="ct-point" ct:value="4" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms" from="206.375"
                                            to="216.375" calcMode="spline" keySplines="0.165 0.84 0.44 1"
                                            keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="234.10416666666669" y1="116.878125" x2="234.10416666666669"
                                        y2="116.878125" class="ct-point" ct:value="5" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="234.10416666666669" to="244.10416666666669" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="261.83333333333337" y1="103.294375" x2="261.83333333333337"
                                        y2="103.294375" class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="261.83333333333337" to="271.83333333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="289.5625" y1="89.710625" x2="289.5625" y2="89.710625"
                                        class="ct-point" ct:value="7" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="289.5625" to="299.5625" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="289.5625" to="299.5625" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="317.2916666666667" y1="103.294375" x2="317.2916666666667"
                                        y2="103.294375" class="ct-point" ct:value="6" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="317.2916666666667" to="327.2916666666667" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                    <line x1="345.02083333333337" y1="144.045625" x2="345.02083333333337"
                                        y2="144.045625" class="ct-point" ct:value="3" opacity="0">
                                        <animate attributeName="x1" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="x2" begin="indefinite" dur="500ms"
                                            from="345.02083333333337" to="355.02083333333337" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze"></animate>
                                        <animate attributeName="opacity" begin="indefinite" dur="500ms"
                                            from="0" to="1" calcMode="spline"
                                            keySplines="0.165 0.84 0.44 1" keyTimes="0;1" fill="freeze">
                                        </animate>
                                    </line>
                                </g>
                            </g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="50" y="189.796875"
                                    width="27.729166666666668" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">1</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="77.72916666666667" y="189.796875"
                                    width="27.729166666666668" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">2</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="105.45833333333334" y="189.796875"
                                    width="27.729166666666664" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">3</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="133.1875" y="189.796875"
                                    width="27.72916666666667" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">4</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="160.91666666666669" y="189.796875"
                                    width="27.72916666666667" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">5</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="188.64583333333334" y="189.796875"
                                    width="27.729166666666657" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">6</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="216.375" y="189.796875"
                                    width="27.729166666666686" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">7</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="244.10416666666669" y="189.796875"
                                    width="27.729166666666657" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">8</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="271.83333333333337" y="189.796875"
                                    width="27.729166666666657" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">9</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="299.5625" y="189.796875"
                                    width="27.729166666666686" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">10</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="327.2916666666667" y="189.796875"
                                    width="27.729166666666686" height="20">
                                    <span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 28px; height: 20px;">11</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="355.02083333333337" y="189.796875"
                                    width="30" height="20"><span class="ct-label ct-horizontal ct-end"
                                        xmlns="http://www.w3.org/2000/xmlns/"
                                        style="width: 30px; height: 20px;">12</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="150.8375" x="10"
                                    height="33.959375" width="30"><span class="ct-label ct-vertical ct-start"
                                        xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 34px; width: 30px;">0</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="116.87812500000001" x="10"
                                    height="33.959375" width="30"><span class="ct-label ct-vertical ct-start"
                                        xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 34px; width: 30px;">2.5</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="82.91875" x="10"
                                    height="33.959374999999994" width="30">
                                    <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 34px; width: 30px;">5</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="48.959374999999994" x="10"
                                    height="33.95937500000001" width="30">
                                    <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 34px; width: 30px;">7.5</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="15" x="10"
                                    height="33.959374999999994" width="30">
                                    <span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 34px; width: 30px;">10</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" y="-15" x="10"
                                    height="30" width="30"><span class="ct-label ct-vertical ct-start"
                                        xmlns="http://www.w3.org/2000/xmlns/"
                                        style="height: 30px; width: 30px;">12.5</span>
                                </foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
