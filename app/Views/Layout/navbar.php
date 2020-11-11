 <!-- NAVBAR FUNCTION -->
    <nav class="d-flex">
        <div class="logo">
            <h1>Vendorinaja</h1>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Why Vendorinaja?</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Pricing</a></li>
        </ul>
        <button class="getstarted" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Get Started</button>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Modal Pilih Metode Login (signin with google/signin with email) -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content d-flex">
            <div class="modal-header align-items-center flex-column d-flex">
              <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title " id="exampleModalLabel">Welcome Back.</h5>
            </div>
            <div class="modal-body d-flex flex-column align-items-center mt-3 ">
                <div class="button d-flex flex-column justify-content-between pr-2 ">
                    <button class="btn btn-signin mb-3">
                      <img class="mr-2" width="22" height="22" src="assets/img/google.svg" alt="google">
                       <span>Sign in with google</span>
                    </button>
                  <button class="btn btn-signin" id="signin" data-toggle="modal" data-target="#exampleModal2">
                   <img class="mr-3" width="22" height="22" src="assets/img/email.svg" alt="email"> 
                   <span>Sign in with email</span> 
                  </button>  
                </div>
                <p class="mt-5">No account? but Create one</p>
                <div class="contentFooter mt-5">
                  <p>Click "Sign in" to agree to Vendorin.aja</p>
                  <p>Terms of Service and acknowledge that</p>
                  <p>Vendorin.aja Privacy Policy applies to you</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Modal Login (input pass dan email) -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Login Vendorinaja</h4>
            <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5 d-flex">
              <img class="mr-3 mt-1"  width="22" height="22" src="assets/img/email.svg" alt="email"> 
              <input type="email" placeholder="email..." id="defaultForm-email" class="form-control validate">
            </div>
            <div class="md-form mb-4 d-flex">
              <img class="mr-3 mt-1" width="22" height="22" src="assets/img/padlock.svg" alt="email">
              <input type="password" placeholder="password..." id="defaultForm-pass" class="form-control validate">
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-warning text-white pl-4 pr-4">Login</button>
          </div>
        </div>
      </div>
    </div>