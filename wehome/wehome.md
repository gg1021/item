# 项目背景
### wehome
家居企业站，<br> 
目的........功能 <br> 
关于我们<br>
产品分类<br>
产品<br>
新闻资讯<br>
预约<br>
服务

## 关于我们
功能：介绍企业。
包含信息：企业名称、logo、企业文化、理念、愿景、
## 产品分类
功能
## 商品
功能：
包含信息：名称、图片、内容、价格.......
# 环境
## 环境：
apache 2.4.39 <br>  mysql5.7.6 <br> php7.2.18
## 技术
基于B/S架构实现的家具类的企业站，基于过程的开发模式
# 项目目录结构
#### admin 处理关于后台业务逻辑相关文件
#### index 处理关于前台业务逻辑相关文件
#### static 静态资源
img、css、js
#### view 静态页面
admin 后台相关的模板
index 前台相关的资源
#### index.php  前台的入口文件
#### admin.php  后台的入口文件



# 管理员登录
## 功能：登录到后台，管理企业站 <br>
## 流程：前台收集数据（用户名，密码）->提交<br>
    1.展示登录页
    2.验证登录
        a.利用请求方式不同实现一个login.php处理实现两个功能，
        b.$_SERVER['REQUEST_METHOD']    请求的方式
        C.GET(1)    POST(2)
### 注意：
    1.HTML、PHP混排注意边界符
    2.包含文件：require include
    3.混排的HTML需要从外部引入img、css、js等所需的路径信息时，相对于PHP文件的路径往进引。   
    静态文件的路径：基于PHP
    
## 后台整体框架
    1.布局：flex、定位
    2.iframe
    3.a属性（target）
## 导航管理--添加   navinsert.php
    1.收集导航信息
        a.form表单->表单控件(input,select,option,textarea,button)
    2.提交插入
## 导航管理--查看   navselect
    1.查看页面
    2.查询数据->返回
    3.渲染
    
### ajax实现
        1.先展示页面
        2.前台发送请求
        3.后台请求，返回数据
        4.前台渲染页面
### PHP和HTML进行混排
    1.展示页面
    2.获取数据
    3.渲染页面
## 导航管理--删除   navremove
ajax实现：实现委派 <br>
HTML、PHP混排：事件委派、按钮点击 
## 图片上传
    1.前台选择图片上传 file 
    2.后台接收上传的文件 ，移动到指定位置。
    3.返回这个图片的路径
    4.伴随表单提交插入到数据库

    ··上传文件的提交方式必须POST
    头信息，Content-type:multipart/form-data

# 前台
## 首页导航->展示不同的页面，处理不同的数据
    1.分散
        php导航：一对一
    2.集中
        php导航：一对多
        明确哪个导航
        href=”category.php?id= "

## 公共部分 全部拆出来 放在一起
