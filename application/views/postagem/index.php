<?php if ($postagens == FALSE): ?>

	<h3> Nenhuma postagem encontrada</h3>

<?php else: ?>
	<table>
		<thead>
			<tr>
				<th> Titulo </th>
			</tr>
		</thead>
	
		<tbody>
			<?php foreach ($postagens as $postagem): ?>
				<tr>
					<td><?=postagem['titulo']?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	
	</table>
<?php endif; ?>