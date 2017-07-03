#!/usr/bin/env bash

mysql -u root -p2345
use mysql
update user set plugin='' where user='root';
flush privileges;
