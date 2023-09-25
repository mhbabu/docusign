@extends('layouts.app')
@section('header-css')
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('sweet-alert/css/sweetalert.min.css') !!}
    {!! Html::style('css/toastr.min.css') !!}
@endsection
@section('content')
    <div class="container">
        {!! Form::open(['route' => 'document.submit', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'dataForm', 'id' => 'msform']) !!}
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">First Setup</li>
            <li>Model Experience</li>
            <li>Legal Adults</li>
            <li>Your Stats</li>
            <li>Your Dominations</li>
            <li>Question & Ans</li>
            <li>Aggrement</li>
            <li>Network & Signature</li>
        </ul>
        <!-- fieldsets -->
        @include('includes.one-step')
        @include('includes.two-step')
        @include('includes.three-step')
        @include('includes.four-step')
        @include('includes.five-step')
        @include('includes.six-step')
        @include('includes.seven-step')
        @include('includes.eight-step')
        {!! Form::close() !!}
    </div>
@endsection
@section('footer-script')
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('sweet-alert/js/sweetalert.min.js') !!}
    {!! Html::script('js/toastr.min.js') !!}
    {!! Toastr::message() !!}

    <script type="text/javascript">

        /*********************************************
         FRIST STEP OTHER FIELD SCRIPTING START HERE 
        **********************************************/
        $(".other-profession-div").hide();
        $(".other-profession").change(function() {
            if ($(this).is(":checked")) {
                $(".other-profession-div").show();
            } else {
                $(".other-profession-div").hide();
            }
        });

        $(".fetish-entertain-div").hide();
        $("#entertain").change(function() {
            if ($(this).val() == 'Others') {
                $(".fetish-entertain-div").show();
            } else {
                $(".fetish-entertain-div").hide();
            }
        });

        /**********************
        VALIDATION START HERE
        ***********************/
        $('.dataForm').validate({
            errorPlacement: function() {
                return false;
            }
        });

        /**************************************
         SIGNATURE STATUS SCRIPTING START HERE 
        ***************************************/
        $(".digital-signature").hide();
        $(".img-signature").hide();
        $("#signatureStatus").change(function() {
            const value = $(this).val();
            if (value == 'Digital Signature') {
                $(".digital-signature").show();
                $(".img-signature").hide();
            } else if(value == 'Image Signature') {
                $(".digital-signature").hide();
                $(".img-signature").show();
            }else{
                $(".digital-signature").hide();
                $(".img-signature").hide();
            }
        });

        /*****************************************
         SIGNATURE PHOTO UPLOAD SRIPT START HERE
        *******************************************/
        function changePhoto(input) {
            if (input.files && input.files[0]) {
                $("#photo_err").html('');
                let mime_type = input.files[0].type;
                if (!(mime_type == 'image/jpeg' || mime_type == 'image/jpg' || mime_type == 'image/png')) {
                    $("#photo_err").html("Image format is not valid. Only PNG or JPEG or JPG or PDF file are allowed.");
                    return false;
                }
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#photoViewer').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


        /******************************************
         MULTIPLE FILE UPLOAD SCRIPTING START HERE
        *******************************************/
        function uploadFiles(input) {
            if (input.files && input.files.length >= 5 && input.files.length <= 20) {
                let allowedFileTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                let formData = new FormData();

                for (let i = 0; i < input.files.length; i++) {
                    let fileType = input.files[i].type;
                    let fileSize = (input.files[i].size / 1024 / 1024).toFixed(2);

                    if (!allowedFileTypes.includes(fileType)) {
                        swal("Only PDF, PNG, JPEG, JPG types are allowed!");
                        return false;
                    }

                    if (fileSize > 2) {
                        swal("Maximum file size 2MB allowed!");
                        input.value = '';
                        return false;
                    }

                    formData.append('_token', "{{ csrf_token() }}");
                    formData.append('file_data[]', input.files[i]);
                }

                $(input).parent().parent().find('.uploaded-file').html('Uploading....');
                let action = "{{ url('upload-multiple-files') }}"; // upload the URL
                $.ajax({
                    url: action,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function(response) {
                        if (response.status) {
                            $(input).parent().parent().find('.uploaded-file').html('');
                            $.each(response.file_paths, function(index, value) {
                                var anchor = $(`<a class="btn btn-primary btn-sm m-1" href="${value}" target="_blank">File ${index+1}</a>`);
                                var input = $(`<input type="hidden" name="uploaded_images[]" value="${value}" />`);
                                $('.uplodedImages').append(anchor);
                                $('.uploded-inputs').append(input);
                            });
                        } else {
                            $(input).parent().parent().find('.uploaded-file').html('');
                        }
                    }
                });
            } else {
                $(this).val('');
                swal("Please select between 5 and 20 files.");
            }
        }
    </script>
@endsection
