import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

GPIO.setup(235,out)

GPIO.output(235,GPIO.HIGH)

sleep(1800)

GPIO.output(235,GPIO.LOW)