<x-guest-layout>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <br> <br>
              <form id="contact" action="{{route('missing.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Report Missing!</h2>
                  </div>
                  <div class="col-lg-12 text-end">
                    <a class="btn btn-lg mb-5 text-white" style="background:#A12C2F" href="{{route('report-missing')}}?anonymous=true">Report Anonymously</a>
                  </div>
                  @if(session('success'))
                  <x-alert type="success">
                    {{session ('success')}}
                  </x-alert>
                  @endif
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="complainantFirstName" type="text" id="complainantFirstName" placeholder="Complainant First Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="complainantLastName" type="text" id="complainantLastName" placeholder="Complainant Last Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="phone" type="tel" id="phone" placeholder="Telephone Number*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="missingFirstName" type="text" id="missingFirstName" placeholder="Missing First Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="missingLastName" type="text" id="missingLastName" placeholder="Missing Last Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <select name="gender">
                      <option value="0">Missing Person Gender</option>
                      <option>Female</option>
                      <option>Male</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="age" type="text" id="age" placeholder="Missing Person Age*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="city" type="city" id="city" placeholder="City*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="address" type="text" id="address" placeholder="Address*" required="">
                    </fieldset>
                  </div>
                  <div class="col">
                    <label class="col-md-8">Missing Person Last Seen: </label>
                    <fieldset class="col-md-6">
                      <input name="lastSeen" type="date" id="lastSeen" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="description" type="text" id="description" placeholder="Description of The Missing Person*" required=""></textarea>
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