#!/bin/bash

# Give permissions to wwwroot (important on Azure Linux images)
chmod -R 755 /home/site/wwwroot

# Restart nginx to reload configuration
service nginx restart || nginx -s reload
