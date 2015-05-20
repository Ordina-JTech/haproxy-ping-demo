#!/bin/bash

export DOCKERNAME_HAPROXY="haproxy"
export DOCKERNAME_APACHE1="apache1"
export DOCKERNAME_APACHE2="apache2"

docker start $DOCKERNAME_APACHE1
docker start $DOCKERNAME_APACHE2
docker start $DOCKERNAME_HAPROXY
