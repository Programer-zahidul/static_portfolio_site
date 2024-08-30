

<?php $__env->startSection('mainSection'); ?>
  <!-- # site main content
                        ================================================== -->
  

  <section class="s-pageheader pageheader">
    <div class="row">
      <div class="column xl-12">
        <h1 class="page-title">
          <span class="page-title__small-type text-pretitle">About</span>
          Hi, I'm Zahid
        </h1>

      </div>
    </div>
  </section> <!-- end pageheader -->

  <section class="s-pagecontent pagecontent">

    <div class="row pageintro">
      <table>
        <thead>
          <th>No.</th>
          <th>Name</th>
          <th>Description</th>
          <th>Completed</th>
        </thead>
        <tbody>
          <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td style="max-width: 7px"><?php echo e($loop->index + 1); ?>.</td>
              <td><?php echo e($experience['name']); ?></td>
              <td><?php echo e($experience['description']); ?></td>
              <td>
                <div class="container">
                  <div class="box">
                    <div class="shadow"></div>
                    <div class="content">
                      <div class="percent" data-text="<?php echo e($experience['name']); ?>"
                        style="--num: <?php echo e($experience['completed']); ?>">
                        <div class="dot"></div>
                        <svg>
                          <circle cx="70" cy="70" r="70"></circle>
                          <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                      </div>
                      <div class="number">
                        <h2><?php echo e($experience['completed']); ?><span>%</span></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div> <!-- end pageintro -->

  </section> <!-- pagecontent -->

  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Static_portfoliio_site\portfolio_site\resources\views/pages/workExperience.blade.php ENDPATH**/ ?>