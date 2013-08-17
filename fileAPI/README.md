HTML5 File API
===
[w3c地址](http://www.w3.org/TR/FileAPI/)

这个规范提供了提供了本地文件读取的API规范，因此，我们可以直接在浏览器中读取客户端的文件。

这个太有用了，在以前，我们想获得客户端文件的内容，比如图像文件，我们先是上传到服务器，然后服务器返回一个图片地址，我们再通过这个地址显示图片，但实现通过这个API我们不用上传到服务器就能读取并显示这个图片了~~~。

在浏览器中，我们得先通过操作一个文件才能获得<code>filelist</code>。基于安全性的考虑，HTML5规定只能通过拖拽操作和input:file。

<code>filelist</code>类似数组，可以通过下标来获取元素，也具有length属性，但其本身并不是数组，类似<code>argument</code>,只能遍历。

在HTML5中，input:file增加了一个<code>multiple</code>属性终于实现了文件的多选。

		<input type="file" name="" multiple />

filelise示例:

		<!doctype html>
		<html lang="en">
		<head>
  		<meta charset="UTF-8">
  		<title>file name,size and type</title>
		</head>
		<body>
  		<input type="file" name="" id="J_file" multiple="multiple">
		<ul id="J_output"></ul>
		<script>
		var fileInput = document.getElementById('J_file'),
  			outPut = document.getElementById('J_output');

		fileInput.onchange = function(event){
			if(event.target.files.length > 0) {
  				for( var i = 0; i < event.target.files.length; i++){
    				var file = event.target.files[i];
    				outPut.innerHTML += '<li>fileame: ' + file.name + '</li><li>fileSize: ' + file.size + '</li><li>fileType: ' + file.type + '<br /><br /></li>';
  				}
			}
		};
		</script>
		</body>
		</html>


参考：

[HTML5的File API应用](http://blog.meathill.com/tech/js/html5-file-reader-file-writer.html#h1)

[HTML5 - File API 簡易教學](http://blog.roodo.com/rocksaying/archives/15328315.html)