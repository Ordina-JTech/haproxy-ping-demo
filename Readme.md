## Using HAProxy for loadbalancing 2 web servers in docker

This project contains 3 docker containers, two apache servers and one haproxy server which load balance between these two servers.
More information about this project can be found in this blog: http://robbertvdzon.blogspot.nl/2015/03/using-haproxy-for-loadbalancing-2-web.html

To build and run all three containers, you can use the build.sh command.
After the containers are started, the following addresses are available:

http://[ip]:80     demo website

http://[ip]:81     haproxy admin site

http://[ip]:84     haproxy admin site

http://[ip]:85     haproxy admin site
