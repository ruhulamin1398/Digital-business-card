@extends("users.app")
@section('css')


@endsection



@section("content")


<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 bg-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, fugit aliquid. Iste consequuntur dolores enim culpa est, officiis nulla et itaque, tempore explicabo unde dignissimos distinctio in eaque aspernatur. Labore animi est maiores praesentium ea dolorem, repellendus nihil provident veritatis ullam, aspernatur cupiditate deleniti assumenda ipsum possimus laborum enim ab?
        </div>


        
        <div class="col-12 col-md-4">


            <!-- Banner Section start-->
            <div class="container-card-area banner-main">
                <div class="row">
                    <div class="col-12">
                        <div class="banner d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/anthil.png')}}" alt="anthil" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section end-->
            <!-- user section start -->
            <div class="container-fluid bg-card ">
                <div class="container-card-area share-main">
                    <div class="share-sub">
                        <a href="#">
                            <i class="fas fa-share-alt text-light"></i>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-3 no-gutters">
                            <img  src="{{asset('img/person.jpg')}}" alt="user" class="image img-fluid">
                        </div>
                        <div class="col-9 user no-gutters">
                            <div class="d-flex h-100 justify-content-start align-items-center text-white">
                                <div class="user-des">
                                    <h2 class="name">Anica Wilton</h2>
                                    <span class="position">Web Designer and Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user section end -->
            <!-- social media section start -->
            <div class="container-fluid social-media bg-card text-light text-center">
                <div class="container-card-area pb-5">
                    <div class="row">
                        <div class="col-12 pt-5">
                            <div class="row social-box">
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-phone-alt"></i>
                                        <p class="phone">Phone</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-file-alt"></i>
                                        <p class="text">Text</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-envelope"></i>
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-globe-africa"></i>
                                        <p class="wiki">Wiki</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-5">
                            <div class="row social-box">
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p class="map">Migrate</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-youtube"></i>
                                        <p class="youtube">Youtube</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-twitter"></i>
                                        <p class="twitter">Twitter</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                        <p class="Linkedin">Linkdin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- social media section end-->

            <div class="container-fluid bg-card">
                <div class="container-card-area">
                    <div class="row text-light footer-text pt-3 pb-3 user-top">
                        <div class="col-3">
                            <a href="#" class="text-light">
                                <i class="fas fa-angle-down"></i>
                            </a>
                        </div>
                        <div class="col-9">
                            <p>More Details</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>
</div>

@endsection