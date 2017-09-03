# Bekant-Desk
I hooked up the GPIO pins of a Raspberry Pi to the controller of an IKEA Bekant desk, allowing me to alter the height of the motorised desk using a web UI.

The whole system relies on WiringPi to change the state of GPIO pins soldered to the physical buttons of the controller that came out of the box. It's a simple bash script that alters the state of the controller, making the desk move. These scripts are triggered by the buttons on a webpage.

"Wiring", see img folder.
Orange	> J8 Header 12 (GPIO 1)
White	> J8 Header 11 (GPIO 0)
Black	> J8 Header 6 (Ground)
