<?php
include('inc/head.php');
?>

        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include('inc/nav.php') ?>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                           
                            <h1 class="fw-bolder">Register</h1>
                            <p class="lead fw-normal text-muted mb-0">Application Form for Mutare Teachers College</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                             
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <div class="row">
                                        <div class="col-6">
                                              <!-- Name input-->
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                                    <label for="name">First Name</label>
                                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                                </div>

                                        </div>

                                        <div class="col-6">
                                              <!-- Name input-->
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                                    <label for="name">Surname</label>
                                                    <div class="invalid-feedback" data-sb-feedback="name:required">A Surname is required.</div>
                                                </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                             <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                                <label for="email">Email address</label>
                                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                           <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="DOB" type="text" placeholder="12-345678X90" data-sb-validations="required" />
                                                <label for="dob">DOB</label>
                                                <div class="invalid-feedback" data-sb-feedback="dob:required">A dob is required.</div>
                                            </div>
                                            <!-- Message input-->

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                            
                                                <select class="form-control"  type="text"  data-sb-validations="required">
                                                <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            
                                                <div class="invalid-feedback" data-sb-feedback="message:required">A Gender is required.</div>
                                            </div>
                                          
                                        </div>

                                        <div class="col-6">

                                        <!--  -->

                                        <div class="form-floating mb-3">
                                            <label class="form-control"   for="IDCopies"> National ID or Passport </label>
                                            <input class="form-control"  type="file"  data-sb-validations="required" name="IDCopies"
                                            
                                            />
                                        
                                            <div class="invalid-feedback" data-sb-feedback="message:required">A IDCOPY is required.</div>
                                        </div>
                                        <!--  -->
                                                
                                        </div>
                                    </div>
                                  
                                   
                                 
                                  



                                 
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Chat with us</div>
                            <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Ask the community</div>
                            <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">Support center</div>
                            <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Call us</div>
                            <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">


        <?php 
 include('inc/footer.php')
?>


</html>
