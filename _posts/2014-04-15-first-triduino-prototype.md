---
title: Sciamlab first Triduino prototype ready!
description: SmartLab first prototype of an Android application that enables the mobile phone to receive and visualize data coming from sensors.
tags: [Triduino, prototype, sensor]
categories: [Open Data]
thumbimg: https://github.com/sciamlab/blog/blob/gh-pages/images/blog-widget05.jpg?raw=true
postimage: https://github.com/sciamlab/blog/blob/gh-pages/images/startrek.jpg?raw=true
layout: post
date: 2014-04-15 15:50
author: Luca
comments: true
---
How many geeks like me grew up with **Star Trek**, its travels across the universe and its technology; how many of you dreamed at least once in their lives **to own one Tricorder**, that magic device used for **sensor-scanning and data analysis** that was able to find life forms, analyzing chemicals, liquids etc. in any possible environment.

One day of December 2013 in a cold Berlin winter and after a couple of beers I started looking in internet for **anyone who actually tried creating one** and I ended up [here](http://www.tricorderproject.org) … OMG!!! Someone took the mission very seriously!

Then I had a thought that was: why building the entire hardware while most of us already have all the computational power in their mobiles?

Why instead not trying **to use the mobile** as main elaboration **central of data coming from sensors**?

That was when **Triduino** was born.

I took my [small air quality station](blog.post({id:'2013-12-21-air-quality-low-cost'})) I attached it one temperature sensor and one **temperature/humidity sensor**, I updated the Arduino sketch in order to implement a trivial communication protocol XML-based (yeah I know I know why not JSON?) and I started coding a java library that could be used in both, desktop and Android in order to allow the creation of desktop and mobile applications for:

1)	communicating with Arduino using my trivial protocol

2)	configuring sensors (through one XML file)

all in few minutes.

Not only: what I wanted to achieve was also the possibility of **defining a formula** to be applied to the raw signal coming from sensors and being elaborated on the mobile in real-time.

After few iterations I wrote a simple Android application using the Triduino library (below a collage of the screenshots of the app) where sensors configuration can be done on the application (formula included) and real-time values coming via Bluetooth are displayed in real-time graphs (applying in real-time the formula!)…cool isn’t it?

![triduino](https://github.com/sciamlab/blog/blob/gh-pages/images/triduino.jpg?raw=true)

The concept has been proved! We still have to decide what we’ll do next because the potential seems very high and we want to take the right direction.

Remain tuned for the next updates on that!

**“Long life and prosperity”**   


**Tech specs:**

1)	Arduino UNO V3 (microcontroller)

2)	GP2Y1010AU0F (Sharp optical air quality sensor)

3)	Arduino T000200 (Temperature Sensor)

4)	DHT11 (Temperature and Humidity Sensor)

5)	BlueSMIRF (Sparkfun Bluetooth modem)

6)	220uF polarized capacitor

7)	150 OHM resistor

8)	9V battery

9)	wires

10)	 Triduino Lib V7

11)	 Triduino Android App V7

12)	time and patience



**Costs:** 60€
