<div class="expand-10">
	
	<h2 class="title-grid">Tipos de Temas</h2>
	
	<div class="content-grid">
		
		<p><?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar', array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success', 'title' => 'Adicionar um tipo de tema')); ?></p>
		
		<div id="content">
		
			<?php if (!empty($tipo_temas)): ?>
			
				<table border="0" cellpadding="3" cellspacing="3" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							
						</tr>
					</thead>
					<?php $count = 0; ?>
					<?php foreach($tipo_temas as $key => $tipo_temas) : ?>
						<tr class="grid-item strip-<?php echo $count % 2; ?>">
							<td><?php echo $tipo_temas['TipoTema']['nome']; ?></td>
							
							<td>
								<?php echo $this->Html->link('<i class="icon-pencil icon-white"></i>', array('action' => 'edit', $tipo_temas['TipoTema']['id']), array('title' => 'Editar', 'escape' => false, 'class' => 'btn btn-small btn-warning')); ?>
								<?php echo $this->Html->link('<i class="icon-trash icon-white"></i>', array('action' => 'del', $tipo_temas['TipoTema']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-small', 'title' => 'Excluir'), 'Deseja realmente excluir este tipo de tema?'); ?>
							</td>
						</tr>
						<?php $count++ ?>
					<?php endforeach; ?>
					
				</table>
			
				<p><?php echo $this->element('admin/pagination') ?></p>
			
			<?php else : ?>
				
				<?php echo $this->Admin->warning('Não existem tipos de tema!') ?>
				
			<?php endif ?>
		
		</div>
		
	</div>
	
</div>