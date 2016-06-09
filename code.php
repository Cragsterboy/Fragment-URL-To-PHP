<?php
// Author: Craig Gamblen
// www.craggamblen.co.uk
// 09/06/2016

	$url = $_SERVER['REQUEST_URI']; //grab page url
?>

<script>
var hash_str = window.location.hash; // Grab the hash string in the fragement URL
if(hash_str!="" || hash_str!=null){ // This if statement is used to stop a redirect loop
	var hash = hash.replace("#", "?"); // replace hash with question mark, making it a valid url parameter 
	window.location.replace("<?=$url; ?>"+hash); // redirect back to ourselves with php parameters not a fragement url
}
</script>
<?php
//The varaible is passed and we are able to get the variable with PHP.
$test = isset($_GET['something']) ? $_GET['something'] : ''; 
?>
