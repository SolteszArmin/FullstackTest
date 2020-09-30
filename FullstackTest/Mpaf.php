<?php
				session_start();
				if (!isset($_SESSION['username'])) {
					header("Location: Index.php");
					}
				include "backend/Connection.php";
				include 'Head.php';
?>
<div class="row justify-content-center">
	<div class="col-5">
		<div class="grab_take card">
			<div class="card-body my_body">
				<div class="row">
					<div class="col-6">
						<ul id="sortable1">
							<?php
										$sql="SELECT words.name,wordpositions.id, wordpositions.position, words.tableNumber FROM `words` INNER JOIN wordpositions ON wordpositions.wordId=words.id WHERE wordpositions.userId=".$_SESSION['id']." AND words.tableNumber=1 ORDER BY position ASC";
										$result=mysqli_query($conn,$sql);
										while ($data=$result->fetch_array()) {
											echo '<li class="text-center left_list" id="'.$data['id'].'"><span>'.$data['name'].'</span></li>';
										}
							?>
						</ul>
					</div>
					<div class="col-6">
						<ul id="sortable2">
							<?php
										$sql="SELECT words.name,wordpositions.id, wordpositions.position, words.tableNumber FROM `words` INNER JOIN wordpositions ON wordpositions.wordId=words.id WHERE wordpositions.userId=".$_SESSION['id']." AND words.tableNumber=2 ORDER BY position ASC";
										$result=mysqli_query($conn,$sql);
										while ($data=$result->fetch_array()) {
											echo '<li class="text-center right_list" id="'.$data['id'].'"><span>'.$data['name'].'</span></li>';
										}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-5 text-center">
				<button type="button" id="button" class="grab_take_button btn">Save</button>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-auto text-center">
				<p class="error" id="ajaxResponse"></p>
			</div>
		</div>
	</div>
</div>
<?php
				include 'Body.php';
?>
<script
src="http://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript">
$("#sortable1").sortable();
$("#sortable2").sortable();
$("#sortable").disableSelection();
$(document).ready(function() {
$('button').button().click(function() {
var itemOrder1 = $('#sortable1').sortable("toArray");
var itemOrder2 = $('#sortable2').sortable("toArray");
for (var i = 0; i < itemOrder1.length; i++) {
savePositions(itemOrder1[i],i);
}
for (var i = 0; i < itemOrder2.length; i++) {
savePositions(itemOrder2[i],i);
}
})
});
function savePositions(itemId,itemPosition){
	$.ajax({
		url:'backend/Update.php',
		method:'POST',
		dataType:'text',
		data:{
			id: itemId,
			position: itemPosition
		},
		success: function(response){
			$("#ajaxResponse").html(response);
			console.log(response);
		}
	});
}
</script>