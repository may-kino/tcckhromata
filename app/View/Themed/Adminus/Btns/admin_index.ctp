<div class="expand-10">
	
	<h2 class="title-grid">Botões</h2>
	
	<div class="content-grid">
		
		<p><?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Adicionar', array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success', 'title' => 'Adicionar Botão')); ?></p>
		
		<div id="content">
		
			<?php if (!empty($btns)): ?>
			
				<table border="0" cellpadding="3" cellspacing="3" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descricao</th>
							<th>Ações</th>
						</tr>
					</thead>
					<?php $count = 0; ?>
					<?php foreach($btns as $key => $btn) : ?>
						<tr class="grid-item strip-<?php echo $count % 2; ?>">
							<td><?php echo $btn['Btn']['nome']; ?></td>
							<td><?php echo $btn['Btn']['descricao']; ?></td>
							<td>
								<?php echo $this->Html->link('<i class="icon-pencil icon-white"></i>', array('action' => 'edit', $btn['Btn']['id']), array('title' => 'Editar', 'escape' => false, 'class' => 'btn btn-small btn-warning')); ?>
								<?php echo $this->Html->link('<i class="icon-trash icon-white"></i>', array('action' => 'del', $btn['Btn']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-small', 'title' => 'Excluir'), 'Deseja realmente excluir este botão?'); ?>
								<?php echo $this->Html->link('<i class="icon-picture icon-white"></i>', array('action' => 'btn_tipo', $btn['Btn']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-small', 'title' => 'Celebração')); ?>
							</td>
						</tr>
						<?php $count++ ?>
					<?php endforeach; ?>
					
				</table>
			
				<p><?php echo $this->element('admin/pagination') ?></p>
			
			<?php else : ?>
				
				<?php echo $this->Admin->warning('Não existem botão!') ?>
				
			<?php endif ?>
		
		</div>
		
	</div>
	
</div>