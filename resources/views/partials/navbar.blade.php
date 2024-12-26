<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-nav">
      <a class="navbar-brand" href="/">Tempedia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "about") ? "active" : "" }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "informasi") ? "active" : "" }}" href="/informasi">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "mitra") ? "active" : "" }}" href="/mitra">Mitra</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hello, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-door-open"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is("login", "register") ? "active" : '' }}" href="/login"><i class="bi bi-door-closed"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
<style>

.mt-4{
  margin-top: 0 !important;
 }

.container-nav{
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
    --bs-gutter-x: 10rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)* .5);
    padding-left: calc(var(--bs-gutter-x)* .5);
    margin-right: 0;
    margin-left: 0;
}
</style>