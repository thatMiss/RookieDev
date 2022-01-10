<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('missing.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Add New Missing Person
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Complainant First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="complainantFirstName" type="text" id="complainantFirstName" placeholder="Complainant First Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Complainant Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="complainantLastName" type="text" id="complainantLastName" placeholder="Complainant Last Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Missing Person First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="missingFirstName" type="text" id="missingFirstName" placeholder="Missing First Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Missing Person Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="missingLastName" type="text" id="missingLastName" placeholder="Missing Last Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>E-mail:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="tel" id="phone" placeholder="Telephone Number*" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Gender:</h4>
                        </div>
                        <div class="col-lg-6">
                            <select name="gender">
                                <option value="0">Missing Person Gender</option>
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Age:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="age" type="text" id="age" placeholder="Missing Person Age*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>City:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="city" type="city" id="city" placeholder="City*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Seen:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastSeen" type="date" id="lastSeen" required="">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Address:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="address" type="text" id="address" placeholder="Address*" required="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h4>Description:</h4>
                        </div>
                        <div class="col-md-6">
                        <textarea name="description" type="text" class="form-control" id="description" placeholder="Description of The Missing Person*" required=""></textarea>
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
            <button type="submit">Add</button>

        </form>
    </div>
</x-app-layout>