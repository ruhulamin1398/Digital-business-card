@extends("administration.app")


@section('css')
<link rel="stylesheet" href="{{asset('build/css/intlTelInput.css')}}">
<!-- <link rel="stylesheet" href="{{asset('build/css/demo.css')}}"> -->

<style>
    .iti {
        display: block !important;
    }
</style>
@endsection
@section('js')

<script src="{{asset('build/js/intlTelInput.js')}}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#profileView').attr('src', e.target.result);



            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile").change(function() {

        readURL(this);
    });
</script>


<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "{{asset('build/js/intlTelInput.js')}}",
    });
</script>



<script>
    $("#matchPass").hide();

    function checkPass() {
        if ($("#email-pass-1").val() == $("#email-pass-2").val()) {
            $("#matchPass").hide();
            $("#submitBtn").removeClass("disabled");
        } else {
            $("#submitBtn").addClass("disabled");
            $("#matchPass").show();
        }

    }


    
    // $("#email-pass-2").keyup(function() {
    //     checkPass();
    // });
    // $("#email-pass-1").keyup(function() {
    //     checkPass();
    // });
</script>

<script>
 $("#changePassCheck").click(function() {
    if($(this).prop("checked") == true){
       var ht = '<div class="form-group"> <label class="form-label" for="email-pass-1">Password <span class="text-danger">* </span></label><div class="form-control-wrap"><input type="text" name="password1" class="form-control" minlength="8" id="email-pass-1" required></div></div>';
        $("#resetArea").html(ht);
    }
    else{
        
        $("#resetArea").html(" ");
    }
   

  
    
    
});



</script>





@endsection


@section("content")



<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">

            <div class="nk-content-body">



                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Trainer Information</h3>


                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->





                <form action="{{route('trainers.update',$trainer->id) }}" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class=" nk-block nk-block-lg row">
                        <div class="col-12">

                            <div class="mx-auto" style="width: 150px;">



                                <div class="form-group">
                                    <label class="form-label border border-secondary" for="profile"> <img id="profileView" src="{{route('index')}}/{{$trainer->profile_photo_path}}" alt="Profile Photo" width="150px;"></label>
                                    <div class="form-control-wrap">
                                        <input type="file" name="photo" class="form-control" id="profile" required>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>


                    <div class="nk-block nk-block-lg">


                        <div class="card card-bordered">
                            <div class="card-inner">







                                <div class="row g-4">








                                    <div class="col-12 col-md-6">


                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">First Name <span class="text-danger">* </span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="first_name" class="form-control" id="full-name-1" value="{{$trainer->first_name}}" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Last Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="last_name" class="form-control" value="{{$trainer->last_name}}" id="full-name-1">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="form-label" for="phone">Phone No</label>
                                            <div class="form-control-wrap">
                                                <input type="tel" name="phone" value="{{$trainer->phone}}" class="form-control" id="phone" style="width: 100% !important;">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="default-textarea">Trainer Bio</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control " rows="2" name="bio" id="default-textarea"> {{$trainer->bio}}</textarea>
                                            </div>
                                        </div>



                                    </div>



                                    <div class="col-12 col-md-6">
                                        <div class="p-4 text-center">
                                            Login Information
                                        </div>


                                        <hr>

                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Email address <span class="text-danger">* </span></label>
                                            <div class="form-control-wrap">
                                                <input type="email"  value="{{$trainer->email}}" class="form-control" id="email-address-1" disabled >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="checkbox" checked id="changePassCheck"  required> Change Password
                                            </div>
                                        </div>



                                        <div id="resetArea">

                                        <div class="form-group"> <label class="form-label" for="email-pass-1">Password <span class="text-danger">* </span></label><div class="form-control-wrap"><input type="text" name="password1" class="form-control" minlength="8" id="email-pass-1" required></div></div>

                                        </div>









                                        <!-- <div class="form-group">
                                            <label class="form-label" for="default-03">Instragram</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    @
                                                </div>
                                                <input type="text" name="instragram" class="form-control" id="default-03">
                                            </div>
                                        </div> -->


                                    </div>





                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" id="submitBtn" class="btn btn-lg btn-primary">Save Informations</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </form>





            </div>
        </div>
    </div>
</div>

@endsection