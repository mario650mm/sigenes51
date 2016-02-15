#!/bin/bash
mysql -uroot -proot sigenes < database/scripts/1_countries.sql
mysql -uroot -proot sigenes < database/scripts/2_states.sql
mysql -uroot -proot sigenes < database/scripts/3_cities.sql