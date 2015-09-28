<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>批量文件上传</title>
	<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor = K.editor({
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'upload_json.asp',
				allowFileManager : true,
				
				imageSizeLimit : '5MB',
				imageFileTypes : '*.*',
				imageUploadLimit : '1000',
				filePostName : 'imgFile'
			});
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
					clickFn : function(urlList) {
						if (!urlList || urlList.length == 0) {
							alert("没有上传图片，请点击开始右上角的上传按钮");
							return;
						}
						editor.hideDialog();
						window.returnValue="";//JSON.stringify(urlList); 
						window.close(); 
					}
				});
			});
		});
	</script>
</head>
<body>
</body>
</html>

