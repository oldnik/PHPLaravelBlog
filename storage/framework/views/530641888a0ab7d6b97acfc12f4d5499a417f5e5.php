<?php $__env->startSection('title', '| Edycja'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<?php echo Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']); ?>

	<div class="col-md-8">
		<?php echo e(Form::label('title', 'Tytuł:')); ?>

		<?php echo e(Form::text('title', null, ["class" => 'form-control input-lg'])); ?>


		<?php echo e(Form::label('slug', 'Url:', ['class' => 'form-spacing-top'])); ?>

		<?php echo e(Form::text('slug', null, ['class' => 'form-control'])); ?>


		<?php echo e(Form::label('body', 'Treść:', ['class' => 'form-spacing-top'])); ?>

		<?php echo e(Form::textarea('body', null, ['class' => 'form-control'])); ?>

	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Utworzono dnia:</dt>
				<dd><?php echo e(date('j-n-Y H:i',strtotime($post->created_at))); ?></dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Ostatnia aktualizacja:</dt>
				<dd><?php echo e(date('j-n-Y H:i',strtotime($post->updated_at))); ?></dd>
			</dl>
			<hr>
			
			<div class="row">
				<div class="col-sm-6">
					<?php echo Html::linkRoute('posts.show', 'Anuluj', array($post->id), array('class' => 'btn btn-danger btn-block')); ?>

				</div>
				<div class="col-sm-6">
					<?php echo e(Form::submit('Zapisz', ['class' => 'btn btn-primary btn-block'])); ?>

				</div>
			</div>
		</div>
	</div>
	<?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>