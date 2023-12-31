<?php $__env->startSection('dashboardcontent'); ?>
<!-- ====================== links Menu Content Start =============================================== -->
<?php if($message = Session::get('Delete')): ?>
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> <?php echo e($message); ?> </div>
  <?php endif; ?>
<!-- ====================== links Menu Content Start =============================================== -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Menu</span>
        <h3 class="page-title"><i class="icon-feather-menu"></i> Create Menu</h3>
      </div>
    </div>
    <!-- ====================== links Menu Content Start =============================================== -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
            <!-- ====================== links Menu Content Start store =============================================== -->
           <form action="<?php echo e(route('dashboardMenus.store')); ?>" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
              <?php echo csrf_field(); ?>
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Menu Title" name="name">
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ====================== links Menu Content Start =============================================== -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <!-- ====================== links Menu Content Start store =============================================== -->
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Status:</strong> Draft
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibility:</strong>
                  <strong class="text-success">Public</strong>
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Schedule:</strong> Now
                </span>
              </li>
              <!-- ====================== links Menu Content Start store =============================================== -->
              <li class="list-group-item d-flex px-3">
                <a class="btn btn-sm btn-outline-accent" href="<?php echo e(url('dashboard/dashboardMenus')); ?>"><i class="icon-feather-triangle"></i> Menus</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-material-outline-note-add"></i> Publish</button>
                  </li>
                  <!-- ====================== links Menu Content Start store =============================================== -->
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            </form>
            <!-- ====================== links Menu Content Start store =============================================== -->
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Charity/resources/views/dashboard/dashboardMenus/create.blade.php ENDPATH**/ ?>