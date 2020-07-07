<?php $__env->startSection('content'); ?>
	   <?php $__currentLoopData = $good; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
           
           <style>
                           .cat_g{
                   font-size: 25px;
                   margin-left: 50px;
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
                   left: 20px;
                   position: relative;
                   //border: 3px solid #73AD21;
               }
               .goods_pamatojums{
                   position: absolute;
                   
                   top: 0px;
                   right: 0;
                   width: 500px;
                   height: 270px;
                   //border: 3px solid #73AD21;
               }
           </style>
                      <?php
$go = $good->count;
if($go == 0) $go= "Šī prece nav pieejama!";


?>
		<div class="good_content">
                    <p>
					
                    <img class= "goods_image goods_border"src="/images/<?php echo e($good->id); ?>.jpg" alt="Good image" href="/goods/<?php echo e($good->id); ?>">
                    </p>
                    <div class="goods_pamatojums">
                        
                        
          
                    <p style="font-variant: small-caps"> <a class="cat_g" href="/goods/<?php echo e($good->id); ?>"> <?php echo e($good->name); ?> </a>
					<br>Cena: <span style="font-size: 140%; color: purple"><?php echo e($good->price); ?>€</span><span style="font-variant: normal">/gb.</span></p>
                    <p>Ražotājs: <?php echo e($good->country); ?>

                    <p> Piejamība gb.: <span class="cena" style="color:#cc6666"><?php echo e($go); ?></span></p>
                       
                    </p>
                                        
                     </div>
                </div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shop\resources\views/search.blade.php ENDPATH**/ ?>