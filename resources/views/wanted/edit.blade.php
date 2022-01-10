<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('wanted.update', $mostWanted->id)}}" method='POST' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Edit Most Wanted
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="firstName" type="text" class="control-input" value="{{$mostWanted->first_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastName" type="text" class="control-input" value="{{$mostWanted->last_name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Gender:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="gender" type="text" class="control-input" value="{{$mostWanted->gender}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Age:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="age" type="text" class="control-input" value="{{$mostWanted->age}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Occupation:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="occupation" type="text" class="control-input" value="{{$mostWanted->occupation}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Crime:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="crime" type="text" class="control-input" value="{{$mostWanted->crime}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Marital Status:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="marital" type="text" class="control-input" value="{{$mostWanted->marital_status}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Message:</h4>
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" type="text" class="control-input" rows="5" cols="50">{{$mostWanted->message}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Price:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="price" type="text" class="control-input" value="{{$mostWanted->price}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Tag:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="tag" class="control-input">
                                <option value="new" {{$mostWanted->tag=='new'?'selected':''}}>New</option>
                                <option value="most" {{$mostWanted->tag=='most'?'selected':''}}>Most Wanted</option>
                                <option value="red" {{$mostWanted->tag=='red'?'selected':''}}>Red List</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Image:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="image" type="file" class="control-input">
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