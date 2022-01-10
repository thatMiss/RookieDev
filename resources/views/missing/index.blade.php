<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Missing Table</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Missing Person List
            </div>

            <div class="card-body">
                @if(session('success'))
                <x-alert type='success'>{{session('success')}}</x-alert>
                @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Complaint Name</th>
                            <th>Missing Person Name</th>
                            <th>Complaint Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($mpersons as $missingPerson)
                        <tr>
                            <td>{{$missingPerson->id}}</td>
                            <td>{{$missingPerson->complainant_first_name}} {{$missingPerson->complainant_last_name}}</td>
                            <td>{{$missingPerson->missing_first_name}} {{$missingPerson->missing_last_name}}</td>
                            <td>{{$missingPerson->phone}}</td>
                            <td>
                                <a href="{{route('missing.show', $missingPerson->id)}} " class="btn btn-sm btn-primary mb-2"><i class="far fa-eye mr-4"></i> View</a>
                                <a href="{{route('missing.edit', $missingPerson->id)}}" class="btn btn-sm btn-success mb-2"><i class="far fa-edit mr-4"></i> Edit</a>
                                @if($missingPerson->confirmed==0)
                                <a href="#confirmModal{{$missingPerson->id}}" class="btn btn-sm mb-2" style="background:#33cccc" data-bs-toggle='modal'><i class="far fa-check-circle mr-4"></i> Confirm</a>

                                @endif
                                <a href="#deleteModal{{$missingPerson->id}}" class="btn btn-sm btn-danger mb-2" data-bs-toggle='modal'><i class="fas fa-trash-alt mr-4"></i> Delete</a>
                            </td>

                        </tr>
                        @if($missingPerson->confirmed==0)
                        <!--Confirm Modal -->
                        <div class="modal fade" id="confirmModal{{$missingPerson->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="fa fa-check-circle mr-5"></i> Confirm Missing Person</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('confirm-missing')}}" id="confirmModalForm{{$missingPerson->id}}">
                                            @csrf
                                            <p>Are you sure you want to display the missing person record with id #{{$missingPerson->id}}?</p>
                                            <input type="hidden" name="confirmMissing" value="{{$missingPerson->id}}">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" {{"onclick=confirmEntity(".$missingPerson->id.")"}}>OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function confirmEntity(id) {
                                var form = document.getElementById('confirmModalForm' + id)
                                form.submit()
                            }
                        </script>
                        @endif
                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{$missingPerson->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash mr-5"></i> Delete Missing Person</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('missing.destroy', $missingPerson->id)}}" id="deleteModalForm{{$missingPerson->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <p>Are you sure you want to delete the missing person record with id #{{$missingPerson->id}}?</p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" {{"onclick=deleteEntity(".$missingPerson->id.")"}}>OK</button>
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