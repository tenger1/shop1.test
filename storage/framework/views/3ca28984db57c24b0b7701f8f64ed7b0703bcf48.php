<?php $__env->startSection('content'); ?>  
<style>
    .cat_p{
        margin-left: 50px;
    }
    .product_image{
        width: 300px;
        
    }
    .product_border{
        border: 10px solid;
        border-image-source: linear-gradient(45deg, #80029c, #9c1402);
        border-image-slice: 1;
}
    
</style>
<div class="cat_p">
    <div><img class= "product_image product_border"src="/images/<?php echo e($good->id); ?>.jpg" alt="Good image"></div>
    
                   <p> Nosaukums: <span class="nosaukums"><?php echo e($good->name); ?></span> </p>
                   <p> Krāsa: <span class="krasa"><?php echo e($good->color); ?></span> </p>
                   <p> Valsts: <span class="valsts"><?php echo e($good->country); ?></span> </p>
                   <p> Apraksts: <span class="apraksts"><?php echo e($good->description); ?></span> </p>
                   <p> Cena par 1gb. : <span class="cena"><?php echo e($good->price); ?></span> $ </p>
                   <p> Produkta kods (ID): <?php echo e($good->id); ?> </p>
                    
                <form action="/order/<?php echo e($good->id); ?>">
                    <input type="submit" value="Order" class="btn btn-success"/>
		</form>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\shop\resources\views/product.blade.php ENDPATH**/ ?>