@extends('user.userlayout')


@section('page_title','change-password')
@section('content')

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57SQS65"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

@include('user.top-header')

<!-- Main header start -->
@include('user.header')
<!-- Main header end -->



<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- Logo -->
                    <a href="index-2.html">
                        <img src="{{ asset('img/logos/nkama1a.png') }}" class="cm-logo" alt="black-logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Change your password</h3>
                        <!-- Form start -->
                        <form action="#" id="change_password_form_id" method="POST">

                            <div id="reset_alert"></div>

                            @csrf

                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="token" value="{{ $token }}">


                            <div class="form-group">
                                <input type="text" name="email" id="email" value="{{ $email }}" disabled class="input-text" placeholder="Email Address">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="npassword" id="npassword" class="input-text" placeholder="New Password">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="cpassword" id="cpassword" class="input-text" placeholder="Confirm Password">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" id="change_password_button" class="btn-md button-theme btn-block">Change</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    {{--  <div class="footer">
                        <span>Already a member? <a href="{{ route('login') }}">Login here</a></span>
                    </div>  --}}
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->



<!-- Footer start -->


@include('user.footer')

<!-- Footer end -->




@endsection


@section('script-section')


<script>

          $(function(){

                $("#change_password_form_id").submit(function(e){

                      e.preventDefault();

                      $("#change_password_button").html("Please Wait...");

                      $.ajax({

                             url:'{{ route("reset_password_run") }}',
                             method:"POST",
                             dataType:'json',
                             data:$(this).serialize(),
                             success: function(res){

                                     if(res.status==400){

                                           showError('npassword',res.messages.npassword);
                                           showError('cpassword',res.messages.cpassword);
                                           $("#change_password_button").html("Change");
                                     }else if(res.status==401){


                                          $("#reset_alert").html(showMessage('danger',res.messages));
                                          removeValidationClasses("#reset_form");
                                          $("#change_password_button").html("Change");
                                     }else{

                                            $("#reset_form")[0].html(showMessage('success',res.messages));
                                            $("#change_password_button").html("Change");
                                            $("#change_password_form_id")[0].reset();
                                     }
                             }
                      });


                });
          });
</script>



@stop







