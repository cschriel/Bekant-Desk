#!/bin/bash
# This script simulates a button up press, waits a while, and releases it. Ajust the sleep time to your own liking.
gpio mode 1 out
gpio write 1 0
sleep 13
gpio write 1 1