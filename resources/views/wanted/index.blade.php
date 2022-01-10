<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Most Wanted Table</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Most Wanted List
            </div>

            <div class="card-body">
                @if(session('success'))
                <x-alert type='success'>{{session('success')}}</x-alert>
                @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Most Wanted Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Crime</th>
                            <th>Price</th>
                            <th>Occupation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($mostWanted as $wantedPerson)
                        <tr>
                            <td>{{$wantedPerson->id}}</td>
                            <td>{{$wantedPerson->first_name}} {{$wantedPerson->last_name}}</td>
                            <td>{{$wantedPerson->gender}}</td>
                            <td>{{$wantedPerson->age}}</td>
                            <td>{{$wantedPerson->crime}}</td>
                            <td>{{$wantedPerson->price}}</td>
                            <td>{{$wantedPerson->occupation}}</td>
                            <td>
                                <a href="{{route('wanted.show', $wantedPerson->id)}} " class="btn btn-sm btn-primary mb-2"><i class="far fa-eye mr-4"></i>View</a>
                                <a href="{{route('wanted.edit', $wantedPerson->id)}}" class="btn btn-sm btn-success mb-2"><i class="far fa-edit mr-4"></i>Edit</a>
                                <a href="#deleteModal{{$wantedPerson->id}}" class="btn btn-sm btn-danger mb-2" data-bs-toggle='modal'><i class="fas fa-trash-alt mr-4"></i>Delete</a>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$wantedPerson->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash mr-5"></i> Delete Most Wanted Person</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('wanted.destroy', $wantedPerson->id)}}" id="deleteModalForm{{$wantedPerson->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <p>Are you sure you want to delete the most wanted person with id #{{$wantedPerson->id}}?</p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" {{"onclick=deleteEntity(".$wantedPerson->id.")"}}>OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function deleteEntity(id) {
            var form = document.getElementById('deleteModalForm' + id)
            form.submit()
        }
    </script>
</x-app-layout>