#!/bin/bash

export DOCKERNAME_HAPROXY="haproxy"
export DOCKERNAME_APACHE1="apache1"
export DOCKERNAME_APACHE2="apache2"

docker rm -f $DOCKERNAME_HAPROXY
docker rm -f $DOCKERNAME_APACHE1
docker rm -f $DOCKERNAME_APACHE2
