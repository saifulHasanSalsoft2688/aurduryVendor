<?php
$title = "Store Management";
$pg = "store-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="add-category" class="add-category-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="category-management.php"></a> Store A</h2>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center my-5">
                    <div class="col-md-12">
                        <div class="bg-light2 rounded-10 text-center p-4">
                            <div class="media-left flex-shrink-0 mb-5 mb-lg-3">
                                <div class="profile-img text-center m-auto m-md-0">
                                    <div class="attached">
                                        <button name="file" class="btn p-0"
                                            onclick="document.getElementById('upload').click()">
                                            <img src="../assets/images/upload-img.png" class="img-fluid ml-0" alt="">
                                            <input type="file" id="upload" name="file">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark">Upload Image</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="fs-20 text-black fw-bold mb-0">Store Description:</h6>
                    </div>
                    <div class="col-md-9">
                        <div class="form-control d-inline-block mnw-100 fs-16 fw-normal text-gray rounded-10">
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
                            galley of type and scrambled it to make a type specimen book.
</p>
                        </div>
                    </div>
                </div>
                <a href="edit-store.php" class="btn btn-blue fs-18 fw-bold mt-4">Edit</a>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>