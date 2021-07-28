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
                             
                                <form  method="POST" action="mail.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                              <!-- Name input-->
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                                                    <label for="name">First Name</label>
                                                  
                                                </div>

                                        </div>

                                        <div class="col-6">
                                              <!-- Name input-->
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                                                    <label for="name">Surname</label>
                                                 
                                                </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                             <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                                                <label for="email">Email address</label>
                                               
                                            </div>
                                        </div>
                                        <div class="col-6">

                                           <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="DOB" type="text" placeholder="12-345678X90" required />
                                                <label for="dob">DOB</label>
                                              
                                            </div>
                                            <!-- Message input-->

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                            
                                                <select class="form-control"  type="select"  required>
                                                <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            
                                              
                                            </div>
                                          
                                        </div>

                                        <div class="col-6">

                                        <!--  -->

                                        <div class="form-floating mb-3">
                                            <label class="form-control"   for="IDCopies"> National ID or Passport </label>
                                            <input class="form-control"  type="file" name="IDCopies"
                                            
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
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
             
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">


        <?php 
 include('inc/footer.php')
?>


</html>
