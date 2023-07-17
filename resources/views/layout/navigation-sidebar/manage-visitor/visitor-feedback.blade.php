@extends('layout.apps')
@section('title', 'Visitor Feedback')
@section('content')
    <div class="row">
        <div class="card" style="width: 95%; height: 30%;">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Visitor Feedback</h4>
                    </div>
                    <div class="basic-form my-3">
                        <form action="{{ route('home.feedback-update') }}" method="post" id="submit-feedback">
                            @csrf
                            <div class="list-question" id="list-question"></div>
                            @foreach ($feedbacks as $feedback)
                                <input type="hidden" name="id_visit" value="{{ $feedback->visit->id }}">
                                <input type="hidden" name="id_question" value="{{ $feedback->question->id }}">
                                <input type="hidden" name="skala_feed" value="{{ $feedback->skala_feed }}">
                            @endforeach

                            <button type="submit" class="btn btn-google" id="btnCheckOut"
                                style="color:white;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            function loadQuestions() {
                var url = "{{ route('home.visitor-feedback-to-answer') }}";
                $.get(url, function({
                    data
                }) {
                    const {
                        id,
                        question
                    } = data;
                    const questions = JSON.parse(question.trim());

                    $.each(questions, function(index, val) {
                        var container = $('#list-question').addClass('');
                        const {
                            question,
                            options
                        } = val;
                        var opt = ({
                            label,
                            value
                        }) => `<div class="radio">
                                <label>
                                    <input type="radio" name="optradio_${index}" value="${value+1}" required>
                                    ${label}
                                </label>
                              </div>`;
                        var listAnswer = '';
                        $.each(options, function(index, option) {
                            listAnswer += opt(option);
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
            loadQuestions();


            function getValueFeedback() {
                // Menghitung total value yang sudah dipilih
                let totalValue = 0;
                let totalQuestions = 0;
                $('#submit-feedback').each(function(index, element) {
                    9
                    let selectedValue = $(element).find('input[type=radio]:checked').val();
                    $(element).find('input[type=radio]:checked').each(function(_, el) {
                        totalValue += parseInt(el['value']);
                        totalQuestions++;
                    })
                });
                // Menghitung nilai rata-rata
                const averageValue = totalValue / totalQuestions / 0.05;
                $('input[name=skala_feed]').attr('value', averageValue)
                console.log(averageValue)
                return averageValue
            }

            $('#submit-feedback').on('submit', function(e) {
                e.preventDefault();
                getValueFeedback()
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
                        Swal.fire({
                            title: 'Success',
                            text: 'Successfully created Feedback',
                            type: 'success',
                        });
                    },
                    error: function(res) {
                        console.log(res);
                        Swal.fire({
                            title: 'Fail',
                            text: 'Failed created Feedback',
                            type: 'error',
                        });
                    },
                });
            });
        });
    </script>
@endpush
