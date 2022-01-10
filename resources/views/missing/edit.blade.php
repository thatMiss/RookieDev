<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('missing.update', $missingPerson->id)}}" method='POST' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Edit Missing Person
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Confirmation Status:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="confirmation">
                                <option value="1" {{$missingPerson->confirmed==1?'selected':''}}>Confirmed</option>
                                <option value="0" {{$missingPerson->confirmed==0?'selected':''}}>Unconfirmed</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Complainant First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="complainantFirstName" type="text" id="complainantFirstName" placeholder="Complainant First Name*" required="" value="{{$missingPerson->complainant_first_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Complainant Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="complainantLastName" type="text" id="complainantLastName" placeholder="Complainant Last Name*" required="" value="{{$missingPerson->complainant_last_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Missing Person First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="missingFirstName" type="text" id="missingFirstName" placeholder="Missing First Name*" required="" value="{{$missingPerson->missing_first_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Missing Person Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="missingLastName" type="text" id="missingLastName" placeholder="Missing Last Name*" required="" value="{{$missingPerson->missing_last_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>E-mail:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required="" value="{{$missingPerson->email}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="tel" id="phone" placeholder="Telephone Number*" required="" value="{{$missingPerson->phone}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Gender:</h4>
                        </div>
                        <div class="col-lg-6">
                            <select name="gender">
                                <option value="0">Missing Person Gender</option>
                                <option {{$missingPerson->gender=='Female'?'selected':''}}>Female</option>
                                <option {{$missingPerson->gender=='Male'?'selected':''}}>Male</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Age:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="age" type="text" id="age" placeholder="Missing Person Age*" required="" value="{{$missingPerson->age}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>City:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="city" type="city" id="city" placeholder="City*" required="" value="{{$missingPerson->city}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Seen:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastSeen" type="date" id="lastSeen" required="" value="{{$missingPerson->last_seen}}">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Address:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="address" type="text" id="address" placeholder="Address*" required="" value="{{$missingPerson->address}}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h4>Description:</h4>
                        </div>
                        <div class="col-md-6">
                            <textarea name="description" type="text" class="form-control" id="description" placeholder="Description of The Missing Person*" required="">{{$missingPerson->description}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Attachment:</h4>
                        </div>
                        <div class="col-md-6">
                            <input type="file" id="File" name="attachment">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>

        </form>
    </div>
</x-app-layout>