<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0, 0.5)">
    <div class="container">
        <!-- Logo di sebelah kiri -->
        <a class="navbar-brand" href="/">
            <img src="/img/Logo.png" alt="Coffee Logo" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Tombol navigasi di sebelah kanan -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <div class="navbar-brand">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-brand">
                    <a class="nav-link {{ ($title === 'Products') ? 'active' : '' }}" href="/products">Products</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-brand">
                    <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="navbar-brand">
                    <a class="nav-link {{ ($title === 'Contact') ? 'active' : '' }}" href="/contact">Contact Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
