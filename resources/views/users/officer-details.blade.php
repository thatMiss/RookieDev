<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-1"></i>
                Officer Details
            </div>

            <div class="card-body">

            <a href="{{route('officers-details')}} " class="btn btn-sm btn-primary mb-2"><i class="fas fa-chevron-left mr-4"></i> Back to List</a>

            <div class="row mb-3">
                    <div class="col-md-6">
                        <h4>Profile:</h4>
                    </div>
                    <div class="col-md-6">
                        <img class="rounded-circle mt-5" width="150px" height="150px" src="{{url('storage/'.$user->avatar)}}" class="rounded-3" style="height: 200px;" alt="Avatar" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>ID:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{sprintf('%011d', $user->id)}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Name:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->name}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Date of Registration:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->created_at}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Email:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->email}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Phone Number:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->phone_number}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Admin Role:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{strtoupper($user->user_role)}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Address:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->address}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4>Attached Department:</h4>
                    </div>
                    <div class="col-md-6">
                        <span>{{$user->area}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>