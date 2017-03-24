---
title: Sciamlab first air quality low cost station
description: SmartLab air quality station based on Arduino, an air quality sensor and a Bluetooth modem is ready.
tags: [air quality, Arduino]
categories: [Open Data]
thumbimg: https://github.com/sciamlab/blog/blob/gh-pages/images/blog-widget05.jpg?raw=true
postimage: https://github.com/sciamlab/blog/blob/gh-pages/images/airqualitylowcost.jpg?raw=true
layout: post
date: 2013-12-21 15:50
author: Luca
comments: true
---
We finally implemented our first **air quality low cost station**!
Few days ago we found on internet [the airqualityegg](http://airqualityegg.com) and inspired from that project we told ourselves: why don’t we try approaching the problem checking out if we can do something similar with a **lower cost**? Well we took our **Arduino**, an air quality sensor, **a Bluetooth modem**, some spare time and….voilà!
Here our small station sends via Bluetooth the values of **the concentration of air particles** in mg/m3 to **an android device** every second.

**Tech specs:**

1)	Arduino UNO V3 (microcontroller)

2)	GP2Y1010AU0F (Sharp optical air quality sensor)

3)	BlueSMIRF (Sparkfun Bluetooth modem)

4)	220uF polarized capacitor

5)	150 OHM resistor

6)	9V battery

7)	wires

8)	time and patience

**Implementation time:** 2hours (crimping connectors for the sensor without a proper crimper has been the longest activity)

**Costs:** 57€
