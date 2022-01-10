<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-1"></i>
                Accident Report Details
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <h4>Profile:</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url('storage/'.$accidentReport->attachment)}}" class="rounded-3" style="height: 200px;" alt="Avatar">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4>Published At:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->created_at}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>First Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->first_name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Last Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->last_name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>E-mail:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->email}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Phone:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->phone}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Date:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->date}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>City:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->city}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Status:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->status}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Location:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$accidentReport->location}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Message:</h4>
                    </div>
                    <div class="col-md-6">
                        <p>{{$accidentReport->message}}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>