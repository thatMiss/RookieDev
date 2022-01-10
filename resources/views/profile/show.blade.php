<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Profile') }}
        </h2>
    </x-slot>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{url('storage/'.$currentUser->avatar)}}">
                    <span class="font-weight-bold mt-3 mb-2">{{$currentUser->name}}</span>
                    <span class="text-black-50 mb-2">{{$currentUser->email}}</span>
                    <span class="text-uppercase">{{$currentUser->user_role}}</span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    @if(session('success'))
                    <x-alert type="success">{{session('success')}}</x-alert>
                    @endif
                    <form action="{{route('profile.update', $currentUser->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Avatar</label>
                                <input name="adminAvatar" accept="image/png, image/jpg, image/jpeg, image/gif" type="file" class="form-control">
                            </div>

                            <div class="col-md-12"><label class="labels">Mobile Number</label>
                                <input name="phone" type="text" class="form-control" value="{{$currentUser->phone_number}}">
                            </div>

                            <div class="col-md-12"><label class="labels">Address</label>
                                <input name="address" type="text" class="form-control" placeholder="enter address line 1" value="{{$currentUser->address}}">
                            </div>

                            <div class="col-md-12"><label class="labels">Area</label>
                                <input name="area" type="text" class="form-control" placeholder="enter address line 2" value="{{$currentUser->area}}">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>