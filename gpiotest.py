import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

GPIO.setup(19,out)

GPIO.output(19,GPIO.HIGH)

sleep(5)

GPIO.output(19,GPIO.LOW)