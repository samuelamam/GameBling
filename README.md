PHP7+NGINX

调试域名为www.game.cc

控制器 admin-后台 index-前台

所有模板与静态文件都在Views对应目录下 

在nginx vhost下添加伪静态（调试模式）

location / {
    index  index.html index.htm index.php;
    if (-f $request_filename) {
        expires max;
        break;
    }
    if (!-e $request_filename) {
        rewrite ^/(.*)$ /index.php/$1 last;
    }
    #autoindex  on;
}