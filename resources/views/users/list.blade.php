<x-app-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">RookieDev</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin Table</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Administrator List
            </div>
            
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->user_role}}</td>
                            <td>
                                <a href="{{route('users.show', $user->id)}} " class="btn btn-sm btn-primary mb-2"><i class="far fa-eye mr-4"></i>View</a>
                                <a href="#" class="btn btn-sm btn-success mb-2"><i class="far fa-edit mr-4"></i>Edit</a>
                                <a href="#" class="btn btn-sm btn-danger mb-2"><i class="fas fa-trash-alt mr-4"></i>Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>