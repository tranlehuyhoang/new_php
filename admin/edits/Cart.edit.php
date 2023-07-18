<?php
include '../inc/header.php';
$class = new user();
$show = $class->show_user();
$clas = new product();
$shows = $clas->show_product();
$code = new cart();
$catId = $_GET['editid'];
$getcatbyid = $code->getcartbyid($catId);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['editid'])) {
    $updatecat = $code->update_cart($_POST, $_GET['editid']);
    $getcatbyid = $code->getcartbyid($catId);
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
                        <li class="breadcrumb-item"><a href="catlist.php">Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <form action="" method="post">
            <?php

            if (isset($getcatbyid)) {
                $results = $getcatbyid->fetch_assoc();
                // echo  print_r($result);

            ?>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title"> Edit Cart Form </div>

                            <?php
                            if (isset($updatecat)) {
                                echo $updatecat;
                            }
                            ?>

                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="selectform" class="form-label fs-14 text-dark">Chọn User
                                </label>

                                <select required class="form-select" name="cartuserid" id="selectform" multiple=""
                                    aria-label="multiple select example">
                                    <?php
                                        if (isset($show)) {
                                            if ($show && $show->num_rows > 0) {
                                                $i = 0;
                                                while ($result = $show->fetch_assoc()) {
                                                    # code...
                                        ?>
                                    <option <?php

                                                            if ($results['cartuserid'] == $result['userid']) {
                                                                echo 'selected ';
                                                            }
                                                            ?> value="<?php echo $result['userid']; ?>">
                                        <?php echo $result['userid']; ?> :
                                        <?php echo $result['useremail']; ?> </option>

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
                            <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập Session
                                    user
                                </label> <input value="<?php echo  $results['cartsession']; ?>" name="cartsession"
                                    type="text" class="form-control" id="form-text" placeholder="">
                            </div>
                            <div class="mb-3"> <label for="form-number" class="form-label fs-14 text-dark">Nhập Số lượng
                                    sản
                                    phẩm
                                </label> <input value="<?php echo  $results['cartquantity']; ?>" name="cartquantity"
                                    type="number" class="form-control" id="form-text" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="selectform" class="form-label fs-14 text-dark">Chọn Product
                                </label>

                                <select class="form-select" name="cartproductid" id="selectform" multiple=""
                                    aria-label="multiple select example">
                                    <?php
                                        if (isset($shows)) {
                                            if ($shows && $shows->num_rows > 0) {
                                                $i = 0;
                                                while ($result = $shows->fetch_assoc()) {
                                                    # code...
                                        ?>
                                    <option <?php

                                                            if ($results['cartproductid'] == $result['productid']) {
                                                                echo 'selected ';
                                                            }
                                                            ?> value="<?php echo  $result['productid']; ?>">
                                        <?php echo  $result['productid']; ?> : <?php echo  $result['productname']; ?>
                                    </option>

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
                            <div class="mb-3">
                                <label for="selectform" class="form-label fs-14 text-dark">Chọn Status
                                </label>

                                <select class="form-select" id="selectform" multiple=""
                                    aria-label="multiple select example" name="cartstatus">

                                    <option <?php

                                                if ($results['cartstatus'] == 1) {
                                                    echo 'selected ';
                                                }
                                                ?> value="1">Chờ xác nhận</option>
                                    <option <?php

                                                if ($results['cartstatus'] == 2) {
                                                    echo 'selected ';
                                                }
                                                ?> value="2">Thành công</option>

                                </select>
                            </div>

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