<fieldset>	
<legend>Adicionar Celebração</legend>
  
	<?php echo $this->Admin->formCreate('Tipo', 'post'); ?>
	<div class="adds">
		<?php 
			echo $this->Form->input('Tipo', array('type' => 'select','name' => 'data[BtnTipo][tipo_id]' ,'options' => $list_tipos));
			
			
		?>
	</div>
</fieldset>

<div class="form-actions">
	<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary btn-large', 'div' => false)); ?>
	<a class="btn btn-large" href="<?php echo Router::url('/admin/btns')?>">Cancelar</a>
</div>
	
<?php echo $this->Form->end(); ?>