@extends('user.userlayout')


@section('page_title','register')
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
                    <!-- Logo-->
                    <a href="index-2.html">
                        <img src="img/logos/nkama1a.png" class="cm-logo" alt="black-logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Create an account</h3>
                        <!-- Form start-->
                        <form action="#" id="register_form_id" method="POST">

                            <div id="show_success_alert"></div>

                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-text" placeholder="Email Address">
                                <div style="display:block;"  class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="input-text" placeholder="phone number">
                                <div style="display:block;" class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="input-text" placeholder="Password">
                                <div style="display:block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" id="confirm_password" class="input-text" placeholder="Confirm Password">
                                <div style="display:block;" class="invalid-feedback"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button id="register_button" type="submit" class="btn-md button-theme btn-block">Signup</button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Already a member? <a href="{{ route('login') }}">Login here</a>
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


        $('#register_form_id').submit(function(e){

            e.preventDefault();

            $('#register_button').html('please wait ....');



            $.ajax({

                    url:'{{ route('saveuser') }}',
                    method:'POST',
                    data: $(this).serialize(),
                    dataType:'JSON',
                    success:function(res){

                          if(res.status==400){



                              showError('email',res.messages.email);
                              showError('phone',res.messages.phone);
                              showError('password',res.messages.password);
                              showError('confirm_password',res.messages.confirm_password);

                              $('#register_button').html('Signup');
                          }else if(res.status==200){

                            showError('email',res.messages.email);
                              showError('phone',res.messages.phone);
                              showError('password',res.messages.password);
                              showError('confirm_password',res.messages.confirm_password);


                                $('#show_success_alert').html(showMessage('success',res.messages));

                                $("#register_form_id")[0].reset();

                                removeValidationClasses("#register_form_id");
                                $('#register_button').html('Signup');


                          }


                    }
            });




        });

});


</script>






@stop







