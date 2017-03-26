<?php if (!defined('THINK_PATH')) exit();?>	<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>下拉刷新Demo</title>
    <style>
		*{padding:0;margin:0}
	</style>
</head>

<style>
body{background-color:beige}
</style>


<h1 style="position:relative;z-index:100;width:100%;background:red;height:52px;">banner</h1>
<div id="container" style="width:100%; transform:translate(0px,-52px);overflow:scroll;">
    <div style="height:50px; line-height:50px; text-align:center; width:100%; ">
        努力加载中...
    </div>
    <div style="width:100%; line-height:30px;background-color:#F2F2F2; font-size:17px; font-family:'Adobe Garamond Pro'">
         上一节中说的拖拽在ie7下有个bug。就是在拖拽的过程中会选中文字。这一节展示的是一个兼容的版本。



使用的是setCapture和releaseCapture这对东西。这对东西的作用是事件捕获,释放事件捕获。通俗点来说，就是一旦某个元素开始调用捕获方法（setCapture），页面中所有的事件都会跑到这个元素上来。所以相应的，当我们使用完毕这个属性后要用releaseCapture（释放捕获）
上一节中说的拖拽在ie7下有个bug。就是在拖拽的过程中会选中文字。这一节展示的是一个兼容的版本。



使用的是setCapture和releaseCapture这对东西。这对东西的作用是事件捕获,释放事件捕获。通俗点来说，就是一旦某个元素开始调用捕获方法（setCapture），页面中所有的事件都会跑到这个元素上来。所以相应的，当我们使用完毕这个属性后要用releaseCapture（释放捕获）
上一节中说的拖拽在ie7下有个bug。就是在拖拽的过程中会选中文字。这一节展示的是一个兼容的版本。



使用的是setCapture和releaseCapture这对东西。这对东西的作用是事件捕获,释放事件捕获。通俗点来说，就是一旦某个元素开始调用捕获方法（setCapture），页面中所有的事件都会跑到这个元素上来。所以相应的，当我们使用完毕这个属性后要用releaseCapture（释放捕获）
上一节中说的拖拽在ie7下有个bug。就是在拖拽的过程中会选中文字。这一节展示的是一个兼容的版本。



使用的是setCapture和releaseCapture这对东西。这对东西的作用是事件捕获,释放事件捕获。通俗点来说，就是一旦某个元素开始调用捕获方法（setCapture），页面中所有的事件都会跑到这个元素上来。所以相应的，当我们使用完毕这个属性后要用releaseCapture（释放捕获）       
    </div>

</div>


<script type="text/javascript" src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script>
    var slide = function (obj, offset, callback) {
	    
        var start,
            end,
            isLock = false,//是否锁定整个操作
            isCanDo = false,//是否移动滑块
            isTouchPad = (/hp-tablet/gi).test(navigator.appVersion),
            hasTouch = 'ontouchstart' in window && !isTouchPad;

        //将对象转换为jquery的对象
        obj = $(obj);
        obj.css({"height":window.innerHeight});
        /*操作方法*/
        var fn =
            {
                //移动容器
                translate: function (diff) {
                    obj.css({
                        "-webkit-transform": "translate(0," + diff + "px)",
                        "transform": "translate(0," + diff + "px)"
                    });
                },
                //设置效果时间
                setTranslition: function (time) {
                    obj.css({
                        "-webkit-transition": "all " + time + "s",
                        "transition": "all " + time + "s"
                    });
                },
                //返回到初始位置
                back: function () {
                	    fn.setTranslition(1);
                    fn.translate(0 - offset);
                    //标识操作完成
                    isLock = false;
                }
            };

        //滑动开始
        obj.bind("touchstart", function (e) {
        	console.log('sdfsd');
        		if(obj.scrollTop() > 0 ){
        			return;
        		}
        		console.log('start');
            if (!isLock) {
                var even = typeof event == "undefined" ? e : event;
                //标识操作进行中
                isLock = true;
                isCanDo = true;
                //保存当前鼠标Y坐标
                start = hasTouch ? even.touches[0].pageY : even.pageY;
                //消除滑块动画时间
                //fn.setTranslition(0);
            }
        });

        //滑动中
			obj.on(hasTouch ? "touchmove" : "mousemove", function (e) {

            if (isLock && isCanDo) {

                var even = typeof event == "undefined" ? e : event;

                //保存当前鼠标Y坐标
                end = hasTouch ? even.touches[0].pageY : even.pageY;
				
                if (start < end) {
                    even.preventDefault();
                    //消除滑块动画时间
                    fn.setTranslition(0);
                    //移动滑块
                    fn.translate((end - start - offset)*0.6);
                }

            }
        });


        //滑动结束
        obj.bind("touchend", function (e) {
            if (isCanDo) {
                isCanDo = false;
                //判断滑动距离是否大于等于指定值
                if (end - start >= offset) {
                    //设置滑块回弹时间
                    fn.setTranslition(1);
                    //保留提示部分
                    fn.translate(0);

                    //执行回调函数
                    if (typeof callback == "function") {
                        callback.call(fn, e);
                    }
                } else {
                    //返回初始状态
                    fn.back();
                }
            }
        });
    }


    $(function () {
        slide("#container", 50, function (e) {
            var that = this;
            setTimeout(function () {
                that.back.call();
            }, 2000);

        });
    });
</script>