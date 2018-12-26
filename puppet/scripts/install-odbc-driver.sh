#!/usr/bin/env bash

# Add Microsoft Package Repos
sudo su <<EOF
    curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
    curl https://packages.microsoft.com/config/ubuntu/18.04/prod.list > /etc/apt/sources.list.d/mssql-release.list
EOF


sudo apt-get update
sudo ACCEPT_EULA=Y apt-get install msodbcsql17 -y
sudo apt-get install unixodbc-dev -y
