<?php
include '../inc/header.php';
$cat = new product();
$get = $cat->show_product();



$cat = new banner();
$catId = $_GET['editid'];
$getcatbyid = $cat->getbannerbyid($catId);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['editid'])) {
    $updatecat = $cat->update_banner($_POST, $_GET['editid']);
    $getcatbyid = $cat->getbannerbyid($catId);
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
                        <li class="breadcrumb-item"><a href="catlist.php">Banner</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            if (isset($getcatbyid)) {
                $resultss = $getcatbyid->fetch_assoc();
                // echo  print_r($result);

            ?>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title"> Create Banner Form </div>

                            <?php
                            if (isset($updatecat)) {
                                echo $updatecat;
                            }
                            ?>

                        </div>

                        <div class="card-body">
                            <label for="selectform" class="form-label fs-14 text-dark">Chọn sản phẩm
                            </label>

                            <select class="form-select" name="bannerproductid" id="selectform" multiple=""
                                aria-label="multiple select example">
                                <?php
                                    if (isset($get)) {
                                        if ($get && $get->num_rows > 0) {
                                            $i = 0;
                                            while ($result = $get->fetch_assoc()) {
                                                # code...
                                    ?>
                                <option <?php
                                                        if ($resultss['bannerproductid'] == $result['productid']) {
                                                            echo 'selected ';
                                                        }
                                                        ?> value="<?php echo  $result['productid']; ?>">
                                    <?php echo  $result['productid']; ?> : <?php echo  $result['productname']; ?>
                                </option>
                                <?php echo $result['categoryname'] ?></option>
                                <?php
                                                $i++;
                                            }
                                        } else {
                                            ?>
                                <?php
                                        }
                                    }
                                    ?>
                            </select>

                        </div>
                        <img style="width: 800px;"
                            src="<?php echo 'data:image/png;base64,' . base64_encode($resultss['bannerimg']); ?>"
                            class="img-thumbnail" alt="Responsive image">
                        <div class="card-body">
                            <label for="formFile" class="form-label fs-14 text-dark">Chọn ảnh sản phẩm
                            </label>
                            <input class="form-control" name="image" type="file" id="formFile">
                            <button class="btn btn-primary" type="submit">Save</button>

                        </div>


                    </div>
                </div>

            </div>
            <?php
            } ?>
        </form>

    </div>
</div>
<!--APP-CONTENT CLOSE-->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i
                            class="fe fe-search header-link-icon fs-18"></i></a> <input type="search"
                        class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a
                        href="javascript:void(0);" class="input-group-text" id="voice-search"><i
                            class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);"
                        class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i
                            class="fe fe-more-vertical"></i> </a>
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
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                        class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                            class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span>
                </div>
                <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                            href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);"
                            data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
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