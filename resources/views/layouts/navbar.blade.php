<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
        
        {{-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i>Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div> --}}
        <div class="container text-center">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="input-group w-100" style="max-width: 300px;"> <!-- Adjust max width as needed -->
                        <input 
                          type="text" 
                          class="form-control" 
                          placeholder="Search..." 
                          aria-label="Search" 
                          aria-describedby="search-button"
                          id="searchInput"
                        />
                        <button class="btn btn-primary" type="button" id="search-button" onclick="handleSearch()">
                          <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                </div>
        
                <div class="col-auto">
                    <a class="navbar-brand" href="#">Blogs</a>
                </div>
        
                <div class="col-auto">
                    <a class="navbar-brand" href="#">Login</a>
                    <button class="btn btn-primary" type="button">Subcribe</button>
                    <button class="btn btn-outline-light me-2" id="sidebarToggle">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
          
          
        
    </div>
</nav>
