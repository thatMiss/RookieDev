<x-guest-layout>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              @if(session('success'))
              <div class="alert alert-success" role="alert">
                {{session ('success')}}
              </div>
              @endif
              <form id="contact" action="{{route('contactUs')}}" method="post">
                @csrf
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
                      <input name="email" type="email" id="email" placeholder="Your Email*" required="">
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