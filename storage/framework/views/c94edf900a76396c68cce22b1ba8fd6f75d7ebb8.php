<?php $__env->startSection('content'); ?>
	   <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
           
           <style>
               .cat_g{
                   font-size: 25px;
                   
                   color: #c93200;
                   font-variant: small-caps;
                   transition: 0.4s;
                   padding: 10px;
               }
               .cat_g:hover{
                   text-decoration: none;
                   color: #520a01;
               }
               .goods_image{
                   width: 250px;
                  
               }
               .goods_border{
                  border: 5px solid;
                  border-image-source: linear-gradient(45deg, #80029c, #9c1402);
                  border-image-slice: 1;
                  
               }
               .good_content{
                   margin-bottom: 50px;
                   margin-top: 30px;
                   left: 20px;
                   position: relative;
                   
                   //border: 3px solid red;
               }
               .goods_pamatojums{
                   position: relative;
                   
                   top: 0px;
                   right: 0;
                   
                   //border: 3px solid #73AD21;
               }
               
               
           </style>
           
           <?php
           header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
$go = $good->count;
if($go == 0) $go= "-";


?>
		    
		<div class="good_content">
                    <p>
					
                        <a href="/goods/<?php echo e($good->id); ?>"><img class= "goods_image goods_border"src="/images/<?php echo e($good->id); ?>.jpg"  alt="Good image" [B]nocache[/B]></a>
                    </p>
                    <div class="goods_pamatojums">
                        
                        
          
                    <p style="font-variant: small-caps; "> <a class="cat_g" href="/goods/<?php echo e($good->id); ?>"> <?php echo e($good->name); ?> </a>
					<br><?php echo app('translator')->get('main.Cena'); ?>: <span style="font-size: 140%; color: purple"><?php echo e($good->price); ?> €</span><span style="font-variant: normal">/<?php echo app('translator')->get('main.prece'); ?>.</span></p>
                    <p><?php echo app('translator')->get('main.Valsts'); ?>: <?php echo e($good->country); ?>

                    <p> <?php echo app('translator')->get('main.prece'); ?>: <span class="cena" style="color:#cc6666"><?php echo e($go); ?></span></p>
                    
                    </div>
                </div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shop\resources\views/goods.blade.php ENDPATH**/ ?>