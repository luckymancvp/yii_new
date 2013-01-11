<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<h1>新しい○○○○○を追加します。</h1>
<div class="form">
	<form method="post" id="<?php echo $this->modelClass?>-form">
	    <p class="note">Fields with <span class="required">*</span> are required.</p>
	    <table>
<?php
	foreach($this->tableSchema->columns as $column)
	{
		if($column->autoIncrement)
			continue;
?>
			<tr>
				<td><?php echo $this->generateActiveLabel($this->modelClass,$column)."\n"; ?></td>
				<td><?php echo $this->generateActiveField($this->modelClass,$column)."\n"; ?></td>
			</tr>

<?php
	}
?>
	    </table>
	    <div class="row buttons">
	        <input type="submit" value="Create" name="yt0">
	    </div>

	</form>
</div>