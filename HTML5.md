###DNS Prefetching

#####DNS主机名解析有时会出现拖慢网站速度的问题。现代浏览器当遇到DNS解析时已经十分聪明——用户在跟随某个链接之前，浏览器先尝试解析域名再将其进行缓存。

#####DNS Prefetching特性允许开发者手动控制，告诉浏览器需要解析哪个域名。代码如下：


	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//google-analytics.com">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link rel="dns-prefetch" href="//platform.twitter.com">

###Link Prefetching

#####Link Prefetching特性允许开发者在页面加载的时候预先加载他们希望指定的页面或元素。代码如下：

	<link rel="prefetch" href="http://daker.me/2013/05/hello-world.html" />
	<link rel="prefetch" href="http://daker.me/assets/images/avatar.png" />

#####你也能够使用prerendering特性令你的网站速度更快，浏览器能够在后台获取并渲染整个页面，用户点击相应链接时再为用户展示该页面。代码如下：


	<link rel="prerender" href="http://daker.me/2013/05/hello-world.html" />

###Download属性

#####凭借HTML5的Download属性，开发者可以不必到特定页面下载文件，而是直接进行下载。这一操作不必依赖服务器端代码便能够执行。代码如下：

	<a href="download_pdf.php?id=15" download="myfile.pdf">Download PDF</a>

###Regular Expressions

#####一旦用户输入一个有效的email或URL地址，pattern属性可以令你直接使用regular expressions而无需检查JS或服务器端代码。代码如下：

	<input type="email" pattern="[^ @]*@[^ @]*" value="">

###Datalist元素

#####若使用jQuery插件执行自动填充输入操作，则用户每敲击一次键盘都要访问服务器端代码以及数据库。但有了Datalist元素，开发者不必再使用jQuery插件便可完成该操作。代码如下：

	<form action="form.php" method="post">
    	<input list="cars" name="cars" >
    	<datalist id="cars">
        	<option value="Volvo">
        	<option value="BMW">
        	<option value="Bugatti">
        	<option value="Cadillac">
        	<option value="Chevrolet">
        	<option value="Chrysler">
    	</datalist>
    	<input type="submit" />
	</form>