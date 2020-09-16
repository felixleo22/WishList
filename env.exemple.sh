export MYSQL_DATABASE="database"
export MYSQL_USER="changeMe"
export MYSQL_PASSWORD="changeMe"
export MYSQL_ROOT_PASSWORD="changeMe"

if [[ -f env.local.sh ]] ; then
  source env.local.sh
fi