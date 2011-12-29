<div  id='working_area_wrapper'>
		<div  class=' label_header add_more_margin_on_left' >
		Who Viewed Me
		</div>
		<div  class=' label_description add_more_margin_on_left' >
			
		</div>
		
<style>
#traffic_table td{
	width:25%;
}
</style>

		<div>
			
			<table  id='traffic_table'  class='table_middle_left_section ' >
				<tr  class=' first_row' >
					<td>IP Address
					</td>
					<td>Location
					</td>
					<td>Views
					</td>
					<td>Date
					</td>
				</tr>
				
				<?php foreach( $website_data['page_views']  as  $page_view){ ?>
				
					<tr>
							<td><?php echo $page_view->ip_address;    ?>
							</td>
							<td><?php echo $page_view->city.', '.$page_view->state.', '.$page_view->country;    ?>
							</td>
							<td><?php echo $page_view->count;    ?>
							</td>
							<td><?php echo date("F j, Y", strtotime($page_view->updated) );    ?>
							</td>
					</tr>
			
				<?php } ?>
				
			</table>

		</div>
</div>