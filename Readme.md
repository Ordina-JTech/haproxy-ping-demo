## Using HAProxy for loadbalancing 2 web servers in docker

This project contains 3 docker containers, two apache servers and one haproxy server which load balance between these two servers.

The following addresses can be used:
http://[ip]:80     demo website
http://[ip]:81     haproxy admin site
http://[ip]:84     haproxy admin site
http://[ip]:85     haproxy admin site
