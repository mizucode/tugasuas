<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data User</h3>
                    </div>
                
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th style="width: 40px">Username</th>
                                    <th style="width: 40px">Role</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-block bg-red-600 text-white" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                       
                                    </td>
@endforeach
                                  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  
                </div>
               
            </div>
         
        </div>
    </div>
</section>