<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-info-circle me-1"></i>
                Administrator Details
            </div>

            <div class="card-body">
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
                        <span>{{$user->phone}}</span>
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