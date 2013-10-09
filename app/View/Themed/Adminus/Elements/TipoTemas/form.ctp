<?php echo $this->Admin->formCreate('TipoTema', 'post'); ?>
	
	<fieldset>
		<legend>Adicionar</legend>
		<?php echo $this->Form->hidden('id'); ?>
		<?php echo $this->Admin->input('nome', array('label' => 'Nome', 'help' => 'Nome do tipo de tema')) ?>
		
		
	</fieldset>
	
	<div class="form-actions">
		<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary btn-large', 'div' => false)); ?>
		<a class="btn btn-large" href="<?php echo Router::url('/admin/tipo_temas')?>">Cancelar</a>
	</div>
	
<?php echo $this->Form->end(); ?>
