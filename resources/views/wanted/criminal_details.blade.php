<x-guest-layout>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6></h6>
          <h2>Wanted Criminal Details</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 templatemo-item-col">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>{{$wanted->price}}</span>
                      </div>
                      <img src="{{url('storage/'.$wanted->attachment)}}" alt="avatar" style="max-width:100%">
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>{{date('M', strtotime($wanted->created_at))}}<span>{{date('d', strtotime($wanted->created_at))}}</span></h6>
                      </div>
                      <h4>{{$wanted->first_name}} {{$wanted->last_name}}</h4>
                      <p>{{$wanted->message}}</p>
                      <p>{{$wanted->gender}}</p>
                      <p>{{$wanted->crime}}</p>
                      <p>{{$wanted->occupation}}</p>
                      <p>{{$wanted->marital_status}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-footer />
  </section>

</x-guest-layout>