<x-guest-layout>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6></h6>
          <h2>Wanted Criminal's</h2>
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
              <div class="filters">
                <ul>
                  <li data-filter="*" class="active">All Wanted Criminal's</li>
                  <li data-filter=".new">New</li>
                  <li data-filter=".most">Most Wanted</li>
                  <li data-filter=".red">Red List</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                @foreach($mostWanted as $wanted)
                <div class="col-lg-4 templatemo-item-col all {{$wanted->tag}}">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>{{$wanted->price}}</span>
                      </div>
                      <a href="{{route('wanted-details', $wanted->id)}}"><img src="{{url('storage/'.$wanted->attachment)}}" alt="avatar" style="max-width:100%"></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>{{date('M', strtotime($wanted->created_at))}}<span>{{date('d', strtotime($wanted->created_at))}}</span></h6>
                      </div>
                      <a href="{{route('wanted-details', $wanted->id)}}">
                        <h4>{{$wanted->first_name}} {{$wanted->last_name}}</h4>
                      </a>
                      <p>{{$wanted->message}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-footer />
  </section>

</x-guest-layout>