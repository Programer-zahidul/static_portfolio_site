<?php echo $__env->make('pages.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="content" class="s-content">
  <?php echo $__env->yieldContent('mainSection'); ?>
</section>
<?php echo $__env->make('pages.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Static_portfoliio_site\portfolio_site\resources\views/pages/layout/main.blade.php ENDPATH**/ ?>