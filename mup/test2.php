<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>	
<script language="javascript"> 
<!-- 
function openChild(){
	var k = window.showModalDialog("batch_upload_dlg.php?_=" + new Date().getTime(),window,"dialogWidth:660px;status:no;dialogHeight:520px"); 
	if(k != null) {
		//alert(k);
	}
}
//--> 
</script> 
</head>
<body>
	<form action="upload_json.php" method="POST" enctype="multipart/form-data" onsubmit='return false;'>
	<input type="file" name="imgFile" value="" onchange="this.form.submit();" />
	<input type="button" id="J_selectImage" value="批量上传" onclick="openChild()" />注：批量上传只支持IE8和FireFox
	</form>
	<div>
		<br />
		<br />
		<a href="attach_list.php">上传文件列表</a>
	</div>
</body>
</html>
