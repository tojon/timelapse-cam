timelapse-cam
=============
![](https://github.com/tojon/timelapse-cam/blob/master/readme-sequence.jpg)


#### Description
**timelapse-cam** is a simple js/php image player. Its primary purpose is for use with [D-Link](http://us.dlink.com/product-category/home-solutions/view/network-cameras) or other [HD web cameras](http://us.dlink.com/product-category/home-solutions/view/network-cameras) whose firmware is capable of pushing individual images to an authorized server. This provides a pseudo 'live' view from the camera for low bandwidth locations where full HD streaming is not possible.


#### Example
A real world example can be viewed [here](https://torontowindsurf.com).


#### Limitations
This repo does not provide the required file management and cron pruning of the destination `/img` directory contents as the camera continually pushes new images to the server. That management is up to you, the user.


#### Installation
Any Apache/PHP server or stack is suitable for locally testing this repo. The current images provided are simply examples, including the simulated countdown images. In a real deployment they would all be replaced by the camera's images being transferred to the server.

#### Controls
Various controls including sequence length, image extension type, presented image size, and playback interval are available.


#### Acknowledgements
Credits to [Bluesmiths](http://www.bluesmiths.com) and [Mama's Beach Cam](http://www.mamasbeachcam.com) for the sample images provided in this repo.

http://www.bluesmiths.com

http://www.mamasbeachcam.com
