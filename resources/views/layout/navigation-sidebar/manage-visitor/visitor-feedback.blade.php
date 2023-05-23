@extends('layout.apps')
@section('title', 'Visitor Feedback')
@section('content')
    <div class="container-fluid" style="width: 916px;">
        <div class="row">
            <div class="card" style="width: 95%; height: 30%;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Visitor Feedback</h4>
                        </div>
                        <div class="basic-form my-3">
                            <form action="" method="post" id="submit-feedback">
                                @csrf
                                <div class="form-group">
                                    <label for="visitation_purpose">Visitation Purpose:</label>
                                    <select class="form-control" id="visitation_purpose" name="visitation_purpose">
                                        <option value="meeting">Meeting</option>
                                        <option value="company_visit">Company Visit</option>
                                    </select>
                                </div>
                                <div class="list-question" id="list-question"></div>
                                <button type="submit" class="btn btn-google" id="btnCheckOut"
                                    style="color:white;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var url = "{{ route('home.question') }}"
            $.get(url, function({
                data
            }) {
                const {
                    id,
                    question
                } = data
                const questions = JSON.parse(question)
                $.each(questions, function(index, val) {
                    var container = $('#list-question').addClass('')
                    const {
                        value,
                        question,
                        options
                    } = val
                    var opt = (label) => ` <div class="radio">
                                            <label><input type="radio" name="optradio">${label}</label>
                                        </div>`
                    var listAnswer = ''
                    $.each(options, function(index, val) {
                        listAnswer += opt(val)
                    });
                    const item = `
                             <h5>${question}</h5>
                                <div class="mb-3 mb-0 rating">
                                    <div class="mb-3 mb-0" data-id="${index}">
                                        ${listAnswer}
                                    </div>
                                </div>
                    `
                    container.append(item)
                })
            })

            $('#submit-feedback').on('submit', function(e) {
                e.preventDefault()
                // e.stopPropagation()
                var url = e.target['action'];
                var method = e.target['method']
                $.ajax({
                    url,
                    method,
                    data: new FormData(e.target),
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(res) {
                        console.log(res)
                    },
                    error: function(res) {
                        console.log(res)
                        window.dispath('showToastr', (e) => {})
                    },
                })
            })
        })
    </script>
@endpush
