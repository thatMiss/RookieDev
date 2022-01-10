<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <form action="{{route('wanted.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Add Most Wanted
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>First Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="firstName" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Last Name:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="lastName" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Gender:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="gender" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Age:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="age" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Occupation:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="occupation" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Crime:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="crime" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Marital Status:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="marital" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Message:</h4>
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" type="text" class="control-input" rows="5" cols="50"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Price:</h4>
                        </div>
                        <div class="col-md-6">
                            <input name="price" type="text" class="control-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Tag:</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="tag" class="control-input">
                                <option value="new">New</option>
                                <option value="most">Most Wanted</option>
                                <option value="red">Red List</option>
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
            <button type="submit">Add</button>

        </form>
    </div>
</x-app-layout>