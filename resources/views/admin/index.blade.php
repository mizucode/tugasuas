<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Admin TugasMU</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
			integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.1/css/ionicons.min.css"
		/>
        @vite('resources/css/app.css')
	</head>
	<body>
		<div class="wrapper">
			<!-- Preloader -->

			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav flex justify-start">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"
							><i class="fas fa-bars"></i
						></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="/" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="/todos" class="nav-link">Todos</a>
					</li>
				</ul>

				<!-- Right navbar links -->
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="index3.html" class="brand-link">
					<img
						src="{{ asset('storage/img/ikuyo.png') }}"
						alt="AdminLTE Logo"
						class="brand-image img-circle elevation-3"
						style="opacity: 0.8"
					/>
					<span class="brand-text font-weight-light">TugasMu</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img
								src="{{ asset('storage/img/elaina.jpg') }}"
								class="img-circle"
								alt="User Image"
							/>
						</div>
						<div class="info">
							<a href="#" class="d-block"> {{ Auth::user()->name }}</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul
							class="nav nav-pills nav-sidebar flex-column"
							data-widget="treeview"
							role="menu"
							data-accordion="false"
						>
							<!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

							<li class="nav-item">
								<a href="pages/widgets.html" class="nav-link">
									<i class="nav-icon fas fa-th"></i>
									<p>
										Dashboard
										
									</p>
								</a>
							</li>
						</ul>
					</nav>
			
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="bg-white mt-4 rounded-lg py-2 flex justify-center  font-semibold text-secondaryDark">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
				</div>

				
			</aside>

			
			<div class="content-wrapper">
				<div class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0">Selamat Datang  {{ Auth::user()->name }}</h1>
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				
				@include('admin.static')

    

                @include('admin.userdata')

         

                @include('admin.userposting')

                @include('admin.userrole')
                @include('admin.userban')
				
			</div>
		
			<footer class="main-footer">
				<strong
					>Copyright &copy; 2023
					<a href="https://adminlte.io">TugasMU</a>.</strong
				>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 1.2.0
				</div>
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<script
			type="module"
			src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
		></script>
		<script
			nomodule
			src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
		></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
	</body>
</html>




































{{-- <h1>Welcome to Admin Panel</h1>
<p>Jumlah total postingan: {{ $totalTodos }}</p>
<p>Total User: {{ $totalUsers }}</p>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Gua ban lo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
            <td>
                @if ($user->role !== 'admin')
                    <form action="{{ route('admin.make-admin', $user->id) }}" method="POST">
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure you want to promote this user to admin?')">Make Admin</button>
                    </form>
                @endif
            </td>
            
            <td>
                <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                </form>
               
            </td>
           
        </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Total Postingan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
        <td>{{ $user->todos_count }}</td>
            
        </tr>
        @endforeach
       
    </tbody>
</table>

<br>

<div class="mt-4" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <i class="fa-solid fa-right-from-bracket font-bold text-white text-xl md:text-4xl"></i> logout
        
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div> --}}



