

<?php $__env->startSection('mainSection'); ?>
  <!-- # site main content
                                      ================================================== -->
  

  <section class="s-pageheader pageheader">
    <div class="row">
      <div class="column xl-12">
        <h1 class="page-title">
          <span class="page-title__small-type text-pretitle">Projects</span>
          High-Impact Projects
        </h1>

      </div>
    </div>
  </section> <!-- pageheader -->

  <section class="s-pagecontent pagecontent">
    <div class="row pageintro">
      <table>
        <thead>
          <th>No.</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td style="max-width: 7px"><?php echo e($loop->index + 1); ?>.</td>
              <td><?php echo e($project['name']); ?></td>
              <td><?php echo e($project['description']); ?></td>
              <td>
                <button>
                  <a href="<?php echo e(route('project-view', [$project['slug']])); ?>">View</a>
                </button>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </section>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('pages.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Static_portfoliio_site\portfolio_site\resources\views/pages/projects.blade.php ENDPATH**/ ?>