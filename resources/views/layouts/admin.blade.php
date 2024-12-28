<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('images/moussa.jpg') }}">
                    <h2>Salman<span class="danger">cli</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                
                <a href="{{ route('admin.contacts.index') }}">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Contacts</h3>
                </a>
                <a href="{{ route('admin.appointments.index') }}">

                    <span class="material-icons-sharp">calendar_today</span>
                    <h3>Appointments</h3>
                </a>
                <a href="{{ route('admin.blogs.index') }}">
                    <span class="material-icons-sharp">article</span>
                    <h3>Blogs</h3>
                </a>
                <!-- Add more links as needed -->
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <span class="material-icons-sharp">logout</span>
    <h3>Logout</h3>
</a>

            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>

                <div class="profile">
    <div class="info">
        <p>Hey, <b>moussa</b></p>
        <small class="text-muted">Admin</small>
    </div>
    <div class="profile-photo">
        <img src="{{ asset('images/profile-1.jpg') }}">
    </div>
</div>

            <!-- End of Nav -->
        </div>
    </div>

    <script src="{{ asset('js/orders.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
