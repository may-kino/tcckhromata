<div class="expand-10">
	
	<h2 class="title-grid">Celebracoes</h2>
	
	<div class="content-grid">
		
		<p><?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar', array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success', 'title' => 'Adicionar Celebração')); ?></p>
		
		<div id="content">
		
			<?php if (!empty($tipos)): ?>
			
				<table border="0" cellpadding="3" cellspacing="3" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descricao</th>
							<th>Ações</th>
						</tr>
					</thead>
					<?php $count = 0; ?>
					<?php foreach($tipos as $key => $tipo) : ?>
						<tr class="grid-item strip-<?php echo $count % 2; ?>">
							<td><?php echo $tipo['Tipo']['nome']; ?></td>
							<td><?php echo $tipo['Tipo']['descricao']; ?></td>
							<td>
								<?php echo $this->Html->link('<i class="icon-pencil icon-white"></i>', array('action' => 'edit', $tipo['Tipo']['id']), array('title' => 'Editar', 'escape' => false, 'class' => 'btn btn-small btn-warning')); ?>
								<?php echo $this->Html->link('<i class="icon-trash icon-white"></i>', array('action' => 'del', $tipo['Tipo']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-small', 'title' => 'Excluir'), 'Deseja realmente excluir esta celebração?'); ?>
								
								<?php echo $this->Html->link('<i class="icon-picture icon-white"></i>', array('action' => 'tipo_tema', $tipo['Tipo']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-small', 'title' => 'Tema')); ?>
							</td>
						</tr>
						<?php $count++ ?>
					<?php endforeach; ?>
					
				</table>
			
				<p><?php echo $this->element('admin/pagination') ?></p>
			
			<?php else : ?>
				
				<?php echo $this->Admin->warning('Não existem celebrações!') ?>
				
			<?php endif ?>
		
		</div>
		
	</div>
	
</div>