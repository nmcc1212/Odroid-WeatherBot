#!/usr/bin/env python3
from time import sleep
import RPi.GPIO as GPIO

GPIO.setwarnings(False)

GPIO.setmode(GPIO.BOARD)

GPIO.setup(19,GPIO.OUT)

GPIO.output(19,GPIO.LOW)

sleep(5)

GPIO.output(19,GPIO.HIGH)

exit()