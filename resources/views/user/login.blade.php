@extends('user.userlayout')


@section('page_title','login')
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
                        <h3>Sign into your account</h3>
                        <!-- Form start -->
                        <form action="#" id="login_form_id" method="POST">

                            <div id="message_login_page_login" style="display: none;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>you will be Logged in  3 seconds</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                             <div id="login_alert"></div>

                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-text" placeholder="Email Address">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id='password' class="input-text" placeholder="Password">
                                <div style="display: block;" class="invalid-feedback"></div>
                            </div>
                            <div class="checkbox">
                                {{--  <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                        Remember me
                                    </label>
                                </div>  --}}
                                <a href="{{ route('forgot-password') }}" class="link-not-important pull-right">Forgot Password</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" id="login_button" class="btn-md button-theme btn-block">login</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Don't have an account? <a href="{{ route('register') }}">Register here</a>
                    </span>
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


                            $("#login_form_id").submit(function(e){

                                e.preventDefault();

                                  $("#login_button").html('Please wait....');


                                  $.ajax({

                                         url:'{{ route('loginuser') }}',
                                         method:"POST",
                                         data:$(this).serialize(),
                                         dataType:'json',
                                         success:function(res){


                                                if(res.status==400){

                                                    console.log(res);

                                                    showError("email",res.messages.email);
                                                    showError("password",res.messages.password);

                                                    $("#login_button").html('login');
                                                }else if(res.status==401){

                                                     $("#login_alert").html(showMessage('danger',res.messages));
                                                     $("#login_button").html('login');
                                                     showError("email",res.messages.email);
                                                    showError("password",res.messages.password);
                                                }else{


                                                     if(res.status==200 && res.messages=='success'){


                                                        $("#message_login_page_login").css("display","block");

                                                        setInterval(function(){ window.location = '{{ route('home') }}'; }, 3000);


                                                     }
                                                }
                                         }
                                  });


                            });
                    });
        </script>



@stop







