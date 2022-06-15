<?php
include("./include/header.php");
// session_start();

// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//     $loggedin = true;
// }
// else {
//     $loggedin = false;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include("../include/db_connect.php"); 
  $category = $_POST['category'];
  $title = $_POST['title'];
  $summary = $_POST['summary'];
  $author = $_POST['author'];
  $date = $_POST['date'];
  $blog_file = $_FILES["file"];


    // for image upload 
     $filename = $blog_file['name'];
     $filerror = $blog_file['error'];
     $filetmp = $blog_file['tmp_name'];

     $fileext = explode('.',$filename);
     $filecheck = strtolower(end($fileext));


    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck,$fileextstored)){
        $destinationfile ='./blogimage/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

    }
    $sql = "INSERT INTO `blogs` (`category`, `image`, `title`, `summary`, `date`, `author`) VALUES ('$category', '$destinationfile', '$title', '$summary', '$date', '$author')";
    $result = mysqli_query($conn, $sql);
    echo '<script>alert("Sucessfully Posted")</script>';

}
?>
    <script src="./ckeditor/ckeditor.js"></script>




<!-- start page content wrapper-->
<div class="page-content-wrapper">
  <!-- start page content-->
  <div class="page-content">



    <div class="row">
      <div class="col-xl-8 mx-auto">

        <div class="card">
          <div class="card-body">
            <div class="border p-3 rounded">
              <h6 class="mb-0 text-uppercase"> Upload Blog</h6>
              <hr>
              <form class="row g-3" method="POST" enctype="multipart/form-data" >
                <div class="col-12">
                  <label class="form-label">Title</label>
                  <input type="text" name="title" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Summary</label>
                  <textarea class="form-control" name="summary" id="blog_desc" cols="80" rows="20" required></textarea>                            
                </div>
                <div class="col-12">
                  <label class="form-label">Image</label>
                  <input class="form-control" type="file" name="file" id="file" required>
                </div>
                <div class="col-12">
                  <label class="form-label">Category</label>
                  <input type="text" class="form-control" name="category" list="Category" placeholder="-- Select --">
                  <datalist id="Category">
                    <option value="Eudcation"></option>
                    <option value="Error"></option>
                    <option value="Skill"></option>
                    <option value="Coding"></option>
                  </datalist>
                </div>
              
                <div class="col-12">
                  <label class="form-label">Date</label>
                  <input type="date" name="date" class="form-control">
                </div>
                

                <div class="col-12">
                  <label class="form-label">Author</label>
                  <input type="text" name="author" class="form-control">
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
<script>
  CKEDITOR.replace('blog_desc');
</script>



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