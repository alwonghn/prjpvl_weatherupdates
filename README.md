
PART1: WEB APPLICATION RUNNING in VM hosted ON PC/LAPTOP (SIMULATEs CLOUD BACKEND SERVER):
Environment required:
-Virtualbox VM running Ubuntu 20.04, configured for Bridged Networking mode.
- net-tools installed in ubuntu vm (ifconfig command)
-VSCode
-Php/Laravel
-Vue.js/nodejs/npm
-MySql
-PhpMyAdmin with a Superuser account: 'Sdipuser' Password:'admin' installed. Create a new database:'eg251s'.

Setup:
1. launch Virtualbox VM with os Ubuntu 20.04
2. open terminal ifconfig - assigned ip address - e.g.192.168.3.12
3. copy and unzip 351eassignment-cloud.zip to /home/<myuser>/projects folder
4. open a bash terminal. cd into 'weather' folder (within the abovementioned unzipped 351eassignment-cloud folder) which contains a Laravel/Php back-end application.
5. open PhpMyAdmin and create a new database 'eg351s' (laravel data migration cannot create databases).
6. cd into the root folder of the 'weather' application. run the data migration script 2021_07_08_075139_create_weather_table by typing: php artisan migrate, it will auto create a table in the eg351s database called 'weather'.
7. startup 'weather' application, run: 'php artisan serve --host 192.168.3.12 --port 8000', keep terminal open.
8. in host machine/PC/Laptop which is on the same LAN as the VM, open a command prompt, type curl http://192.168.3.12:8001/api/weather/weektodate,  it should return all the sensor records in the 'weather' table or if it is empty, it should just return the command prompt and NOT 'connection refused' message.

PART2: DATA-COLLECTION CONTROLLER AND SENSORS FROM SENSEHAT - Temperature and Humidity humidity sensors.

Environment required:
-Sensehat shield installed on Raspberry Pi

Setup:
1. bootup Raspberry Pi machine (below-mentioned Part3).
2. remote into Raspberry Pi UI/desktop. open a new terminal, install sensehat - run sudo apt-get install sense-hat
3. reboot RPI : sudo reboot


PART3: DATA-UPLOAD-CLIENT ON RASPBERRY PI (SIMULATEs PRIMARY NODE OF MANET OR LOCAL UPLOAD SERVER OF SENSOR NETWORK, WIFI OR LORA)
Environment required:
-Raspberry Pi
-Python3, Pip3, requests package installed

Setup:
1. in Raspberry Pi machine, launch Thonny Python ide app.
2. file> open > navigate into 'weather-upload' folder and open 'data-upload-client.py' Python script for collecting sensor readings.
3. click run. check the Thonny Python console output to confirm that Temperature and Humidity sensor readings are incoming.
4. go to PC/Laptop, check the Php laravel server terminal for sysout of accepted incoming api requests like '..Accepted,..Closed'.
5. open PhpMyAdmin to check any sensor records saved inside database 'eg351s', in the auto-created table 
6. open a new bash terminal. cd into 'weather-updates' folder containing Vue.js standalone front-end application.
7. startup 'weather-updates' application :  run: 'npm run serve', keep terminal open.
8. open browser, browse to http://127.0.0.1:8080. 'weather-updates' 
9. the 'weather-updates' application - records display page is displayed. 
10. in the dropdown list, select 'last 7 days' to show only the last week's collected records.

