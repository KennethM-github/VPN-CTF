#!/bin/bash

docker run --rm -it --detach --net=docker-net-vpn --ip=172.20.20.4 $1
