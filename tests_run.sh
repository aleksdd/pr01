#!/bin/bash
ls -la

echo $WORKSPACE

ls -la $WORKSPACE

composer install

phpunit
