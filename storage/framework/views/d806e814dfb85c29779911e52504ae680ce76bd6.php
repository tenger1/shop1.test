<?php $__currentLoopData = App\Categories::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<style>
    .cat_c{
        color: #520a01;
    }
</style>
	<p>
	<a class= "cat_c" href="/categories/<?php echo e($category->id); ?>">
		<?php echo e($category->name); ?>

		</a>
		
	</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\MAMP\htdocs\shop\resources\views/categories.blade.php ENDPATH**/ ?>