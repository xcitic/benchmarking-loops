#!/bin/bash

# start med en pause 3min
echo '#### Benchmarking 1.0 ####'
echo 'Starter benchmarking av scriptene i rekkfølgen D,C,B,A'
sleep 180
# Pipe all output/ (stdout, stderr) to /dev/null, basically forkast all output etter generering.
./D.php &> /dev/null

# Pause i 3 min
echo 'Ferdig med D'
sleep 180

./C.php &> /dev/null

echo 'Ferdig med C'
sleep 180

./B.php &> /dev/null

echo 'Ferdig med B'
sleep 180

echo 'Ferdig med A'
./A.php &> /dev/null
