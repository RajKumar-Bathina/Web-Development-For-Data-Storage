#!/usr/bin/python
import urllib2
import sys
import Adafruit_DHT
c=0
	while True:
 	   c=c+1
 	   humidity, temperature = Adafruit_DHT.read_retry(11, 4)
	  if c==3:
		break;
 	print 'Temp: {0:0.1f} C Humidity: {1:0.1f} %'.format(temperature,humidity)
                 response =urllib2.urlopen('http://192.168.29.143:8080/log/upload1.php/?date=CURDATE()&time=CURTIME()'"&field1=" +str(temperature) + "&field2="+str(humidity))
print response.info()
html = response.read()
response.close() # best practice to close the filed
