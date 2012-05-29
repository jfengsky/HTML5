谈谈onscroll和scrollTop
=====
## 一、最近发现onscroll和scrollTop用得比较多，于是简单总结了一下。

当文档高度超过浏览器高度时，浏览器会产生滚动条。

当滚动条发生滚动，不管是鼠标滚轮、方向键还是拖动滚动条，都会被浏览器检测到从而触发<code>onscroll</code>事件。

于是，我们可以通过下面的函数来检测滚动条是否被触发，
<pre>
window.onscroll = function(){
  alert('你触发了滚动条');
}
</pre>
要注意的是这个行为在每次滚动条停下来之前是一直在检测的。


当滚动条滚动的时候，顶部文档内容就会被浏览器隐藏起来，于是浏览器提供了<code>scrollTop</code>函数来获取和设置这部分被隐藏的文档高度，也就是滚动条距离浏览器顶部的高度。

具体请看：<a href="https://developer.mozilla.org/en/DOM/element.scrollTop" target="_blank">这里</a>

所以，我们可以通过如下代码来获取和设置scrollTop的值(单位是px)

<pre>
document.body.scrollTop	或 document.documentElement.scrollTop
document.body.scrollTop = 100 或 document.documentElement.scrollTop = 100
</pre>
考虑兼容性，上面的代码也可以写成这样
<pre>
var scroll_top = document.body.scrollTop | document.documentElement.scrollTop;
</pre>


## 二、通过onscroll和scrollTop，我们可以做出很多惊叹的交互效果

#### 1.解决ie6下没有position:fixed的问题

ie6死而不僵，国内ie6使用者还是占有比较大的比率，所以对这部分使用者还是没法放弃，不得不对ie6各种头疼的bug进行hack。

<code>position:fixed</code>可以让HTML元素脱离文档流固定在浏览器的某个位置，但ie6不支持。
我们可以通过css里写<code>{position:absolute;top:expression(eval(document.documentElement.scrollTop))}</code>来进行hack，但这还需要DTD的支持，还非常消耗性能。

利用js,我们可以根据onscroll事件来通过scrollTop实时获取滚动条高度，然后赋值给top属性解决这个问题，代码如下：
<pre>
&lt;!DOCTYPE html>
&lt;html>
&lt;meta charset="utf-8">
&lt;head>
&lt;title>解决ie6下没有position:fixed的问题</title>
&lt;style>
.fix{
    width:14px;
    padding:5px;
    background:#f60;
    color:#fff;
    position:fixed;
    right:10px;
    top:10px;
}
&lt;/style>
&lt;/head>
&lt;body>
&lt;div style="height:2000px"></div>
&lt;div class="fix" id="J_fix">这里固定不动</div>
&lt;script>
var fix = document.getElementById('J_fix');
if(!-[1,]&&!window.XMLHttpRequest){ // 判断浏览器是否ie6
    fix.style.position = 'absolute'; // 先设置容器绝对定位
    window.onscroll = function(){	// 当滚动条滚动
        fix.style.top = document.documentElement.scrollTop + 10;	// 获取滚动条高度给top属性
    }
}
&lt;/script>
&lt;/body>
&lt;/html>
</pre>

#### 2.跟随滚动条缓慢滚动的区块
我们会发现用<code>position:fixed</code>指定的区块在滚动条滚动的时候一直静止不动感觉有点生硬，我们可以添加动画跟随效果让体验更流畅，代码如下：
<pre>

</pre>

#### 3. 返回顶部按钮
很多页面底部有返回顶部的按钮，一般的做法是通过锚点来实现，简单方便，但有个缺点就是在地址栏会留下标记，
通过scrollTop，我们可以解决这个缺点，普通做法是点击回到顶部按钮设置<code>scrollTop=0</code>让页面跳转到顶部，但那太简单了，我们可以文艺点，让滚动条有个缓慢滚动到顶部的效果，从而让用户感觉更平滑流畅，体验更好，代码如下：
<pre>

</pre>

#### 4.瀑布流效果


#### 5.视觉差效果