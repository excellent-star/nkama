@extends('user.userlayout')


@section('page_title','forgot-password')
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
                        <img src="img/logos/nkama1a.png" class="cm-logo" alt="black-logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Recover your password</h3>
                        <!-- Form start -->
                        <form action="#" id="forgot_password_form_id" method="POST">

                            <div id="forgot_alert"></div>

                            @csrf

                            <div class="form-group">
                                <input type="text" name="email" id="email" class="input-text" placeholder="Email Address">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button id="forgot_password_button" type="submit" class="btn-md button-theme btn-block">Send Me Email</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>Already a member? <a href="{{ route('login') }}">Login here</a></span>
                    </div>
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

              $("#forgot_password_form_id").submit(function(e){


                e.preventDefault();

                       $("#forgot_password_button").html('Please wait...');

                      $.ajax({

                            url:'{{ route("forgot_password_post") }}',
                            method:'POST',
                            data:$(this).serialize(),
                            dataType:'JSON',
                            success:function(res){

                                  if(res.status == 400){

                                      showError('email',res.messages.email);

                                      $("#forgot_password_button").html('Send Me Email');


                                  }else if(res.status==200){

                                        $("#forgot_alert").html(showMessage('success',res.messages));
                                        $("#forgot_password_button").html('Send Me Email');
                                        removeValidationClasses('#forgot_password_form_id');
                                        $("#forgot_password_form_id")[0].reset();
                                  }else{

                                    $("#forgot_password_button").html('Send Me Email');
                                    $("#forgot_alert").html(showMessage('danger',res.messages));


                                  }
                            }
                      });
              });




          });
</script>



@stop







