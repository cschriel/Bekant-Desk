#!/bin/bash
# This script simulates a button down press, waits a bit, and releases it. Ajust the sleep time to your own liking.
gpio mode 0 out
gpio write 0 0
sleep 13
gpio write 0 1
