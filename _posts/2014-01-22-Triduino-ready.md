---
title: First stable version of Triduino Ready!!
description: SmartLab first prototype of an Android application that enables the mobile phone to receive and visualize data coming from sensors connected to an Arduino controller with loaded the Triduino Sketch is ready.
tags: [Triduino,prototype,sensor]
categories: [Open Data]
thumbimg: /img/blog-widget05.jpg
postimage: /images/truduinoready.png
layout: post
date: 2015-01-20 19:40
author: Luca
comments: true
tags:
- Triduino 
- prototype
- sensor

---

After some months of pause I was able to restart the activities on **Triduino** (We had all to concentrate our forces in some big **open data projects** that are bringing us the lymph for feeding the company and our families..) and what came out went beyond our expectations.

Just to make a short recap on Triduino story we first created [a simple air quality station](http://blog.sciamlab.com/open%20data/2013/12/21/air-quality-low-cost.html), then [the first Triduino prototype](http://blog.sciamlab.com/open%20data/2014/04/15/first-triduino-prototype.html).

In the first prototype I created **a java library and an android application** capable, with a simple configuration, to communicate with an Arduino device running a sketch implementing a simple ad-hoc protocol I created; however this approach revealed very soon its limitations as soon as I tried to attach to it other sensors because most of them (especially the digital ones) need the installation and the utilization of specific libraries in the sketch code making the entire system still too geek oriented needing programming skills on the Arduino side.
So I had a choice, or giving up and remaining with the satisfaction of the prototype or deciding to make a big step: generating automatically the code to be flashed in Arduino and finding a way up flash it via Bluetooth from Android…

…I accepted the challenge!

I rolled up my sleeves and I decided to start by the code generation: so I created first **a sensor database on MySQL and a REST service** (thank you Paolo Starace for creating the skeleton for this) to be invoked from the Android application that previously read only the local XML file.

I also created with a scaffolding method a web application that allowed me to populate “easily” the database that became quite complex

Then I enriched the database associating to each sensor some snippets of code to be used by the code generator for creating the sketch and then, finally, **the code generator and the REST service invoking it**, that mashed up everything.. believe me that was tough already…

..but then the wireless upload of the sketch via Bluetooth turn came and there I really was almost giving up because there were **3 main problems** I had to solve that seemed unresolvable:

1.	The avrdude porting to Android was working but a very old version not supporting the latest models (like the Yun) and not maintained anymore

2.	it seemed impossible flashing the sketch from a non rooted device given some limitations of the Android Bluetooth stack  implementation.

3.	How to avoid the pressing of the reset button on the board exactly in time with the upload of the sketch

I started with **solving the first problem** and I was able to cross-compile avrdude for having it working on Android (thanks also to forums and posts from Anton Smirnov, the author of ArduinoCommander)

Then I solved the flashing of the sketch from a non-rooted device writing my custom Android service.

But one of the most challenging things was the reset button: I checked many different solutions like the soft reset or the Watchdog, but none of them was satisfying for different reasons; then I bought an ADAFruit BT modem that I could connect to a simple reset circuit implemented by me…. And it worked great by laptop (that means I didn’t have to press the reset button) but not from Android because of the bloody BT stack implementation in Android that doesn’t give the possibility of sending control signals through serial…

…then I found a trick, implementing a simple circuit for creating a “programming mode” on Triduino…. Ahhhhhhhhh what a satisfaction!!!!

Now we have something that can really **make the difference allowing everyone** (not necessarily a geek!!) that wants to have some sensors to be monitored with the mobile to create their own device.

The next step is taking the output of the sensors (that are already post-processed using the configured formula) and submitting them into open data networks.

Stay tuned!!

**“Long life and prosperity”**
 
 
 
 

**Tech specs:**

1. Arduino UNO V3 (microcontroller)
+ Arduino Termistor (Temperature Sensor)
+ Arduino Hall effect Sensor (Magnetic field Sensor)
+ BlueSMIRF (Sparkfun Bluetooth modem)
+ 1uF polarized capacitor
+ 1NPN BjT
+ 1 button
+ 1 RGB LED
+ 2 220 Ohm resistors
+ wires
+ Triduino Lib V9
+ Triduino Android App V9
+ Triduino Api V9
+ Triduino Code Generator V9
+ time and patience


**Costs:** 63€
