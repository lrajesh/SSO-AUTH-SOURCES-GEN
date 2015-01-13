import os
import sys
import getopt
import re
import csv

#userpass configuration
conf_tmpl = """
    'example-userpass' => array(
		'exampleauth:UserPass',
        {auth_conf_tmpl}
	),
"""

#userpass sub configuration
auth_conf_tmpl = """
		'jivaprv{seq}:Passw0rd!' => array(
			'ProviderID' => array('{providerid}'),
			'FirstName' => array('{firstname}'), 
			'LastName' => array('{lastname}'),
			'UserRoles' => array('{userroles}'),
			'UserID' => array('ssouser{seq}'),
		),
"""

def Usage ():
    print "Usage: authsources_gen.py -c <path to csv file> -t <authsources.php template which exists in config_templates folder> -o <authsources.php file which exists in config>"
    sys.exit(2)

def main ():
    argv = sys.argv[1:]
    opts, args = getopt.getopt(argv, "c:t:o:")
    ip = ''
    op = ''

    for opt, arg in opts:
        if opt == '-t':
		    tl = arg
        if opt == '-c':
            ip = arg
        if opt == '-o':
            op = arg
			
    if ip and op and tl:
        i = 1
        auth_conf = ''
        
        with open(ip, 'r') as ipcsv:
            ipcsvreader = csv.reader(ipcsv)
            for row in ipcsvreader:
                auth_conf += auth_conf_tmpl.format(seq=i, providerid=row[0], firstname=row[1], lastname=row[2], userroles=','.join(row[3].split('&')))
                i += 1
            new_conf_tl = conf_tmpl.format(auth_conf_tmpl=auth_conf)
			
        with open(tl, 'r') as tlfile:
            tlstr = tlfile.read()
        new_conf_tl = re.sub(r"([/\*]+[\r\n\t\s]+'example-userpass'[a-zA-Z=>:',/.()\r\n\s\t]+[*/]+)+", new_conf_tl, tlstr)
		
        with open(op, 'w') as opfile:
            opfile.write(new_conf_tl)
    else:
	    Usage()
	
#cmd args -c <path to csv file> -t <authsources.php template which exists in config_templates folder> -o <authsources.php file which exists in config> 	
if __name__ == '__main__':
    main()