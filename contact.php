<?php include "header.php"; ?>
<section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                     Contact Us       
                  </h4>
               </div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="#"><i class="icofont-ui-home"></i> Home</a>  /  <span>Contact Us</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-5 bg-light border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 h-100 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">Get In Touch</h4>
                     <h6 class="text-dark"><i class="fa fa-map fa-fw pr-1"></i> Address :</h6>
                     <p class="pl-4">86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p>
                     <h6 class="text-dark"><i class="fa fa-phone fa-fw pr-1"></i> Phone :</h6>
                     <p class="pl-4">+91 12345-67890, (+91) 123 456 7890</p>
                     <h6 class="text-dark"><i class="fa fa-mobile fa-fw pr-1"></i> Mobile :</h6>
                     <p class="pl-4">(+20) 220 145 6589, +91 12345-67890</p>
                     <h6 class="text-dark"><i class="fa fa-envelope fa-fw pr-1"></i> Email :</h6>
                     <p class="pl-4">Chpoee@gmail.com, info@Chpoee.com</p>
                     <h6 class="text-dark"><i class="fa fa-link fa-fw pr-1"></i> Website :</h6>
                     <p class="pl-4 mb-0">www.askbootstrap.com</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">Feedback</h4>
                     <form name="sentMessage" id="contactForm"  action="mail.php" method="post">
                        <div class="control-group form-group">
                           <div class="controls">
                              <label>Full Name <span class="text-danger">*</span></label>
                              <input type="text" placeholder="Full Name" class="form-control" id="name" name="fullname">
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="control-group form-group col-md-6">
                              <label>Phone Number <span class="text-danger">*</span></label>
                              <div class="controls">
                                 <input type="tel" placeholder="Phone Number" class="form-control" id="phone" name="phone">
                                 <div class="help-block"></div>
                              </div>
                           </div>
                           <div class="control-group form-group col-md-6">
                              <div class="controls">
                                 <label>Email Address <span class="text-danger">*</span></label>
                                 <input type="email" placeholder="Email Address" class="form-control" id="email" name="email">
                                 <div class="help-block"></div>
                              </div>
                           </div>
                        </div>
                        <div class="control-group form-group mb-4">
                           <div class="controls">
                              <label>Message <span class="text-danger">*</span></label>
                              <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" name="message" style="resize:none"></textarea>
                              <div class="help-block"></div>
                           </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary btn-sm float-right">Send Message</button>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="h-100 p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.19658195564!2d75.78663251672796!3d30.900473637371658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1530462134939" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include "footer.php"; ?>