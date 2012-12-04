<div class="viewUsers">
	<a class="addUser awesome medium">Add User</a>
	<?php echo '<table>
		<tr class="tr-title">
		<td>
			Username
		</td>
		<td>
			Account Status
		</td>
		<td>
			UserIsOnline
		</td>
		<td>
			User Role
		</td>
		<td>
			Created At
		</td>
		<td>
			Updated At
		</td>
		<td>
		    Operations
		</td>
	</tr>
		';
	?>
	<?php foreach ($users as $key => $value) {
		

		
		
		
			echo '
	<tr class="tr-row">
		<td>
			'.$value['jelyUsername'].'
		</td>
		<td>
			'.$value['jelyUserAccountStatus'].'
		</td>
		<td>
			'.$value['jelyUserIsOnline'].'
		</td>
		<td>
			'.$value['jelyUserRole'].'
		</td>
		<td>
			'.$value['createdAt'].'
		</td>
		<td>
			'.$value['updatedAt'].'
		</td>
		<td>
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';		



	?>

	<?php } ?>
	<?php echo '</table>'; ?>
</div>

<div class="addUsers">
Test
</div>
