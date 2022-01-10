<x-guest-layout>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <br> <br>
              <form id="contact" action="{{route('accidents.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Report Accident!</h2>
                  </div>
                  @if(session('success'))
                  <x-alert type="success">
                    {{session ('success')}}
                  </x-alert>
                  @endif
                  
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="date" type="date" id="date" placeholder="Date*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="city" type="city" id="city" placeholder="City*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="location" type="text" class="form-control" id="location" placeholder="Accident Location*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Your Message*" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                  <input type="file" id="File" name="attachment">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-footer />
  </section>

</x-guest-layout>