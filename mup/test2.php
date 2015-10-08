<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>	
	<script charset="utf-8" src="json2.js"></script>
	<script charset="utf-8" src="jquery-1.11.0.min.js"></script>
<script language="javascript"> 
<!-- 
function getFileName(url) { 
	var tmp = new Array(); 
	tmp = url.split("/"); 
	var pp = tmp[tmp.length - 1];  
	return pp; 
}
function delete_item(dom) {
	var upfilename = $(dom).parents('.upload_item').find(".upfile")
		.text();
	$(dom).parents('.upload_item').remove();
	if (upfilename && upfilename !== "") {
		var form_input = $("input[name='e_upload_images']");
		var value = form_input.attr("value");
		var result = "";
		if (value) {
			var arr = value.split(',')
			if (arr) {
				jQuery.each(arr, function() {
					if (this && this != "" && this != upfilename) {
						result += ',' + this;
					}
				});
			}
		}
		form_input.attr("value", result);		
	}
	return false;
}

function openChild(){
	var k = window.showModalDialog("batch_upload_dlg.php?_=" + new Date().getTime(),window,"dialogWidth:660px;status:no;dialogHeight:520px"); 
	//var k = "[{\"error\":0,\"url\":\"/mup/attach/20151007111674827482.png\"}]";
	if(k != null) {
		//alert(k);
		var arr = jQuery.parseJSON(k);
		if (arr) {
			jQuery.each(arr, function() {
				if (this.error === 0 && this.url) {
					//console.log(this.url);
					//console.log(getFileName(this.url));
					var item = $("<div class='upload_item'><a class='upfile' target='_blank'></a>&nbsp;&nbsp<a href='javascript:void(0);' onclick='return delete_item(this);'>删除</a></div>");
					item.find(".upfile")
						.attr("href", this.url)
						.text(getFileName(this.url));
					item.appendTo(".upload_images");
					var form_input = $("input[name='e_upload_images']");
					var value = form_input.attr("value");
					form_input.attr("value", value+"," + getFileName(this.url));
				}
			});
		}
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
	<div class="upload_images">
	</div>
	<input type="hidden" name="e_upload_images" value="" />
	<div>
		<br />
		<br />
		<a href="attach_list.php">上传文件列表</a>
	</div>
</body>
</html>
