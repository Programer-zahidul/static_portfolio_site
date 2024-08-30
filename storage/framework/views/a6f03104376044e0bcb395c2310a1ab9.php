

<?php $__env->startSection('mainSection'); ?>
  <!-- # site main content
                                        ================================================== -->
  <section id="content" class="s-content">

    <section class="s-pageheader pageheader">
      <div class="row">
        <div class="column xl-12">
          <h1 class="page-title">
            <span class="page-title__small-type text-pretitle">My Blog</span>
            Recent Project
          </h1>
        </div>
      </div>
    </section>

    <section class="s-pagecontent pagecontent">

      <div class="row">
        <?php if(count($currentProject) > 0): ?>
          <div class="title">
            <h3><?php echo e($currentProject[0]['name']); ?></h3>
          </div>
          <div class="description">
            <p><?php echo e($currentProject[0]['description']); ?></p>
          </div>
        <?php endif; ?>
      </div> <!-- end row -->


    </section>

  </section> <!-- s-content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Static_portfoliio_site\portfolio_site\resources\views/pages/project.blade.php ENDPATH**/ ?>