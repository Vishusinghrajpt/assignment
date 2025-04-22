<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            transition: all 0.3s;
            background-color: #f8f9fa;
            padding: 1rem;
        }
        .sidebar.collapsed {
            width: 80px;
        }
        .sidebar .nav-link {
            color: #333;
            transition: background 0.2s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-item.active .nav-link {
            background-color: #e2e6ea;
            border-radius: 5px;
        }
        .sidebar.collapsed .nav-link span, .collapsed .logo {
            display: none;
        }
        .main-content {
            flex-grow: 1;
            transition: margin-left 0.3s ease;
            margin-right:2px;
        }
        .border-right-soft {
            border-right: 1px solid rgba(0, 0, 0, 0.1);
        }

        .toggle-btn {
            cursor: pointer;
        }
        .line{
            position: absolute;
            width: 250px;
            left: 0;
        }
        .collapsed .line{
            width: 80px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar border-right-soft" id="sidebar">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">
                <i class="fas fa-store"></i> <span class="ms-2 logo">E-Commerce</span>
            </h5>
        </div>
        <div class="line" >
            <hr>
        </div>
        <ul class="nav flex-column mt-5">
            @php $is_active = request()->routeIs('products.*'); @endphp
            <li class="nav-item {{ $is_active ? 'active' : '' }}">
                <a class="nav-link d-flex align-items-center" href="{{ route('products.index') }}">
                    <i class="fas fa-box"></i><span class="ms-2">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link d-flex align-items-center">
                        <i class="fas fa-sign-out-alt"></i><span class="ms-2">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content bg-light" id="main-content">
        <!-- Top Header -->
        <nav class="navbar navbar-light bg-light px-4 shadow-sm border-bottom">
            <i class="fas fa-bars toggle-btn" onclick="toggleSidebar()"></i>
            <span class="navbar-text ms-auto">Welcome, {{ Auth::user()->name }}</span>
        </nav>

        <!-- Page Content -->
        <div class="container-fluid mt-4">
            @yield('content')
        </div>
    </div>

    <!-- JS for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
