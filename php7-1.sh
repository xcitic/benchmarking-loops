#!/bin/bash
sudo add-apt-repository ppa:ondrej/php
sudo apt-update
sudo apt install -y php7.1
sudo update-alternatives --config php
