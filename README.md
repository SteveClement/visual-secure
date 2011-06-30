# Web Evidence Acquisition

WEA is a software to acquire evidence from suspicious website.
The software acquires a mirror of the URL mentioned along with
a network pcap capture.

## Usage via command line

./wea -e <url>

      -e encrypt default with default PGP key

Example
      cd ./bin/
      ./wea -e http://www.foo.be/

## Usage via GUI

      cd ./bin/
      ./gwea

## Evidence file structure

    ../evidence/date-URLSHA1/
    ../evidence/date-URLSHA1/logs
    ../evidence/date-URLSHA1/mirror/
    ../evidence/date-URLSHA1.tar.gz

## Dependencies

  * Python
  * Python-gtk
  * tcpdump
  * wget
  * bash

## Authors

Copyright (C) 2011 Alexandre Dulaunoy

Copyright (C) 2011 CIRCL Computer Incident Response Center Luxembourg (smile gie)

## License

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
