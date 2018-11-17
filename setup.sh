#!/bin/sh
cp './config/local-example.php' './config/local.php'

if [[ -n "$1" ]]; then
	mv "./html/wp-content/themes/wordpress-template/" "./html/wp-content/themes/$1/"
fi

chmod u+x .githooks/pre-commit
git config core.hooksPath .githooks
