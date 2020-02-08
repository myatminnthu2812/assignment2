<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h2><a href="<?php echo e(route('post.show',$post->id)); ?>"><?php echo e($post->title); ?></a></h2>
        <div class="row">
            <p class="col-6">Written by : <strong><?php echo e($post->author->name); ?></strong> </p>
            <p class="col-6 text-right">Created by : <strong><?php echo e($post->created_at); ?></strong></p>
        </div>
        <p>Is Published Post : <strong><?php echo e($post->is_published ? 'Yes' : 'No'); ?></strong></p>
        <p><?php echo e($post->excerpt); ?></p>
    </div>
    <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Full Moon\Downloads\Compressed\okar-assigment-master\resources\views/post/index.blade.php ENDPATH**/ ?>