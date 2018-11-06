Updating ab5d74b..cb18326
Fast-forward
 .htaccess                                          |  13 +-
 _config.yml                                        |   1 -
 abroad.html                                        | 430 --------------------
 assets/d/.~lock.campaign-offices.csv#              |   1 +
 assets/d/campaign-offices.csv                      |   2 +-
 assets/d/event-data.json                           |   6 +-
 assets/img/Amtrak.png                              | Bin 370059 -> 0 bytes
 assets/img/July29_FBMapImage_600px.old.png         | Bin 266448 -> 0 bytes
 assets/img/July29_FBMapImage_600px.png             | Bin 304977 -> 0 bytes
 assets/img/bernie-logo.png                         | Bin 34524 -> 0 bytes
 assets/img/billionaires.svg                        |  95 -----
 assets/img/events-map.png                          | Bin 0 -> 723298 bytes
 assets/img/french-video-gif-1-repeat.gif           | Bin 1419709 -> 0 bytes
 assets/img/french-video-gif-no-repeat.gif          | Bin 1408910 -> 0 bytes
 assets/img/french-video-gif.gif                    | Bin 350981 -> 0 bytes
 assets/img/list-end.png                            | Bin 12160 -> 0 bytes
 assets/img/logo.png                                | Bin 13786 -> 723298 bytes
 assets/img/map-v-2.png                             | Bin 1186225 -> 0 bytes
 assets/img/offices/DC-01.png                       | Bin 686706 -> 0 bytes
 assets/img/offices/IO-1.png                        | Bin 536631 -> 0 bytes
 assets/img/offices/IO-10.png                       | Bin 660719 -> 0 bytes
 assets/img/offices/IO-11.png                       | Bin 491996 -> 0 bytes
 assets/img/offices/IO-12.png                       | Bin 634788 -> 0 bytes
 assets/img/offices/IO-13.png                       | Bin 1018163 -> 0 bytes
 assets/img/offices/IO-14.png                       | Bin 724971 -> 0 bytes
 assets/img/offices/IO-15.png                       | Bin 612183 -> 0 bytes
 assets/img/offices/IO-2.png                        | Bin 685196 -> 0 bytes
 assets/img/offices/IO-3.png                        | Bin 593451 -> 0 bytes
 assets/img/offices/IO-4.png                        | Bin 629070 -> 0 bytes
 assets/img/offices/IO-5.png                        | Bin 699496 -> 0 bytes
 assets/img/offices/IO-6.png                        | Bin 587489 -> 0 bytes
 assets/img/offices/IO-7.png                        | Bin 965783 -> 0 bytes
 assets/img/offices/IO-8.png                        | Bin 748480 -> 0 bytes
 assets/img/offices/IO-9.png                        | Bin 462072 -> 0 bytes
 assets/img/offices/NH-01.png                       | Bin 567142 -> 0 bytes
 assets/img/offices/NH-02.png                       | Bin 495870 -> 0 bytes
 assets/img/offices/NH-03.png                       | Bin 324803 -> 0 bytes
 assets/img/offices/NH-04.png                       | Bin 477578 -> 0 bytes
 assets/img/offices/NH-05.png                       | Bin 493719 -> 0 bytes
 assets/img/offices/NH-06.png                       | Bin 632417 -> 0 bytes
 assets/img/offices/NH-07.png                       | Bin 857768 -> 0 bytes
 assets/img/offices/NH-08.png                       | Bin 618487 -> 0 bytes
 assets/img/phonebank.png                           | Bin 266807 -> 0 bytes
 assets/img/social-july29.jpg                       | Bin 267582 -> 0 bytes
 assets/img/volunteer-map.png                       | Bin 304977 -> 0 bytes
 assets/js/MapManager.js                            |   2 +-
 autoconf.php                                       |  39 ++
 cache-invalidation-tpl.xml                         |  16 -
 climate-map.html                                   | 439 ---------------------
 .../climate-map.citizensforclimate.org/config.php  |   3 +
 confs/default/config.php                           |   2 +
 confs/united4earth.org/config.php                  |   5 +
 deploy.php                                         |   8 -
 deploy.php.1                                       |   4 -
 deploy.php.2                                       |   6 -
 deploy.php.3                                       |   8 -
 deploy.php.4                                       |   7 +
 evenements-passes.php                              | 114 +++---
 fabfile.py                                         | 270 -------------
 favicon.ico                                        | Bin 42948 -> 0 bytes
 index.php                                          | 118 +++---
 .../climate-map.citizensforclimate.org/en-US.php   |   2 +
 .../climate-map.citizensforclimate.org/fr-FR.php   |   2 +
 {assets/locales => locales/default}/en-US.php      |  33 +-
 {assets/locales => locales/default}/fr-FR.php      |  35 +-
 locales/test.united4earth.org/en-US.php            |  24 ++
 locales/test.united4earth.org/fr-FR.php            |  26 ++
 past-events.php                                    |   2 +
 pyserve.py                                         |  44 ---
 69 files changed, 232 insertions(+), 1525 deletions(-)
 delete mode 100644 _config.yml
 delete mode 100644 abroad.html
 create mode 100644 assets/d/.~lock.campaign-offices.csv#
 delete mode 100644 assets/img/Amtrak.png
 delete mode 100644 assets/img/July29_FBMapImage_600px.old.png
 delete mode 100644 assets/img/July29_FBMapImage_600px.png
 delete mode 100755 assets/img/bernie-logo.png
 delete mode 100644 assets/img/billionaires.svg
 create mode 100644 assets/img/events-map.png
 delete mode 100644 assets/img/french-video-gif-1-repeat.gif
 delete mode 100644 assets/img/french-video-gif-no-repeat.gif
 delete mode 100644 assets/img/french-video-gif.gif
 delete mode 100755 assets/img/list-end.png
 delete mode 100644 assets/img/map-v-2.png
 delete mode 100755 assets/img/offices/DC-01.png
 delete mode 100755 assets/img/offices/IO-1.png
 delete mode 100755 assets/img/offices/IO-10.png
 delete mode 100755 assets/img/offices/IO-11.png
 delete mode 100755 assets/img/offices/IO-12.png
 delete mode 100755 assets/img/offices/IO-13.png
 delete mode 100755 assets/img/offices/IO-14.png
 delete mode 100755 assets/img/offices/IO-15.png
 delete mode 100755 assets/img/offices/IO-2.png
 delete mode 100755 assets/img/offices/IO-3.png
 delete mode 100755 assets/img/offices/IO-4.png
 delete mode 100755 assets/img/offices/IO-5.png
 delete mode 100755 assets/img/offices/IO-6.png
 delete mode 100755 assets/img/offices/IO-7.png
 delete mode 100755 assets/img/offices/IO-8.png
 delete mode 100755 assets/img/offices/IO-9.png
 delete mode 100755 assets/img/offices/NH-01.png
 delete mode 100755 assets/img/offices/NH-02.png
 delete mode 100755 assets/img/offices/NH-03.png
 delete mode 100755 assets/img/offices/NH-04.png
 delete mode 100755 assets/img/offices/NH-05.png
 delete mode 100755 assets/img/offices/NH-06.png
 delete mode 100755 assets/img/offices/NH-07.png
 delete mode 100755 assets/img/offices/NH-08.png
 delete mode 100644 assets/img/phonebank.png
 delete mode 100755 assets/img/social-july29.jpg
 delete mode 100644 assets/img/volunteer-map.png
 create mode 100644 autoconf.php
 delete mode 100644 cache-invalidation-tpl.xml
 delete mode 100644 climate-map.html
 create mode 100644 confs/climate-map.citizensforclimate.org/config.php
 create mode 100644 confs/default/config.php
 create mode 100644 confs/united4earth.org/config.php
 delete mode 100644 deploy.php
 delete mode 100644 deploy.php.1
 delete mode 100644 deploy.php.2
 delete mode 100644 deploy.php.3
 create mode 100644 deploy.php.4
 delete mode 100644 fabfile.py
 delete mode 100644 favicon.ico
 create mode 100644 locales/climate-map.citizensforclimate.org/en-US.php
 create mode 100644 locales/climate-map.citizensforclimate.org/fr-FR.php
 rename {assets/locales => locales/default}/en-US.php (63%)
 rename {assets/locales => locales/default}/fr-FR.php (62%)
 create mode 100644 locales/test.united4earth.org/en-US.php
 create mode 100644 locales/test.united4earth.org/fr-FR.php
 create mode 100644 past-events.php
 delete mode 100755 pyserve.py
