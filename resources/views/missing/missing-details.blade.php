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
                    <div class="section-heading">
                        <h2 class="mt-5">Missing Person Details</h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                    <h2 class="text-center text-white">To Contact Call 155</h2>
                </div>
                <div class="col-lg-12 text-center py-5">
                    <img src="{{url('storage/'.$missingPerson->attachment)}}" class="img-fluid" alt="Responsive image" width="25%">
                    <h4 class="text-white mt-4">{{$missingPerson->missing_first_name}} {{$missingPerson->missing_last_name}}</h4>
                    <p>{{$missingPerson->gender}}, {{$missingPerson->age}} years old, {{$missingPerson->city}}</p>
                    <p>Last seen: {{$missingPerson->last_seen}}</p>
                    <p>Description: {{$missingPerson->description}}</p>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>