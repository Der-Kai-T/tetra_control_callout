# TetraControl Alarm Interface

This Application provides a web-interface to allow users to generate TetraCallouts using TetraControl (https://tetracontrol.de) as the interface to a Tetra-Radio.

## Note
It is the responsibility of the user to follow all rules set by the appropriate authorities. It is recommended not to expose this application directly to the internet but use a VPN instead.

This application comes as is and with no warranty. If you find a bug, please submit an issue. Contributions are welcome.

## Concept
Inside the web-app you'll mangage all informations (Users, ISSIs, GSSIs, Subs, Severitys) and pass them to TetraControl using it's API. So in addition to this web-app you'll need TetraControl with the appropriate licence.

You can control which user will be able to use which Settings (ISSI / GSSI / SUB / Severity). Every action is recored in the log available to all admin-users.

## Current State
Currently this is Version 0.0 containing the Laravel sceleton application whithout any function.