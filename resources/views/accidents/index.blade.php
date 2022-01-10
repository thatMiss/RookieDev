<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Accident Report Table</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Accident Reports
            </div>

            <div class="card-body">
                @if(session('success'))
                <x-alert type='success'>{{session('success')}}</x-alert>
                @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($accidents as $accident)
                        <tr>
                            <td>{{$accident->id}}</td>
                            <td>{{$accident->first_name}} {{$accident->last_name}}</td>
                            <td>{{$accident->city}}</td>
                            <td>{{$accident->phone}}</td>
                            <td>
                                <a href="{{route('accidents.show', $accident->id)}} " class="btn btn-sm btn-primary mb-2"><i class="far fa-eye mr-4"></i>View</a>
                                <a href="{{route('accidents.edit', $accident->id)}}" class="btn btn-sm btn-success mb-2"><i class="far fa-edit mr-4"></i>Edit</a>
                                <a href="#deleteModal{{$accident->id}}" class="btn btn-sm btn-danger mb-2" data-bs-toggle='modal'><i class="fas fa-trash-alt mr-4"></i>Delete</a>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$accident->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash mr-5"></i> Delete Accident Report</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('accidents.destroy', $accident->id)}}" id="deleteModalForm{{$accident->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <p>Are you sure you want to delete the accident report with id #{{$accident->id}}?</p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" {{"onclick=deleteEntity(".$accident->id.")"}}>OK</button>
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