<fieldset>
	<legend>List Member</legend>
	<table id="example" class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th width="25px">No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $db->query('select * from member');
			$no = 1;
			while ($member = $result->fetch_object()) {
				echo "<tr>";
				echo "<td align='right'>".$no."</td>";
				echo "<td>".$member->MEMBER_NAME."</td>";
				echo "<td>".$member->MEMBER_EMAIL."</td>";
				echo "<td align='center'>";
				echo "<a href='?page=detil_member&id=$member->MEMBER_ID' class='btn btn-xs btn-success' title='Detil'><span class='glyphicon glyphicon-eye-open'></span></a> ";
				if ($_SESSION['privilege_id'] == 1) {
					if ($_SESSION['member_id'] != $member->MEMBER_ID) {
						echo '<a href="?page=hapus_member&id='.$member->MEMBER_ID.'" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm(\'Yakin dihapus?\')"><span class="glyphicon glyphicon-trash"></span></a>';
					}
				}
				echo "</td>";
				echo "</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</fieldset>