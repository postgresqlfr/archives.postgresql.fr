#!/bin/sh
#
#       pgbouncer OCF RA. 
#
#       by Fabien Foglia 01/02/2008
#

#######################################################################
# Initialization:

. ${OCF_ROOT}/resource.d/heartbeat/.ocf-shellfuncs
#######################################################################

meta_data() {
	cat <<END
<?xml version="1.0"?>
<!DOCTYPE resource-agent SYSTEM "ra-api-1.dtd">
<resource-agent name="pgbouncer" version="0.9">
<version>1.0</version>

<longdesc lang="en">
This is a Pgbouncer Resource Agent.
</longdesc>
<shortdesc lang="en">Pgbouncer resource agent</shortdesc>

<actions>
<action name="start"        timeout="30" />
<action name="stop"         timeout="30" />
<action name="monitor"      timeout="1" interval="3" depth="0" start-delay="0" />
<action name="meta-data"    timeout="5" />
</actions>
</resource-agent>
END
}

#######################################################################

pgbouncer_usage() {
	cat <<END
usage: $0 {start|stop|monitor|meta-data}

Expects to have a fully populated OCF RA-compliant environment set.
END
}

# PATH should only include /usr/ if it runs after the mountnfs.sh script
PATH=/sbin:/usr/sbin:/bin:/usr/bin
DESC="PgBounver is connection pooler for PostgreSQL"
NAME=pgbouncer
DAEMON=/usr/bin/$NAME
DAEMON_ARGS="-d /etc/pgbouncer"
SCRIPTNAME=/etc/init.d/$NAME
PIDFILE=`grep pidfile /etc/pgbouncer |cut -d"=" -f 2`


# Exit if the package is not installed
[ -x "$DAEMON" ] || exit 0

# Read configuration variable file if it is present
[ -r /etc/default/$NAME ] && . /etc/default/$NAME

# Load the VERBOSE setting and other rcS variables
. /lib/init/vars.sh

# Define LSB log_* functions.
# Depend on lsb-base (>= 3.0-6) to ensure that this file is present.
. /lib/lsb/init-functions


pgbouncer_start() {
        if [ "$START" != "1" -a "$1" != "stop" ]; then 
		[ "$VERBOSE" != yes ] && log_warning_msg "Not starting pgbouncer - edit /etc/default/pgbouncer and change START to be 1.";
		return $OCF_ERR_UNIMPLEMENTED;
	fi

	start-stop-daemon --start --quiet --exec $DAEMON --test > /dev/null \
		|| return $OCF_NOT_RUNNING; 
	start-stop-daemon --start --quiet --exec $DAEMON -- \
	        $DAEMON_ARGS \
	        || return $OCF_NOT_RUNNING;
			        
	# Add code here, if necessary, that waits for the process to be ready
	# to handle requests from services started subsequently which depend
	# on this one.  As a last resort, sleep for some time.

        return $OCF_SUCCESS;
}

pgbouncer_stop() {
        if [ -f $PIDFILE ]; then
        	pid=`cat $PIDFILE`
	else
		return 7
	fi
	
	kill $pid;  
	return 0;
}

pgbouncer_monitor() {
        if [ -f $PIDFILE ]; then
		pid=`cat $PIDFILE`
	fi
	if [ ! -z $pid ]; then
		kill -0 $pid
	        if [ $? = 0 ]; then
	        	return $OCF_SUCCESS
		fi
	fi
        return $OCF_NOT_RUNNING
}

case $__OCF_ACTION in
meta-data)      meta_data
                exit $OCF_SUCCESS
                ;;
start)          pgbouncer_start;;
stop)           pgbouncer_stop;;
monitor)        pgbouncer_monitor;;
usage|help)     pgbouncer_usage
                exit $OCF_SUCCESS
                ;;
*)              pgbouncer_usage
                exit $OCF_ERR_UNIMPLEMENTED
                ;;
esac

rc=$?
ocf_log debug "${OCF_RESOURCE_INSTANCE} $__OCF_ACTION : $rc"
exit $rc
