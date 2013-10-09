<div class="expand-10">
	<?php
	$this->Html->addCrumb('Tipo de tema', '/admin/tipo_temas');
	$this->Html->addCrumb('Editar', false, array('class' => 'active'));
	?>
	
	<ul class="breadcrumb">
		<?php echo $this->Html->getCrumbs(' <span class="divider">/</span> '); ?>
	</ul>
	
	<div class="content-grid">
		<?php echo $this->element('TipoTemas/form') ?>
	</div>
</div>