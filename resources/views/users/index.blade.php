@extends("users.app")
@section('css')


<style>
    .banner-main {
        overflow: hidden;
    }

    .banner {
        height: 500px;
    }

    .bg-card {
        background: #282828;

    }

    .user {
        border-bottom: 1px solid #ffffff30;
    }

    .user-top {
        border-top: 1px solid #ffffff30;
    }

    .user-des {
        font-family: 'Roboto', sans-serif;
        margin-left: 30px;
    }

    .user-des h2 {
        font-size: 42px;
        font-weight: bold;
    }

    .user-des span {
        font-size: 22px;
        font-weight: 400;
    }

    .no-gutters {
        margin-right: 0 !important;
        margin-left: 0 !important;
        padding: 0;
    }

    .social-single-icon i {
        font-size: 44px;
    }

    .social-single-icon p {
        font-size: 16px;
        margin: 0;
        margin-top: 10px;
    }

    .footer-text i {
        font-size: 18px;
    }

    .footer-text p {
        font-size: 18px;
    }

    .share-sub a {
        display: block;
        background: #0AAFDD;
        height: 50px;
        width: 50px;
        text-align: center;
        border-radius: 50%;
    }

    .share-sub a i {
        font-size: 19px;
        margin-top: 14px;
    }

    .share-main {
        position: relative;
    }

    .share-sub {
        position: absolute;
        top: -24px;
        right: 0;
        z-index: 9999;
    }

    /* Media */

    @media (max-width: 1720px) {
        .container-card-area {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .user-des {
            margin-left: 20px;
        }

        .user-des h2 {
            font-size: 18px;
            margin-bottom: 0px;
        }

        .user-des span {
            font-size: 14px;
        }

        .social-single-icon p {
            font-size: 14px;
            margin: 0;
            margin-top: 10px;
        }

        .banner {
            height: 40vh;
        }
    }
</style>
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
                            <img src="{{asset('img/person.jpg')}}" alt="user" class="img-fluid">
                        </div>
                        <div class="col-9 user no-gutters">
                            <div class="d-flex h-100 justify-content-start align-items-center text-white">
                                <div class="user-des">
                                    <h2>Anica Wilton</h2>
                                    <span>Web Designer and Developer</span>
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
                                        <p>Phone</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-file-alt"></i>
                                        <p>Text</p>
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
                                        <p>Wikipedia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-5">
                            <div class="row social-box">
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>Migrate</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-youtube"></i>
                                        <p>Youtube</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-twitter"></i>
                                        <p>Twitter</p>
                                    </div>
                                </div>
                                <div class="col-3 social-icon">
                                    <div class="social-single-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                        <p>Linkdin</p>
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