Use authsources_gen.py to generate
  example-userpass configuration of authsources.php from reading csv file which has list of SSO users.

  Example:

      python authsources_gen.py -c <path to csv file> -t <authsources.php template which exists in config_templates folder> -o <authsources.php file which exists in config>

      ** python authsources_gen.py -c prvs.csv -t templ/authsources.php -o authsources_t.php

     This reads CSV file which contains data like

        ProviderId,FirstName,LastName,UserRoles

	- UserRoles should be delimited with '&' operator
	
