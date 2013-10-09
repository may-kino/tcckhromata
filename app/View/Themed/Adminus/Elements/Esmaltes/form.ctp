<?php echo $this->Admin->formCreate('Esmalte', 'post'); ?>
	
	<fieldset>
		<legend>Adicionar</legend>
		<?php echo $this->Form->hidden('id'); ?>
		
		
	</fieldset>
	
	<div class="form-actions">
		<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary btn-large', 'div' => false)); ?>
		<a class="btn btn-large" href="<?php echo Router::url('/admin/users')?>">Cancelar</a>
	</div>
	
<?php echo $this->Form->end(); ?>
