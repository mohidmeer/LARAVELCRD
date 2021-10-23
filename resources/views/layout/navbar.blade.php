<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ECOMM</a><span>&nbsp; &nbsp;</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                 
                <a class="nav-link @if(Route::getCurrentRoute()->uri() == 'home')active @endif" aria-current="page" href="/home">  Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::getCurrentRoute()->uri() == 'customer')active @endif " href="/customer">Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::getCurrentRoute()->uri() == 'contact')active @endif " href="/contact">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>