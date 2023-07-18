 <?php

    include __DIR__ .  '/../inc/Header.php';
    $class = new compare();
    $show = $class->show_compare();

    if (isset($_GET['delid'])) {
        $delid = $_GET['delid'];
        $delete = $class->delete_compare($delid);
        $show = $class->show_compare();
    }
    ?>

 <div class="main-content app-content">
     <div class="container-fluid">
         <!-- Page Header -->
         <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
             <h1 class="page-title fw-semibold fs-18 mb-0">Data Tables
                 <a href="../creates/compare.create.php"><button type="button" class="btn btn-info">Create
                         +</button></a>

             </h1>
             <div class="ms-md-1 ms-0">
                 <nav>
                     <ol class="breadcrumb mb-0">
                         <li class="breadcrumb-item"><a href="home.php">Tables</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Compare Tables</li>

                     </ol>
                 </nav>
             </div>
         </div> <!-- Page Header Close -->

         <div class="row">
             <?php
                if (isset($delete)) {
                    echo $delete;
                }
                ?>
             <?php
                if (isset($show)) {
                    if ($show && $show->num_rows > 0) {
                        $i = 0;
                        while ($result = $show->fetch_assoc()) {
                            # code...
                ?>
             <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6"> <a href="javascript:void(0);">
                     <div class="card custom-card bg-dark overlay-card text-fixed-white"> <img
                             src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                             class="card-img" alt="...">
                         <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                             <div class="remove " style="margin-left: 20px;">
                                 <a onclick="return confirm('Xác nhận xóa')"
                                     href="?delid=<?php echo $result['compareid']; ?>">
                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                         data-bs-target="#deleteRecordModal">Remove</button>
                                 </a>
                             </div>
                             <div class="card-footer border-top-0 flex" style="display: flex;">
                                 <h6 class="fw-semibold mb-0 text-fixed-white"><?php echo $result['useremail']; ?> </h6>
                             </div>
                         </div>
                     </div>
                 </a>

             </div>
             <?php
                            $i++;
                        }
                    } else {
                        ?>
             <?php
                    }
                }
                ?>
         </div>

     </div>
 </div> <!-- End::app-content -->
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
 </div> <!-- Footer Start -->

 <?php

    include __DIR__ .  '/../inc/footer.php';

    ?>