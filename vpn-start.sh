#!/bin/bash

OVPN_DATA="ovpn-data-ctf"
docker run -v $OVPN_DATA:/etc/openvpn -d -p 1194:1194/udp --cap-add=NET_ADMIN kylemanna/openvpn
