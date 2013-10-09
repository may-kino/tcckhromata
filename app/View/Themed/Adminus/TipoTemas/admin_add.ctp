<div class="expand-10">
	<?php
	$this->Html->addCrumb('TipoTemas', '/admin/tipo_temas');
	$this->Html->addCrumb('Adicionar', false, array('class' => 'active'));
	?>
	
	<ul class="breadcrumb">
		<?php echo $this->Html->getCrumbs(' <span class="divider">/</span> '); ?>
	</ul>
	
	<div class="content-grid">
		<?php echo $this->element('TipoTemas/form') ?>
	</div>
</div>