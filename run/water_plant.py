from classes import Hardware
from classes import TimeKeeper as TK
import schedule
import time
import ssl

# WATERING_TIME must be in "00:00:00 PM" format
WATERING_TIME = '1:00:00 PM'
SECONDS_TO_WATER = 1800
RELAY = Hardware.Relay(235, False)

def water_plant(relay, seconds):
    relay.on()
    print("Plant is being watered!")
    time.sleep(seconds)
    print("Watering is finished!")
    relay.off()

def main():
    time_keeper = TK.TimeKeeper(TK.TimeKeeper.get_current_time())
    if(time_keeper.current_time == WATERING_TIME):
        water_plant(RELAY, SECONDS_TO_WATER)
        time_keeper.set_time_last_watered(TK.TimeKeeper.get_current_time())
        print("\nPlant was last watered at {}".format(time_keeper.time_last_watered))

schedule.every().friday.at("12:00").do(water_plant(RELAY, SECONDS_TO_WATER))

while True:
    schedule.run_pending()
    time.sleep(1)
    main()