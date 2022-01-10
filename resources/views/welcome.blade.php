<x-guest-layout>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h6>POLICE</h6>
              <h2>Our Mission</h2>
              <p>Protect the people and uphold the Constitution of the Earth</p>
              <div class="main-button-red">
                <div class="scroll-to-section"><a href="#contact">Contact Us Now!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            @foreach($missingPersons as $missing)
            <div class="item">
              <div class="icon">
                <img src="{{url('storage/'.$missing->attachment)}}" alt="avatar">
              </div>
              <div class="down-content">
                <h4>{{$missing->missing_first_name}} {{$missing->missing_last_name}}, Age: {{$missing->age}}</h4>
                <p>{{$missing->description}}</p>
              </div>
            </div>
            @endforeach
          </div>
          <h4 class="text-white my-5 text-center">Recent Missing Persons</h4><hr class="text-white">
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
          </div>
        </div>
      </div>
  </section>


  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Are You in Danger Send Message Now!</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Mail*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Subject*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Your Message*" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>155</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>police@police.com</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.police.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <x-footer />
  </section>


</x-guest-layout>