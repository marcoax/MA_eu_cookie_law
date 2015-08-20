<?php 
//DEFINE SOME CONFIG VARIABLES
$cookie_name    = 'ma_eu'; //cookie name
$privacy_url    = '/privacy.php'; //  privacy page url
$lang    		= ( isset($_GET['lang']) && $_GET['lang']!='' ) ? $_GET['lang']: 'en'; // set the  language

$cookie_message = array(
		'en' => array(
				   'string' =>'This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies',
				   'info'  => 'Find out more here',
		
		),
		'it' => array(
				   'string' =>'I cookie ci aiutano a fornire i nostri servizi. Utilizzando tali servizi, accetti l\'utilizzo dei cookie da parte nostra.',
				   'info'  => 'Maggiori informazioni qui',
		),
);
?>
<div class="cookie_notice" role="status">
	<span>
		<?php echo $cookie_message[$lang]['string']?>.&nbsp;
		<a href="<?php echo $privacy_url?>"><?php echo $cookie_message[$lang]['info']?></a>
	</span>
	<span class="closer" id="cookie_close"><i class="fa fa-times"></i></span>
</div> 

 
<script type="text/javascript">
    jQuery(document).ready(function() {
      	$.maCookieEu(this,{
			position    	: "bottom",
			cookie_name 	: "<?php echo $cookie_name ?>",
			background		: "#9E1F63",
			delete_cookie 	: <?php echo (isset($_GET['delete'])) ? $_GET['delete'] : 'false'?>
		});
    });
</script>