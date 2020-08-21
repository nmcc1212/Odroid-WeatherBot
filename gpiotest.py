import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

GPIO.setup(12,out)

GPIO.output(12,GPIO.HIGH)

sleep(5)

GPIO.output(12,GPIO.LOW)