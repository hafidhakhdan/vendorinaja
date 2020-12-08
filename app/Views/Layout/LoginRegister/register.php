<!-- Modal Pilih Metode Register (Register with google/Register with email) -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content d-flex">
            <div class="modal-header align-items-center flex-column d-flex">
                <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title " id="exampleModalLabel">Join Vendorin.aja</h5>
            </div>
            <div class="modal-body d-flex flex-column align-items-center mt-3 ">
                <div class="button d-flex flex-column justify-content-between pr-2 ">
                    <button class="btn btn-signin mb-3">
                        <img class="mr-2" width="22" height="22" src="/assets/img/google.svg" alt="google">
                        <span>Sign up with google</span>
                    </button>
                    <button class="btn btn-signin" id="signup-2" data-toggle="modal" data-target="#exampleModal4">
                        <img class="mr-3" width="22" height="22" src="/assets/img/email.svg" alt="email">
                        <span>Sign up with email</span>
                    </button>
                </div>
                <p class="mt-5">Already have an account? <span data-toggle="modal" id="back-signin" data-target="#exampleModal" data-whatever="@fat">Sign in</span></p>
                <div class="contentFooter mt-5">
                    <p>Click "Sign in" to agree to Vendorin.aja</p>
                    <p>Terms of Service and acknowledge that</p>
                    <p>Vendorin.aja Privacy Policy applies to you</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Register (input pass dan email) -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content d-flex">
            <div class="modal-header align-items-center flex-column d-flex">
                <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title " id="exampleModalLabel">Sign Up with email</h5>
            </div>
            <form action="../Auth/register" method="POST">
                <div class="modal-body d-flex flex-column align-items-center mt-3 ">
                    <p>Enter your email address to create an account</p>
                    <div class="button d-flex flex-column justify-content-between pr-2 ">
                        <div class="form-group d-flex flex-column">
                            <span>Your email</span>
                            <input class="form-control pl-3 mt-3 border border-secondary " type="text" name="email" id="email">
                        </div>
                        <div class="form-group d-flex flex-column">
                            <span>Your password</span>
                            <input class="form-control mt-3 border-secondary pl-3" type="password" name="password" id="password">
                        </div>
                    </div>
                    <button type="submit" id="go-signin" class="mt-4 btn btn-dark">Continue</button>
                    <span class="mt-4 mb-4 allSign" id="back-signup">
                        < All sign up options</span> </div> </div> </div> </div> </form>