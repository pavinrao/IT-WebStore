<script>
function myFunction(txt){
	document.getElementById("demo").innerHTML = txt;
}
myFunction("cat")
</script>
<?php
$text="cat";

echo '<script type="text/javascript">',
     'myFunction("'.$text.'");',
     '</script>'
;
?>
<p id="demo">not working</p>