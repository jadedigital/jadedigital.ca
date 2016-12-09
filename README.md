# Jade Digital Website


## Provision
Provision server with a single command: `ansible-playbook server.yml -e env=<environment>`

example:
  `ansible-playbook server.yml -e env=<production>`

## Depoly

Deploy with a single command: `./bin/deploy.sh <environment> <domain>`

example:
  `./bin/deploy.sh production jadedigital.ca`

## Rollback

Rollback with a single command: `ansible-playbook rollback.yml -e "site=<domain> env=<environment>"`

example:
  `ansible-playbook rollback.yml -e "site=<jadedigital.ca> env=<production>"`
