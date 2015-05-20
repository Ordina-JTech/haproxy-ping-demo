#!/bin/bash

export DOCKERNAME_HAPROXY="haproxy"
export DOCKERNAME_APACHE1="apache1"
export DOCKERNAME_APACHE2="apache2"

docker stop $DOCKERNAME_HAPROXY
docker stop $DOCKERNAME_APACHE1
docker stop $DOCKERNAME_APACHE2
