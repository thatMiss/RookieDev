<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('users.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Add New User
                </div>

                <div class="card-body">

                <div class="row">
                        <div class="col-md-6">
                            <h4>Avatar:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminAvatar" accept="image/png, image/jpg, image/jpeg, image/gif" type="file" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminName" type="text" class="control-input" placeholder="User Name" value="{{old('adminName')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Email:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminEmail" type="text" class="control-input" placeholder="Email" value="{{old('adminEmail')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Password:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="password" type="password" class="control-input" placeholder="Password" value="{{old('password')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Password Confirmation:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="password_confirmation" type="password" class="control-input" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone Number:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminPhone" type="text" class="control-input" placeholder="Phone Number" value="{{old('adminPhone')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>User Role:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="adminRole" type="text" class="control-input">
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
                            <textarea name="adminAddress" type="text" class="control-input" placeholder="Address">{{old('adminAddress')}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Attached Department:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="adminArea" type="text" class="control-input" placeholder="Department" value="{{old('adminArea')}}">
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</x-app-layout>