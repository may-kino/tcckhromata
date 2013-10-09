<fieldset>	
<legend>Adicionar Tema</legend>
  
	<?php echo $this->Admin->formCreate('Tema', 'post'); ?>
	<div class="adds">
		<?php 
			echo $this->Form->input('Tema', array('type' => 'select','name' => 'data[Tema][tipo_tema_id]' ,'options' => $list_temas));
			debug($list_temas);
		?>
	</div>
</fieldset>

<div class="form-actions">
	<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary btn-large', 'div' => false)); ?>
	<a class="btn btn-large" href="<?php echo Router::url('/admin/tipos')?>">Cancelar</a>
</div>
	
<?php echo $this->Form->end(); ?>