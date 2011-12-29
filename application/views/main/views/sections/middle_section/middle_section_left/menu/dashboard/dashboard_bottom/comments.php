<div  id='working_area_wrapper'>
		<div  class=' label_header add_more_margin_on_left' >
		My Messages
		</div>
		<div  class=' label_description add_more_margin_on_left' >

		</div>
		
<style>
#comments_table td{
	width:25%;
}
#comments_table td a{
	text-decoration:underline;
	cursor:pointer;
	color:blue;
}
</style>	
		
		<div>
			
			<table  id='comments_table'  class='table_middle_left_section ' >
				<tr  class=' first_row' >
					<td>Name
					</td>
					<td>Email
					</td>
					<td>Message
					</td>
					<td>Date
					</td>
				</tr>
				
				<?php foreach( $website_data['comments']  as  $comment){ ?>
				
					<tr>
							<td><?php echo $comment->full_name;    ?>
							</td>
							<td><a href='mailto:<?php echo $comment->email;    ?>'><?php echo $comment->email;    ?></a>
							</td>
							<td><?php echo $comment->content;    ?>
							</td>
							<td><?php echo date("F j, Y", strtotime($comment->created) );    ?>
							</td>
					</tr>
			
				<?php } ?>
				
			</table>

			
		</div>
</div>


<script type="text/javascript" language="Javascript">
	
//						$.post("<?php echo base_url(). 'index.php/main/delete_comment'; ?>",{
//						id:$(this).attr('comment_id')
//						},function(data) {
//
//						
//						});  	

</script>