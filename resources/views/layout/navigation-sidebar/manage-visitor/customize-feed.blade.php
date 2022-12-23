@extends('layout.apps')
@section('title', 'Customize Feed')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Customize Feedback Visitor</h4>
                        <div class="">
                            <a href="#" class="btn icon btn-whatsapp"><i class="bi bi-plus"></i></a>
                            <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="basic" class="star-rating" style="width: 160px; height: 32px; background-size: 32px;"
                            data-rating="5" title="2/5">
                            <div class="star-value" style="background-size: 32px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script src="/support/js/rating-js/rating.js"></script>
    <script src="/support/js/rating-js/custome-feedback.js"></script>
@endpush
