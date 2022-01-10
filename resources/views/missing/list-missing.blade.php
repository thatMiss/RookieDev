<x-guest-layout>
    <style>
        .if p {

            color: #fff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .if h2 {
            text-align: center;
        }
    </style>

    <section class="meetings-page" id="meeting">
        <div class="container if">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-5">
                        <h2 class="my-5">Recent Missing Persons</h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <h4 class="text-white">How do you announce a missing person?</h4>
                        <p>Tell them you'd like to report a missing person and give details like their name, date of birth, when you last saw them, and a physical description of them. You should also tell the police if the person has any mental or physical issues that make them particularly vulnerable.</p>
                        <a href="{{route('report-missing')}}" class="btn btn-sm btn-danger my-2">Report Now!</a>
                    </div>
                </div>
                @forelse($mpersons as $missingPerson)
                <div class="col-lg-4 templatemo-item-col py-0">
                    <img src="{{url('storage/'.$missingPerson->attachment)}}" width="100%" style="max-height:50%;max-width:75%">
                    <h4 class="text-white mt-4">{{$missingPerson->missing_first_name}} {{$missingPerson->missing_last_name}}</h4>
                    <p>{{$missingPerson->gender}} {{$missingPerson->age}} {{$missingPerson->city}}</p>
                    <div class="main-button">
                        <a href="{{route('missing-details', $missingPerson->id)}}">View More</a>
                    </div>
                </div>
                @empty
                <p class="text-center my-5 py-5">No Missing Person!</p>
                @endforelse

            </div>
        </div>

    </section>
</x-guest-layout>