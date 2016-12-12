#!/bin/bash
########################################################## 
# Fake privilege escapation for Weevely 1.0 demostration #
##########################################################

# THIS EXPLOIT SPAWN A ROOT SHELL

# With Weevely you can easily edit files situated on target as if 
# it was on local machine, for example to configure scripts like this.

RUNIT=0

if [ $RUNIT -ne 0 ]; then
	echo "Spawning root shell.."
	/sbin/suidproc
else
	echo "Please edit this script to activate the example exploit. Quitting."
fi
