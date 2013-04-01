	<?php $count = 0; ?>
	<?php foreach($records as $record): ?>
	
	<tr id="row_<?=$record->id;?>" class="<?=($record->status_id == 4 ? "warning" : "");?> <?=($record->status_id == 3 ? "error" : "");?>">
		<td><?=$record->id;?></td>
		<td><?=anchor(base_url().'admin/posts/edit/'.$record->id,$record->title);?></td>
		<td><?php echo $this->mo9a7i_model->get_votes($record->id,2,'1');?></td>
		<td><?php echo $this->mo9a7i_model->get_votes($record->id,2,'-1');?></td>
		<td><?=anchor(base_url().'admin/users/edit/'.$record->user_id,(empty($record->username) ? $record->user_id:$record->username));?></td>
		<td><?=$record->date_added;?></td>
		<td>
			<ul class="user_controls inline unstyled">
				<li  id="update_<?=$record->id;?>" data-original-title="Edit" rel="tooltip" class="icon edit_member_link ">
					<a href="<?=base_url().'admin/posts/edit/'.$record->id;?>">
						<i class="icon-pencil"></i><span style="display:none">�����</span>
					</a>
				</li>

				<li id="remove_<?=$record->id;?>" data-original-title="Delete" rel="tooltip" class="icon delete_member_link ">
					<a href="<?=base_url().'admin/posts/delete/'.$record->id;?>">
						<i class="icon-remove"></i><span style="display:none">���</span>
					</a>
				</li>
			</ul>
		</td>
	</tr>
	<?php $count++; ?>
	<?php endforeach; ?>