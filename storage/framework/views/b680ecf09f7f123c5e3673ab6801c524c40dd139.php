<?php $__currentLoopData = App\Goods::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<style>
    .cat_c{
        color: #520a01;
    }
</style>
	<p>
	
		Good: <?php echo e($good1->name); ?>

		
		
	</p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\wamp64\www\shop\resources\views/goods_all.blade.php ENDPATH**/ ?>