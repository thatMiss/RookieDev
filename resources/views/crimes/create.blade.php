<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('crimes.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Report New Crime
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="firstName" type="text" id="firstName" placeholder="First Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastName" type="text" id="lastName" placeholder="Last Name*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>E-mail:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="tel" id="tel" placeholder="Telephone Number*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Date:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="date" type="date" id="date" placeholder="Date*" required="">
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
                            <h4>Crime Type:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="crimeType" class="form-control" id="crimeType" required="true">
                                <option>Select Crime Type</option>
                                <option value="robbery">Robbery</option>
                                <option value="rape">Rape</option>
                                <option value="theft">Theft</option>
                                <option value="assault">Assault</option>
                                <option value="arson">Arson</option>
                                <option value="fraud">Fraud</option>
                                <option value="vandalism">Vandalism</option>
                                <option value="murder">Murder</option>
                                <option value="kidding">Kidnapping</option>
                                <option value="drugs">Drug Possession</option>
                                <option value="child abuse">Child Abuse</option>
                                <option value="bullying">Bullying</option>
                                <option value="cyber">Cyber </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Location:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="location" type="text" class="form-control" id="location" placeholder="Crime Location*" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Message:</h4>
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Your Message*" required=""></textarea>
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
            <button type="submit">Add</button>

        </form>
    </div>
</x-app-layout>