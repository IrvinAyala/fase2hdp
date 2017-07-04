#!/bin/sh
#### Defino los parametros de conexión a la BD mysql
sql_host="localhost"
slq_usuario="root"
sql_password="2345"
sql_database="mysql"
### Se monta los parámetros de conexión
sql_args="-h $sql_host -u $slq_usuario -p$sql_password -D $sql_database -s -e"
### Mi sentencia Sql para que la muestre
mysql $sql_args "update user set plugin='' where user='root';"
mysql $sql_args "flush privileges;"

