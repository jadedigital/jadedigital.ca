# Jade Digital Website

## Setup
Install the following:
* Ansible
* Vagrant
* Virtualbox
* PHP
* Composer

## Plugins

Add plugins to composer.json. To install, run: `composer install && composer update`

## Provision

Provision server with a single command: `ansible-playbook server.yml -e env=<environment>`
You may need to make your ssh key available to ssh-agent if you have rebooted: `ssh-add -k`

example:
  `ansible-playbook server.yml -e env=production`

## Deploy

Deploy with a single command: `./bin/deploy.sh <environment> <domain>`
You may need to make your ssh key available to ssh-agent if you have rebooted: `ssh-add -k`

example:
  `./deploy.sh production jadedigital.ca`

## Rollback

Rollback with a single command: `ansible-playbook rollback.yml -e "site=<domain> env=<environment>"`

example:
  `ansible-playbook rollback.yml -e "site=jadedigital.ca env=production"`
