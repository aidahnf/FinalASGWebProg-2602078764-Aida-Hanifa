<nav class="navbar navbar-expand-lg" style="background-color: #E3F2FD; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <!-- Logo atau nama aplikasi -->
        <a class="navbar-brand" href="{{ route('home') }}" style="font-weight: bold; color: #0D47A1;">
            Casual Friends
        </a>

        <!-- Tombol toggle untuk menu pada layar kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="color: #0D47A1; font-weight: 500; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#BBDEFB'; this.style.color='#FFFFFF';" onmouseout="this.style.backgroundColor=''; this.style.color='#0D47A1';">
                        Home
                    </a>
                </li>

                <!-- Notification -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('notif') }}" style="color: #0D47A1; font-weight: 500; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#BBDEFB'; this.style.color='#FFFFFF';" onmouseout="this.style.backgroundColor=''; this.style.color='#0D47A1';">
                        Notification
                    </a>
                </li>

                <!-- Avatar -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('avatars.index') }}" style="color: #0D47A1; font-weight: 500; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#BBDEFB'; this.style.color='#FFFFFF';" onmouseout="this.style.backgroundColor=''; this.style.color='#0D47A1';">
                        Avatar
                    </a>
                </li>

                <!-- Profile -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.show') }}" style="color: #0D47A1; font-weight: 500; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#BBDEFB'; this.style.color='#FFFFFF';" onmouseout="this.style.backgroundColor=''; this.style.color='#0D47A1';">
                        Profile
                    </a>
                </li>

                <!-- Language Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #0D47A1; font-weight: 500; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#BBDEFB'; this.style.color='#FFFFFF';" onmouseout="this.style.backgroundColor=''; this.style.color='#0D47A1';">
                        Language
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarLanguage" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('set-locale', 'en') }}">
                                <span class="me-2">🌐</span> English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('set-locale', 'id') }}">
                                <span class="me-2">🌏</span> Indonesia
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
