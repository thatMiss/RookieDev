<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-1"></i>
                Most Wanted Details
            </div>

            <div class="card-body">

            <a href="{{route('wanted.index')}} " class="btn btn-sm btn-primary mb-2"><i class="fas fa-chevron-left mr-4"></i> Back to List</a>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <h4>Profile:</h4>
                    </div>
                    <div class="col-md-6">
                        <img class="rounded-circle mt-5" width="150px" height="150px" src="{{url('storage/'.$mostWanted->attachment)}}" class="rounded-3" style="height: 200px;" alt="Avatar" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>ID:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{sprintf('%011d', $mostWanted->id)}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->first_name}}</span>
                        <span>{{$mostWanted->last_name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Published At:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->created_at}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Gender:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->gender}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Age:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->age}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Marital Status:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->marital_status}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Occupation:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->occupation}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Crime:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->crime}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Price:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->price}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Tag:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->tag}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Comment:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$mostWanted->message}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>