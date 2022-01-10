<x-guest-layout>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <br> <br>
              <form id="contact" action="{{route('crimes.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Report Crime!</h2>
                  </div>
                  <div class="col-lg-12 text-end">
                  <a class="btn btn-lg mb-5 text-white" style="background:#A12C2F" href="{{route('report-crime')}}?anonymous=true">Report Anonymously</a>
                  </div>
                  @if(session('success'))
                  <div class="alert alert-success" role="alert">
                    {{session ('success')}}
                  </div>
                  @endif
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="firstName" type="text" id="firstName" placeholder="First Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="lastName" type="text" id="lastName" placeholder="Last Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="phone" type="tel" id="tel" placeholder="Telephone Number*" required="">
                    </fieldset>
                  </div>
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
                      <input name="subject" type="text" id="subject" placeholder="Subject*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <select name="crimeType" class="form-control" id="crimeType" required="true">
                        <option>Select Crime Type</option>
                        <option value="robbery">Robbery</option>
                        <option value="rape">Rape</option>
                        <option value="theft">Theft</option>
                        <option value="assault">Assault</option>
                        <option value="arson">Arson</option>
                        <option value="fraud">Fraud</option>
                        <option value="vandalism">Vandalism</option>
                        <option value="murder">Murder</option>
                        <option value="kidding">Kidnapping</option>
                        <option value="drugs">Drug Possession</option>
                        <option value="child abuse">Child Abuse</option>
                        <option value="bullying">Bullying</option>
                        <option value="cyber">Cyber </option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="location" type="text" class="form-control" id="location" placeholder="Crime Location*" required="">
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