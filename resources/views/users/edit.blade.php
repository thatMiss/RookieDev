<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('users.store')}}">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Edit Administrator Details
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
                            <h4>Date of Registration:</h4>
                        </div>
                        <div class="col-md-6">
                            <span>{{$user->created_at}}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminName" type="text" class="control-input" value="{{$user->name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Email:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminEmail" type="text" class="control-input" value="{{$user->email}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone Number:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminPhone" type="text" class="control-input" value="{{$user->phone}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Admin Role:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="adminRole" type="text" class="control-input" value="{{$user->user_role}}">
                                <option value='user'>User</option>
                                <option value='super-admin'>Super Admin</option>
                                <option value='missing-person-admin'>Missing Person Admin</option>
                                <option value='most-wanted-admin'>Most Wanted Admin</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Address:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminAddress" type="text" class="control-input" value="{{$user->address}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Attached Department:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminArea" type="text" class="control-input" value="{{$user->area}}">
                        </div>
                    </div>

                </div>
            </div>
            <div>
            <button type="submit">Edit</button>
            </div>
        </form>
    </div>
</x-app-layout>