@extends('includes.app')
@section('content')



<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url({{asset('abasas/assets/img/slide/hero-group-of-people-sharing-digital-business-card-1440x730.jpg)')}}">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Digital Business Cards for any industry.</h2>
            <p class="animate__animated animate__fadeInUp">Switchit’s digital business card platform makes designing a card simple, convenient, and reliable <br /> —create what you need in no time!.</p>
            <a href="{{route('login')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Try Now</a>
          </div>
        </div>
      </div>
      {{--
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('abasas/assets/img/slide/slide-2.jpg)')}}">
      <div class="carousel-container">
        <div class="container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item" style="background-image: url({{asset('abasas/assets/img/slide/slide-3.jpg)')}}">
      <div class="carousel-container">
        <div class="container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
    </div>
    --}}
  </div>
  {{--
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      --}}

  </div>
</section><!-- End Hero -->

<main id="main">


  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg p-4">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-5 align-items-stretch video-box" style="background-image: url({{asset('abasas/assets/img/why-us.jpg')}})" data-aos="zoom-in" data-aos-delay="100">
          <a href="https://youtu.be/PQGxu_oeCHw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

          <div class="content">
            <h3>SMART contact management</strong></h3>
            <p>
              Conveniently call or text contacts from the app, add new contacts, edit existing contacts, export contacts to your phone or add personalized notes.
            </p>
          </div>

          <div class="accordion-list">
            <!-- <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul> -->
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->





  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">



      <div class=" col-12 col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-tree"></i>
            <span data-toggle="counter-up">2400</span>
            <p class="text-center">Trees cut <strong> every day </strong> to make business cards</p>
            
          </div>
        </div>


        <div class=" col-12 col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-ui-v-card"></i>
            <span data-toggle="counter-up">60,000,000 </span>
            <p class="text-center"> Business cards printed <strong> every day </strong></p>
          
          </div>
        </div>


        <div class=" col-12 col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-globe"></i>
            <span data-toggle="counter-up">746,594</span>
            <p class="text-center">tons of CO2 emitted  annually</p>
          
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Counts Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Popular features</p>
      </div>

      <div class="row">


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2018/10/create-card.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">Add Media</a></h4>
            <p>Add video or an image, custom branding and third-party content to your digital business card.</p>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2018/10/custom.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">Custom Branding</a></h4>
            <p>Create elegant Digital Business Cards that are a true reflection of your brand.</p>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2018/10/create-card.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">File Attachment</a></h4>
            <p>Attach a document to your digital card such as an eBook, whitepaper, flyer, fillable PDF form and more.</p>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2020/04/multiple-phone-and-web-urls-icon-2.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">Add Multiple Phone, Web URLs</a></h4>
            <p>Add multiple phone numbers and web URLs to your digital card.</p>
          </div>
        </div>







        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2018/10/smart-contact-manager.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">SMART Contact Manager</a></h4>
            <p>Automatically capture contact details, add new contacts, edit existing contacts, export contacts, add notes and view historical data.</p>
          </div>
        </div>





        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" style="margin-top:20px;">
          <div class="icon-box">
            <div class=""><img src="https://switchitapp.com/wp-content/uploads/2018/10/localization.png" alt="" style="height:64px; width:64px; margin-bottom: 20px; "> </div>
            <h4><a href="">International Messaging</a></h4>
            <p>Share your digital card with people from other countries through text messaging.</p>
          </div>
        </div>




      </div>

    </div>
  </section><!-- End Services Section -->



  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">



      <div class="row content">
        <div class="col-lg-6 ">

          <div class="section-title text-center">

            <p>Traditional way</p>

            <div>88% of all cards are lost in this process</div>
          </div>
          <p>
            <img src="https://www.know.ee/assets/the_problem-d0c06e1212ac794a6896ee06ab571087bf943ed5e8ae130b266a38f6503734cb.png" width="80%" alt="" style="margin-left: 10%;">
          </p>

        </div>
        <div class="col-lg-6 pt-4 pt-lg-0  border-left">
          <div class="section-title text-center">

            <p>Our solution</p>

          </div>
          <p>
            <img src="https://www.know.ee/assets/KnoweeCard-d00bb1d4d1331466a803aa49a018f955191ce61162cb87bac1fe3e10e040e93e.png" width="80%" alt="" style="margin-left: 10%;">
          </p>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        
      
        <img src="https://switchitapp.com/wp-content/uploads/2020/03/switchit-sharing-options-640x413.png" width="60%" >
        <h3> Share your card with anyone</h3>
        <p>Easily share your digital card with anyone you meet through the online user portal, text message, email, social media, a QR Code, or POS system.</p>
        <a class="cta-btn" href="{{route('login')}}">Get Started</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pricing</h2>
        <p>Our Competing Prices</p>
      </div>

      <div class="row align-items-center">

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div>

      <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>Non consectetur a erat nam at lectus urna duis?</h4>
        </div>
        <div class="col-lg-7">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->

      <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
        </div>
        <div class="col-lg-7">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->

      <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
        </div>
        <div class="col-lg-7">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->

      <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
        </div>
        <div class="col-lg-7">
          <p>
            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->

      <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
        </div>
        <div class="col-lg-7">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
          </p>
        </div>
      </div><!-- End F.A.Q Item-->

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection