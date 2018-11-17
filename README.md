# RocketBuild WordPress Starter

The RocketBuild WordPress Starter. Update all of this information with your project's info.
 
## Installation
 
TODO: Write usage instructions
 
## Usage
 
TODO: Write usage instructions

## Contributing

1. Create a feature branch (feature-XXXX)
2. Clone/fetch the feature branch
3. Work on the feature branch
4. Open a pull request against the `development` branch when finished
 
## Developing

*You will need to have Yarn installed on your machine*
 
1. Pull down the repository.
2. Navigate to the repository on your local machine through terminal.
3. Run 'yarn'.
4. Run 'vagrant up'.
5. Run 'grunt'.
6. Run './setup.sh'
7. Navigate to 'http://localhost:8080/' to view the site.

Access the admin through http://localhost:8080/wordpress/wp-admin/ using login 'support' and '!' for the password.

Access phpMyAdmin through http://localhost:8080/phpmyadmin/ using the login 'wordpress' and '' for the password.

#### Make sure to follow the code standards set up with:

SCSS : Stylelint 

* Scan `./node_modules/.bin/stylelint src/scss  --config .stylelintrc`
* Fix `./node_modules/.bin/stylelint src/scss  --config .stylelintrc --fix`

JS : Lint 

* Scan `./node_modules/.bin/eslint src/js --config .eslintrc.json`
* Fix `./node_modules/.bin/eslint src/scss --config .eslintrc.json --fix`

PHP : Codesniffer  

*  Scan `phpcs html/wp-content/themes/wordpress-template --standard=Wordpress --extensions=php`
*  Fix `phpcbf html/wp-content/themes/wordpress-template --standard=Wordpress --extensions=php`
 
##### How to add a new module.

There is a readme in the Theme's ACF directory. 
 
## Deploying
 
TODO: Deployment instructions
 
## Tests
 
TODO: Include test badges
 
## Links
 
JIRA Project: 
 
Confluence Space:
