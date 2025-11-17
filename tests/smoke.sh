#!/bin/bash

echo "Testing register page..."
curl -s -o /dev/null -w "%{http_code}\n" http://127.0.0.1:8080/register.php

echo "Testing login page..."
curl -s -o /dev/null -w "%{http_code}\n" http://127.0.0.1:8080/index.php
