# Jenkins CI/CD - 101 pipelines

This is just for educational purposes just barely scratch the surface

## Pre-requisite and assumption
If you clone this repository ensure you have webhook configured on your own github repository where you fork this demo code 

A webhook on your github repository pointing to your build server that will trigger the build 

## For the build server

Your jenkins (Build Server) is already installed on your favorite linux distribution\
publish over ssh plugin & phpunit is both installed together with its dependency

## For the web server

A linux host with at least PHP 8.1.2 and apache2

