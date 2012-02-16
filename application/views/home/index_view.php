<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
</head>

<html>

<body>


<div >
	
	<div  class='container '  >
	
		<div   class=' span-12'   >
		&nbsp;
		</div>
	
	<style>
	#header-menu li{
		float:right;
		padding:10px;
		background:lightblue;
	}
	</style>
	
	<div    class=' span-12 last'  >

	  <ul id="header-menu">
	  	
			<!--	
	    <li><a href="/" title="Online invoicing and time tracking">Home</a></li>
	    <li><a href="/tour" title="Learn more about our invoicing product">Tour</a></li>
	    <li><a href="<?php  echo base_url()   ?>index.php/home/register">Pricing &amp; Signup</a></li>
	    -->
	    
	    <li><a href="<?php  echo base_url()   ?>index.php/home/login">Log In</a></li>
	  </ul>	
	  
	  
	</div>
	
	
	</div>	
</div>
<style>
#logo_div{
  background-image: url(<?php  echo base_url()   ?>images/sclogo_White.jpg);
  background-position:center center;
  background-repeat:no-repeat;
  background-size:contain;
  height:60px;
  margin-top:100px;
  margin-bottom:25px;
}
#slogan{
font-size:22px;
text-align:center;
margin-bottom:25px;	
color:blue;
font-weight:bold;
}
.row{
clear:both;	
}
.column{
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    float: left;
    height: 80px;
    width: 106px;
    margin-top: 9px;
}
</style>
<div  class='container'        >
	<div  id='logo_div'>
	</div>
	<div   id='slogan' class='cufon ' >YOUR VIRTUAL TRADING CARD
	</div>
	
	<div>
		<div>
			
			<div  class='col ' >
			<?php
			$count=0;
			foreach( $data['images']  as  $image ){ 
				
				$count++;  
				
				$image = str_replace(' ', '\ ', $image);
				
				?>
			
				<?php if( !in_array($count, array(1, 2, 27)) ){?>
				
						<div  class=' column'   style='
						  background-image: url(<?php  echo base_url()   ?>images/collage/<?php echo $image     ?>);
						'  >
						</div>
						
						
						<?php if( in_array($count, array(10,18)) ){?>
						
							</div ><div  class='col ' >
						
						<?php } ?>
				
				<?php } ?>
			
			
			<?php } ?>
			
			
			</div>
			
		</div>

		
	</div>
</div>

			
</body>
</html>

<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" language="Javascript">
	
	$(document).ready(function() {
	
		  Cufon.replace('.cufon', {
				color: '-linear-gradient(#999, 0.45=#666, 0.45=#555, #999)'
			});
  });
    

</script>



<?php  
$this->load->view('fonts/cufon.php');
?>

<script type="text/javascript" language="Javascript">
<?php  echo $data['font'][0]->code;   ?>	
</script>