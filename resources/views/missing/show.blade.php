<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-1"></i>
               Missing Person Details
            </div>

            <div class="card-body">

            <a href="{{route('missing.index')}} " class="btn btn-sm btn-primary mb-2"><i class="fas fa-chevron-left mr-4"></i> Back to List</a>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h4>Profile:</h4>
                    </div>
                    <div class="col-md-6">
                        <img class="rounded-circle mt-5" width="150px" height="100px" src="{{url('storage/'.$missingPerson->attachment)}}" class="rounded-3" style="height: 200px;" alt="Avatar" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>ID:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{sprintf('%011d', $missingPerson->id)}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Complainant Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->complainant_first_name}}</span>
                        <span>{{$missingPerson->complainant_last_name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Missing Person Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->missing_first_name}}</span>
                        <span>{{$missingPerson->missing_last_name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Email:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->email}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Phone:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->phone}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Gender:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->gender}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Age:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->age}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>City:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->city}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Last Seen:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->last_seen}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Address:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->address}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Description:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->description}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Status:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$missingPerson->status}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>