---
title: Large public works meet the Open Data
description: SciamLab realizes the Open Data Portal for Open Expo 2015
tags: [transparency,open data,open contracting,expo2015]
categories: [Open Data]
thumbimg: https://github.com/sciamlab/blog/blob/gh-pages/images/blog-widget-openexpo.jpg?raw=true
postimage: https://github.com/sciamlab/blog/blob/gh-pages/images/openexpo-screens.jpg?raw=true
layout: post
date: 2014-09-19 19:40
author: Alessio
comments: true
---
In the last few weeks the The Superintendence for Archaeological Heritage of Pompeii, Herculaneum and Stabia under the guidance of the Institute of the Ministry of Heritage and Culture released [http://open.pompeiisites.org/](http://open.pompeiisites.org/) the first open datasets with the entire tenders and work status details of the archeological sites.

After just few days from the Open Pompei debut we released the new transparency and open data portal for the Expo 2015 now available on [http://www.openexpo2015.it](http://www.openexpo2015.it). OpenExpo is the result of a massive effort coordinated by Giovanni Menduni from the Milan Polytechnic who see us involved in a heterogeneous team with members from Expo 2015 s.p.a., The Department of Statistic, Information and Application (DiSIA) of the University of Florence, Formez PA and Wikitalia who's responsible and leading the entire initiative. Giovanni in [his post](http://www.chefuturo.it/2014/09/il-primo-selfie-bob-dylan-e-il-senso-di-openexpo-per-unitalia-migliore/) already made a great summary of the OpenExpo backgrounds and the spirit that animated the entire effort that bring it live in record time.

Meanwhile these two great italian initiaves are shedding a new lights into the domain of large and complex public works is happening that a multinational team is working to a new and dedicated standard to facilitate similar initiative globally.
I'm talking about [Open Contracting](http://www.open-contracting.org/) who have release just today a new beta versions of it's [Open Contracting Data Standard (OCDS)](http://ocds.open-contracting.org/standard/r/0__3__3/)

So as it's happening in many other public sectors where opendata is becoming a default it seems that also for organization involved in large public works, exposing *The Good, the Bad and the Ugly* is becoming a mandatory step, a unique opportunity to engage with media and the public and estabilish a comunication channel that otherways was not absolutelly immaginable.

Another interesting fact, is that similar initiatives could not be possible without the involvment of public servants and civic hackers often grouped into informal groups or under an NGOs.
For the *Great Pompei Project* for example the [Open Pompei accompanying project](http://www.openpompei.it) as been pivotal for animating the territory and create the required awarness in the field personel about the the *open* approach.
In the case of Open Expo, Wikitalia and his president Riccardo Luna have committed a plan to for openess of the Expo 2015 S.p.A. works [during the Digital Venice event](http://luna.blogautore.repubblica.it/2014/07/09/open-expo-cose-cosa-comporta-e-perche-e-finalmente-ripartita-la-trasparenza-di-expo-2015/) and engaged with several private and public organizations to setup in record time the first release of the OpenExpo open data platform.

OK.. if you have not yet stopped reading this post, it means that you are hungry so let me serve you few additional details about what's behind the scenes of Open Expo in the hope that it will be usefull also for other dealing with similar challenges.

The aim of our team was to deliver a complete set of datasets related to the Expo 2015 works and to make it available reusing as much as possible the approach and infrastructure based on Drupal and CKAN we already setup for the [dati.gov.it](http://www.dati.gov.it) portal. The objective so was 1st to make it in time before September the 11th, date set for the [press conference](http://www.expo2015.org/it/eventi/tutti-gli-eventi/la-conferenza-stampa-di-presentazione-openexpo) that for te sake was just 12 days after our engagement and 2nd to create from scratch a relational database schema to validate, consolidate and then expose the Expo 2015 works data.
The data indeed originally come from a shared spreadsheet feeded collaborativelly by Expo's personnel, periodically dumped into a MS Access and finally consolidated by us into a relational PostgreSQL schema. It was a continuos iterative process that went far beyond the most extreme programming practices. For the layout customization we created a CKAN plugin that has been released as open source and [made available on GitHub](https://github.com/sciamlab/ckanext-expo2015).
It was challenging but fun, like a mission impossibile, a sleepless experience where no failures can be tolerated!
