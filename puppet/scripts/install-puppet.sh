#!/usr/bin/env bash

wget https://apt.puppetlabs.com/puppet5-release-wheezy.deb
sudo dpkg -i puppet5-release-wheezy.deb
sudo apt-get update
sudo apt-get install puppetmaster -y
