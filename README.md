## nginx 配置
```
server {

listen 80;
server_name educommon.lpmas.org;
root /www/edusoho/web;   #此处修改为实际的路径
access_log /var/log/nginx/edusoho_com.access.log;  #此处修改为实际的路径
error_log /var/log/nginx/edusoho_com.error.log;  #此处修改为实际的路径

location / {
index app.php;
try_files $uri @rewriteapp;
}

location @rewriteapp {
rewrite ^(.*)$ /app.php/$1 last;
}

location ~ ^/udisk {
internal;
root /www/edusoho/app/data/;  #此处修改为实际的路径
}

location ~ ^/(app|app_dev)\.php(/|$) {
fastcgi_pass   127.0.0.1:9000; 
fastcgi_split_path_info ^(.+\.php)(/.*)$;
include fastcgi_params;
fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
fastcgi_param  HTTPS              off;
fastcgi_param HTTP_X-Sendfile-Type X-Accel-Redirect;
# fastcgi_param HTTP_X-Accel-Mapping /udisk=/www/edusoho/app/data/udisk;  #此处修改为实际的路径
fastcgi_param HTTP_X-Accel-Mapping /www/edusoho/app/data/udisk=/udisk; 
fastcgi_buffer_size 128k;
fastcgi_buffers 8 128k;
}

location ~* \.(jpg|jpeg|gif|png|ico|swf)$ {
# expires 3y;
access_log off;
gzip off;
}

location ~* \.(css|js)$ {
access_log off;
# expires 3y;
}

location ~ ^/files/.*\.(php|php5)$ {
deny all;
}

location ~ \.php$ {
fastcgi_pass   127.0.0.1:9000;
fastcgi_split_path_info ^(.+\.php)(/.*)$;
fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
fastcgi_param  HTTPS              off;
include        fastcgi_params;
}

}
```

##修改数据库等配置文件
* 打开文件edusoho/app/config/parameters.yml，修改数据库配置以及登录和注册passport地址
* 打开文件edusoho/src/Custom/WebBundle/Resources/config/requestParam.yml，修改请求服务网关配置
* 打开文件edusoho/src/Custom/MobileBundle/Resources/config/redis_config.yml，修改redis的配置
* 每次修改后需删除app/cache/prod 此目录或进入后台管理（系统-->优化和备份-->刷新缓存）刷新缓存，访问网站

## 使用composer更新依赖包
1. 安装 ``composer install``,``install`` 命令从当前目录读取 ``composer.json`` 文件，处理了依赖关系，并把其安装到 ``vendor`` 目录下。
2. 更新 为了获取依赖的最新版本，并且升级 ``composer.lock`` 文件，你应该使用 ``update`` 命令

## 配置文件上传大小限制
1. 打开nginx主配置文件nginx.conf，找到http{}段，添加 ``client_max_body_size 200m;``
2. 打开php.ini文件，设置上传文件上限  ``upload_max_filesize = 200M ;`` `` post_max_size = 300M ; ``