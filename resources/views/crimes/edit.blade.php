<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('crimes.update', $crimeReport->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Edit Crime Report Details
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="firstName" type="text" id="firstName" placeholder="First Name*" required="" value="{{$crimeReport->first_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastName" type="text" id="lastName" placeholder="Last Name*" required="" value="{{$crimeReport->last_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>E-mail:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="" value="{{$crimeReport->email}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="tel" id="tel" placeholder="Telephone Number*" required="" value="{{$crimeReport->phone}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Date:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="date" type="date" id="date" placeholder="Date*" required="" value="{{$crimeReport->date}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>City:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="city" type="city" id="city" placeholder="City*" required="" value="{{$crimeReport->city}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Crime Type:</h4>
                        </div>
                        <div class="col-md-6">
                        <input name="crimeType" type="text" class="form-control" id="crimeType" placeholder="Crime Type*" required="" value="{{$crimeReport->type}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Location:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="location" type="text" class="form-control" id="location" placeholder="Crime Location*" required="" value="{{$crimeReport->location}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Message:</h4>
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Your Message*" required="">{{$crimeReport->message}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Attachment:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="attachment" type="file" class="control-input">
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