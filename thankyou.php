<?php include "header.php"; ?>
<section class="py-4 bg-light  inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                     Thank you!       
                  </h4>
               </div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="#"><i class="icofont-ui-home"></i> Home</a>  /  <span>Thank you</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="faq-page py-5 bg-light border-top">
         <div class="container">
            <div class="row">
               <div class="col-md-12 mx-auto">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="bg-white p-4 shadow-sm rounded h-100">
                           <h3 class="mt-0 mb-3">We have received your message, we will contact to you shortly.</h3>
                           <p><strong>Your Name:</strong> <?php echo $_POST['fullname']; ?></p>
                           <p><strong>Your Phone:</strong> <?php echo $_POST['phone']; ?></p>
                           <p><strong>Your Email:</strong> <?php echo $_POST['email']; ?></p>
                           <p><?php echo $_POST['message']; ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include "footer.php"; ?>