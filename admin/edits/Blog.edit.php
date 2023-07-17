<?php
include '../inc/header.php';
$cat = new blog();
$catId = $_GET['editid'];
$getcatbyid = $cat->getblogbyid($catId);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['editid'])) {
    $updatecat = $cat->update_blog($_POST, $_GET['editid']);
    $getcatbyid = $cat->getblogbyid($catId);
}
?>


<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title"> Edit Blog Form </div>
                            <?php
                            if (isset($updatecat)) {
                                echo $updatecat;
                            }
                            ?>



                        </div>
                        <?php
                        if (isset($getcatbyid)) {
                            $result = $getcatbyid->fetch_assoc();
                            // echo  print_r($result);

                        ?>
                            <div class="card-body">
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập tiêu đề
                                    </label> <input value="<?php echo $result['blogtitle'] ?>" name="blogtitle" type="text" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập header
                                    </label> <input value="<?php echo $result['blogheader'] ?>" name="blogheader" type="text" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập nội dung
                                    </label>

                                    <textarea name="blogdesc" rows="" cols="80" required>

                                    <?php echo $result['blogdesc'] ?>
                                </textarea>
                                    <script>
                                        CKEDITOR.replace('blogdesc');
                                    </script>
                                </div>
                                <div class="mb-3">
                                    <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['blogimg']); ?>" class="img-thumbnail" alt="Responsive image">

                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fs-14 text-dark">Chọn ảnh blog
                                    </label>
                                    <input class="form-control" name="image" type="file" id="formFile">

                                </div>
                                <div class="mb-3">
                                    <label for="selectform" class="form-label fs-14 text-dark">Chọn tag
                                    </label>

                                    <select class="form-select" name="blogtagid" id="selectform" multiple="" aria-label="multiple select example">

                                        <option <?php
                                                if ($result['blogtagid'] == 1) {
                                                    echo 'selected';
                                                }
                                                ?> value="1"> #SảnPhẩm</option>
                                        <option <?php
                                                if ($result['blogtagid'] == 2) {
                                                    echo 'selected';
                                                }
                                                ?> value="2">#KhuyếnMãi</option>
                                        <option <?php
                                                if ($result['blogtagid'] == 3) {
                                                    echo 'selected';
                                                }
                                                ?> value="3">#MuaSắmOnline</option>
                                        <option <?php
                                                if ($result['blogtagid'] == 4) {
                                                    echo 'selected';
                                                }
                                                ?> value="4">#ThanhToán</option>
                                        <option <?php
                                                if ($result['blogtagid'] == 5) {
                                                    echo 'selected';
                                                }
                                                ?> value="5">#ĐánhGiá</option>

                                    </select>
                                </div>

                            </div>
                        <?php
                        } ?>


                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>

                </div>
            </div>

    </div>
    </form>

</div>
</div>
<!--APP-CONTENT CLOSE-->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                </div>
                <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../inc/footer.php';
?>