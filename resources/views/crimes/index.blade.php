<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Crime Report Table</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Crime Reports
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($crimes as $crime)
                        <tr>
                            <td>{{$crime->id}}</td>
                            <td>{{$crime->first_name}} {{$crime->last_name}}</td>
                            <td>{{$crime->email}}</td>
                            <td>{{$crime->phone}}</td>
                            <td>
                                <a href="{{route('crimes.show', $crime->id)}} " class="btn btn-sm btn-primary mb-2"><i class="far fa-eye mr-4"></i>View</a>
                                <a href="{{route('crimes.edit', $crime->id)}}" class="btn btn-sm btn-success mb-2"><i class="far fa-edit mr-4"></i>Edit</a>
                                <a href="#deleteModal{{$crime->id}}" class="btn btn-sm btn-danger mb-2" data-bs-toggle='modal'><i class="fas fa-trash-alt mr-4"></i>Delete</a>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$crime->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash mr-5"></i> Delete Crime Report</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('crimes.destroy', $crime->id)}}" id="deleteModalForm{{$crime->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <p>Are you sure you want to delete the crime report with id #{{$crime->id}}?</p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" {{"onclick=deleteEntity(".$crime->id.")"}}>OK</button>
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