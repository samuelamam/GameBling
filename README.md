PHP7+NGINX

调试域名为www.game.cc

控制器 admin-后台 

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