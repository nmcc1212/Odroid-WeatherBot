#!/usr/bin/env python3
from time import sleep
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

GPIO.setup(19,GPIO.OUT)

GPIO.output(19,GPIO.HIGH)

f= open("inuse.txt","w+")

sleep(1800)

GPIO.output(19,GPIO.LOW)

f= open("inuse.txt","w+")