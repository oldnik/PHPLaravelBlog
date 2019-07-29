<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<h1><?php echo e($post->title); ?></h1>
			
			<p class="lead"><?php echo e($post->body); ?></p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="<?php echo e(url($post->slug)); ?>">url($post->slug)</a></p>
				</dl>
				<dl class="dl-horizontal">
					<label>Utworzono:</label>
					<p><?php echo e(date('j-n-Y H:i', strtotime($post->created_at))); ?></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Ostatnio Modyfikowane:</label>
					<p><?php echo e(date('j-n-Y H:i', strtotime($post->updated_at))); ?></p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('posts.edit', 'Edytuj', array($post->id), array('class' => 'btn btn-primary btn-block')); ?>

					</div>
					<div class="col-sm-6">
						<?php echo Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']); ?>


						<?php echo Form::submit('Usuń', ['class' => 'btn btn-danger btn-block']); ?>


						<?php echo Form::close(); ?>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo e(Html::linkRoute('posts.index', 'Wszystkie Posty', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>