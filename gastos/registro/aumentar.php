<?php
$l=$_POST['l'];
?>
<tr>
	<td><?php echo $l;?></td>
    <td>
		<input type="text" name="m[<?php echo $l?>][producto]" class="form-control " >
	</td>
    <td>
    	<input type="number" name="m[<?php echo $l?>][cantidad]" class="form-control der cantidad" value="0" min="0" rel="<?php echo $l?>">
    </td>
    <td>
    	<input type="number" name="m[<?php echo $l?>][preciounitario]" class="form-control der preciounitario" value="0" min="0" rel="<?php echo $l?>">
    </td>
    <td>
    	<input type="text" name="m[<?php echo $l?>][total]" class="form-control der total" readonly value="0" min="" rel="<?php echo $l?>">
    </td>
</tr> 