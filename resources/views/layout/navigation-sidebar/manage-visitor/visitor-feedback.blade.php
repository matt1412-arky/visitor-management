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
                                    <label for="category">Visitation Purpose:</label>
                                    <select class="form-control" id="category" name="category">
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
            var url = "{{ route('home.question') }}";

            function loadQuestions(category) {
                $.get(url, {
                    category: category
                }, function({
                    data
                }) {
                    const {
                        id,
                        question
                    } = data;
                    const questions = JSON.parse(question);
                    // Hapus pertanyaan sebelumnya
                    $('#list-question').empty();

                    $.each(questions, function(index, val) {
                        var container = $('#list-question').addClass('');
                        const {
                            question,
                            options
                        } = val;
                        var opt = (label) => `<div class="radio">
                                <label>
                                    <input type="radio" name="optradio_${index}" value="${label}">
                                    ${label}
                                </label>
                              </div>`;
                        var listAnswer = '';
                        $.each(options, function(index, option) {
                            listAnswer += opt(option.label);
                        });
                        const item = `
          <h5>${question}</h5>
          <div class="mb-3 mb-0 rating">
            <div class="mb-3 mb-0" data-id="${index}">
              ${listAnswer}
            </div>
          </div>`;
                        container.append(item);
                    });
                });
            }

            // Muat pertanyaan pertama kali dengan kategori pertama
            loadQuestions('meeting');

            $('#visitation_purpose').on('change', function() {
                var selectedPurpose = $(this).val();
                loadQuestions(selectedPurpose);
            });

            $('#submit-feedback').on('submit', function(e) {
                e.preventDefault();
                // e.stopPropagation();
                var url = e.target['action'];
                var method = e.target['method'];
                $.ajax({
                    url,
                    method,
                    data: new FormData(e.target),
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                    },
                    error: function(res) {
                        console.log(res);
                        window.dispath('showToastr', (e) => {});
                    },
                });
            });
        });
    </script>
@endpush
