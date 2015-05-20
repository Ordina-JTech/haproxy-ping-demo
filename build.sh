#!/bin/bash

docker rm -f haproxy
docker rm -f apache1
docker rm -f apache2

# build and run 2 apache container
docker build -t robbertvdzon/apache ./apache
docker run -d -it -p 172.17.42.1:10080:80 -p 84:80 --name apache1 robbertvdzon/apache
docker run -d -it -p 172.17.42.1:20080:80 -p 85:80 --name apache2 robbertvdzon/apache

# build and run haproxy container
docker build -t robbertvdzon/haproxy ./haproxy
docker run -d -it -p 80:80 -p 81:81 --name haproxy robbertvdzon/haproxy

