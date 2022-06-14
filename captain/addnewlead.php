<?php
include("./include/header.php");

?>



<!-- start page content wrapper-->
<div class="page-content-wrapper">
  <!-- start page content-->
  <div class="page-content">



    <div class="row">
      <div class="col-xl-8 mx-auto">

        <div class="card">
          <div class="card-body">
            <div class="border p-3 rounded">
              <h6 class="mb-0 text-uppercase"> Add New Lead</h6>
              <hr>
              <form class="row g-3">
                <div class="col-12">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Phone no</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Service</label>
                  <input type="text" class="form-control" list="service" placeholder="-- Select --">
                  <datalist id="service">
                    <option value="0">-Select-</option>
                    <option value="Assignment">Assignment</option>
                    <option value="Dissertation">Dissertation</option>
                    <option value="Essay Writing">Essay Writing</option>
                    <option value="Hand-Writing">Hand-Writing</option>
                    <option value="PHD Thesis Writing">PHD Thesis Writing</option>
                    <option value="project proposal for business">project proposal for business</option>
                    <option value="Project report for all course">Project report for all course</option>
                    <option value="Resume Writing">Resume Writing</option>
                    <option value="Study-Materials">Study-Materials</option>
                    <option value="Synopsis">Synopsis</option>
                    <option value="Exam Notes">Exam Notes</option>
                    <option value="Synopsis only">Synopsis only</option>
                    <option value="Project only">Project only</option>
                    <option value="Assignment project Both">Assignment &amp; project Both</option>
                    <option value="Content Writing">Content Writing</option>
                    <option value="SOP Writing">SOP Writing</option>
                    <option value="Others">Others</option>
                    <option value="Project &amp; Synopsis both ">Project &amp; Synopsis both </option>
                    <option value="Synopsis and Project">Synopsis and Project</option>
                    <option value="Career Consulting">Career Consulting</option>
                    <option value="Admission">Admission</option>
                    <option value="SEO Training">SEO Training</option>
                    <option value="Job Finding Services">Job Finding Services</option>
                  </datalist>
                </div>
                <div class="col-12">
                  <label class="form-label">University</label>
                  <input type="text" class="form-control" list="university" placeholder="-- Select --">
                  <datalist id="university">
                    <option value="0">-Select-</option>
                    <option value="amity">AMITY</option>
                    <option value="ignou">IGNOU</option>
                    <option value="smu">SMU</option>
                    <option value="ANNAMALAI">ANNAMALAI</option>
                    <option value="BVDU">BVDU</option>
                    <option value="DIMS">DIMS</option>
                    <option value="IMT">IMT</option>
                    <option value="ISBM">ISBM</option>
                    <option value="JNU-JAIPUR">JNU-JAIPUR</option>
                    <option value="LPU">LPU</option>
                    <option value="NMIMS">NMIMS</option>
                    <option value="SYMBOSIS">SYMBOSIS</option>
                    <option value="VMOU">VMOU</option>
                    <option value="Others">Others</option></select>
                  </datalist>
                </div>
                <div class="form-check">
                  <label class="form-label">Status</label>
                  <br>
                  <label class="form-check-label" for="pending">Pending</label>
                  <input class="form-check-input" type="radio" name="pending" id="pending">
                  <br>
                  <label class="form-check-label" for="Followup">Follow Up</label>
                  <input class="form-check-input" type="radio" name="Followup" id="Followup">
                  <br>
                  <label class="form-check-label" for="Payment">Payment Received</label>
                  <input class="form-check-input" type="radio" name="Payment" id="Payment">
                </div>

                <div class="col-12">
                  <label class="form-label">Enter Reminder Date</label>
                  <input type="date" class="form-control">
                </div>


                <div class="col-12">
                  <label class="form-label">Amount Paid</label>
                  <input type="number" class="form-control">
                </div>


                <div class="col-12">
                  <label class="form-label">Payment Method</label>
                  <input type="text" class="form-control" list="payment" placeholder="-- Select --">
                  <datalist id="payment">
                    <option value="Paytm">
                    <option value="UPI">
                    <option value="Gpay">
                    <option value="ICICI Bank">
                  </datalist>
                </div>
           


            <div class="col-12">
              <label class="form-label">Payment Date</label>
              <input type="date" class="form-control">
            </div>


            <div class="col-12">
              <label class="form-label">Main Requirement</label>
              <textarea class="form-control" rows="4" cols="4"></textarea>
            </div>



            <div class="col-12">
              <label class="form-label">Writer Message</label>
              <textarea class="form-control" rows="4" cols="4"></textarea>
            </div>

            <div class="col-12 mt-3">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>


</div>
<!-- end page content-->
</div>



<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top">
  <ion-icon name="arrow-up-outline"></ion-icon>
</a>
<!--End Back To Top Button-->

<!--start switcher-->
<div class="switcher-body">
  <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <h6 class="mb-0">Theme Variation</h6>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
        <label class="form-check-label" for="LightTheme">Light</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option1" checked>
        <label class="form-check-label" for="SemiDark">Semi Dark</label>
      </div>
      <hr />
      <h6 class="mb-0">Header Colors</h6>
      <hr />
      <div class="header-colors-indigators">
        <div class="row row-cols-auto g-3">
          <div class="col">
            <div class="indigator headercolor1" id="headercolor1"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor2" id="headercolor2"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor3" id="headercolor3"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor4" id="headercolor4"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor5" id="headercolor5"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor6" id="headercolor6"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor7" id="headercolor7"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor8" id="headercolor8"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!--end switcher-->


<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->

</div>
<!--end wrapper-->





<!-- JS Files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--plugins-->
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

<!-- Main JS-->
<script src="assets/js/main.js"></script>


</body>

</html>