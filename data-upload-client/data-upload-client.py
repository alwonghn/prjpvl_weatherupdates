import requests
import time
from sense_hat import SenseHat
sense = SenseHat()
while True:
    t = sense.get_temperature()
    p = sense.get_pressure()
    h = sense.get_humidity()
    t = round(t, 1)
    p = round(p, 1)
    h = round(h, 1)
    
    params= { 'sensor_id':10, 'temperature':(t), 'humidity':(h) }
    r = requests.post('http://192.168.3.12:8000/api/weather', data=params)
    print (r.url)
    print ('sensor_id: %s, temperature :%s degC, humidity: %s rH', 10, t, h)
    time.sleep(2)