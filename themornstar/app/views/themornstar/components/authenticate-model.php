 <!-- Sign In Modal-->
 <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2><img class="d-block mx-auto" src="<?=ASSETS . THEME ?>img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">Don't have an account? </span><a class="text-light" href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up here</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signin-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label text-light mb-0" for="signin-password">Password</label><a class="fs-sm text-light" href="#">Forgot password?</a>
                      </div>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signin-password" placeholder="Enter password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign in         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign Up Modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Join Finder.<br>Get premium benefits:</h2>
                  <ul class="list-unstyled mb-4 mb-sm-5">
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Add and promote your listings</span></li>
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Easily manage your wishlist</span></li>
                    <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Leave reviews</span></li>
                  </ul><img class="d-block mx-auto" src="<?=ASSETS . THEME ?>img/signin-modal/signup-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-sm-4 pt-md-3"><span class="opacity-60">Already have an account? </span><a class="text-light" href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-name">Full name</label>
                      <input class="form-control form-control-light" type="text" id="signup-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signup-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password">Password <span class='fs-sm opacity-50'>min. 8 char</span></label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password-confirm">Confirm password</label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password-confirm" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-check form-check-light mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms"><span class='opacity-70'>By joining, I agree to the</span> <a href='#' class='text-light'>Terms of use</a> <span class='opacity-70'>and</span> <a href='#' class='text-light'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign up         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>