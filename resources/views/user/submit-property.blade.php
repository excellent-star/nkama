@extends('user.userlayout')


@section('page_title','submit-property')
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



<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">

            <div class="row">
                   <div class="col-sm-2"></div>
                   <div class="col-sm-8">

                    <h2 style="color:white;text-align:center;"> List your property for rent on Nkama </h2>
                    <p style="color:white;text-align:center;">Add your rental listing on Rentola - it is 100% free! We have more than 146,767 monthly visitors and every day thousands of tenants search our website. Dont miss out by listing your property today. You can always pause and/or remove your listing.</p>

                   </div>
                   <div class="col-sm-2"></div>
            </div>

        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    {{--  <div class="breadcrumb-area">
                        <ul>
                            <li><a href={{  route('home') }}>Home</a></li>
                            <li><span>/</span>Submit Property</li>
                        </ul>
                    </div>  --}}
                </div>
                <div class="col-md-8">
                    {{-- <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i> +1-8X0-666-8X88</li>
                            <li><a href="contact.html" class="btn btn-md button-theme">Contact us</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="submit-property content-area">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="submit-address">
                    <form method="post" enctype="multipart/form-data">

                        @if(isset($message_submit_page))

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Warning !</strong> {{ $message_submit_page }} , <a class="text-success" href="{{ route('login') }}">Log in </a> here.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif



                        {{  csrf_field() }}

                        <h3 class="heading-2">Basic Information</h3>
                        <div class="search-contents-sidebar mb-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Titre de la proprièté</label>
                                        <input type="text" class="input-text" name="your name" placeholder="Property Title">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Prix</label>
                                        <input type="number" class="input-text" name="your name" placeholder="Property Title">
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="selectpicker search-fields" name="for-sale">
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Type de proprièté</label>
                                        <select class="selectpicker search-fields" name="apartment">
                                            <option value="apartement">Apartement</option>
                                            <option value="bureau">Bureau</option>
                                            <option value="chambre américain">Chambre Américain</option>
                                            <option value="Duplex">Duplex</option>
                                            <option value="Fond de commerce">Fond de commerce</option>
                                            <option value="Immeuble">Immeuble</option>
                                            <option value="Local commerciale">Local commerciale</option>
                                            <option value="Maison">Maison</option>
                                            <option value="Studio">Studio</option>
                                             <option value="Villa">Villa</option>

                                        </select>
                                    </div>
                                </div>
                                {{--  <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="input-text" name="your name" placeholder="iai street">
                                    </div>
                                </div>  --}}

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Disponible à partir de</label>
                                        <input type="Date" class="input-text" name="your name" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Surface en mètre carré</label>
                                        <input type="number" class="input-text" name="your name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre de Chambres</label>
                                        <input type="number" class="input-text" name="your name" placeholder="">
                                    </div>
                                </div>
                                {{--  <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Bathroom</label>
                                        <select class="selectpicker search-fields" name="1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>  --}}
                            </div>
                        </div>




                        <h3 class="heading-2">Property Gallery</h3>
                        <div id="myDropZone" class="dropzone dropzone-design mb-50">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                        </div>
                        <h3 class="heading-2">Location</h3>


                        <div class="row mb-30">
                            <div class="col-lg-5 col-md-5 m-1">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input style="height: 30px !important;line-height:30px;" type="text" class="form-control" name="address"  placeholder="Address">
                                </div>
                            </div>
                            <div  class="col-lg-3 col-md-3">
                                <div  id="country_library" class="form-group">
                                    <label>Country</label>
                                    <select  id="country" class="form-control country" name="choose-state">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control city" id="city" name="choose-citys">

                                    </select>
                                </div>
                            </div>

                        </div>

                        <h3 class="heading-2">Contact Details</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="input-text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Whatsapp</label>
                                    <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                </div>
                            </div>

                        </div>

                        <h3 class="heading-2">Detailed Information</h3>
                        <div class="row mb-50">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label>Detailed Information</label>
                                    <textarea id="ckeditor"  class="input-text" name="message" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="row mb-30">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Building Age <span>(optional)</span></label>
                                    <select class="selectpicker search-fields" name="years">
                                        <option>0-1 Years</option>
                                        <option>0-5 Years</option>
                                        <option>0-10 Years</option>
                                        <option>0-20 Years</option>
                                        <option>0-40 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bedrooms (optional)</label>
                                    <select class="selectpicker search-fields" name="1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bathrooms (optional)</label>
                                    <select class="selectpicker search-fields" name="1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <h3 class="heading-2">Features (optional)</h3>
                        <div class="row mb-40">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Free Parking
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                Air Condition
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Places to seat
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Swimming Pool
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">
                                                Laundry Room
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6">
                                                Window Covering
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Central Heating
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                Alarm
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{--  <h3 class="heading-2">Select your personal login credentials</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="input-text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="input-text" name="password"  placeholder="password">
                                </div>
                            </div>

                            <div class="col-md-4">

                            </div>

                            <div class="col-md-4">
                                <a href="#"  class="btn btn-md button-theme mb-30">Save Listing</a>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>  --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->



<!-- Footer start -->


@include('user.footer')

<!-- Footer end -->




@endsection


@section('script-section')

<script>

    $(function(){

        Dropzone.options.myDropZone = {


            autoProcessQueue: false,
            addRemoveLinks: true,
            acceptedFiles:".jpg,.jpeg,.gif,.png",

 }


    });


</script>

<script>
         $(function(){

                    ClassicEditor.create(document.querySelector('#ckeditor')).catch(error =>{ console.error(error)});
         });
</script>


<script>


    {{--  https://raw.githubusercontent.com/lutangar/cities.json/master/cities.json  --}}


    $(function(){


        var html_code = '';
        var html_code2 = '';

        $.ajax({

            url:'countries-citites/country_state.json',
            method:'GET',
            data:{},
            success:function(data){



                     $.each(data,function(key,value){

                           html_code +='<option value="'+value.countryCode+'">'+value.name+'</option>';
                     });


                     $('#country').html(html_code);
            }


     });







          getCity('AD');


            function getCity(code_country){


                     if(code_country!='default'){




                            $.ajax({

                                   url:'countries-citites/cities.json',
                                   method:'GET',
                                   data:{country:code_country},
                                   success:function(result){

                                    html_code2 = '';

                                    $.each(result,function(key,value1){

                                        if(value1.country==code_country){

                                            html_code2 +='<option value="'+value1.name+'">'+value1.name+'</option>';
                                        }


                                  });


                                        $('#city').html(html_code2);

                                   }
                            });


                     }


            }

            $('#country').change(function(){

                    var countryCode = $(this).val();





                    getCity(countryCode);




            });

    });



</script>

<script>

         $(function(){



            $('.country').select2({


            });
            $('.city').select2();


         });
</script>

@stop







