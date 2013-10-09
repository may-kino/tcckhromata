<div class="expand-10">
	<?php
	$this->Html->addCrumb('Botões', '/admin/btns');
	$this->Html->addCrumb('Editar', false, array('class' => 'active'));
	?>
	
	<ul class="breadcrumb">
		<?php echo $this->Html->getCrumbs(' <span class="divider">/</span> '); ?>
	</ul>
	
	<div class="content-grid">
		<?php echo $this->element('Btns/form') ?>
	</div>
</div>