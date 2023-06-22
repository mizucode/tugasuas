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
                                        @if ($user->role !== 'admin')
                                            <form action="{{ route('admin.make-admin', $user->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you sure you want to promote this user to admin?')" class="btn btn-block btn btn-block bg-green-400">Jadikan Admin</button>
                                            </form>
                                            @else
                                            <button
															type="button"
															class="btn btn-block bg-blue"
														>
															Sudah Admin
														</button>
                                        @endif
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