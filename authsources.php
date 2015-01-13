<?php

$config = array(

	// This is a authentication source which handles admin authentication.
	'admin' => array(
		// The default is to use core:AdminPassword, but it can be replaced with
		// any authentication source.

		'core:AdminPassword',
	),


	// An authentication source which can authenticate against both SAML 2.0
	// and Shibboleth 1.3 IdPs.
	'default-sp' => array(
		'saml:SP',

		// The entity ID of this SP.
		// Can be NULL/unset, in which case an entity ID is generated based on the metadata URL.
		'entityID' => NULL,

		// The entity ID of the IdP this should SP should contact.
		// Can be NULL/unset, in which case the user will be shown a list of available IdPs.
		'idp' => NULL,

		// The URL to the discovery service.
		// Can be NULL/unset, in which case a builtin discovery service will be used.
		'discoURL' => NULL,
	),


	/*
	'example-sql' => array(
		'sqlauth:SQL',
		'dsn' => 'pgsql:host=sql.example.org;port=5432;dbname=simplesaml',
		'username' => 'simplesaml',
		'password' => 'secretpassword',
		'query' => 'SELECT "username", "name", "email" FROM "users" WHERE "username" = :username AND "password" = :password',
	),
	*/

	/*
	'example-static' => array(
		'exampleauth:Static',
		'uid' => array('testuser'),
		'eduPersonAffiliation' => array('member', 'employee'),
		'cn' => array('Test User'),
	),
	*/

	
	'example-userpass' => array(
		'exampleauth:UserPass',

		// Give the user an option to save their username for future login attempts
		// And when enabled, what should the default be, to save the username or not
		//'remember.username.enabled' => FALSE,
		//'remember.username.checked' => FALSE,
		'jivaalprv:Passw0rd!' => array(
			'ProviderID' => array('prv273'),
                        'FirstName' => array('John'),
                        'LastName' => array('Doe'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'UserID' => array('ssouser1'),
		),
                'jivaprv273:Passw0rd!' => array(
                        'ProviderID' => array('prv274'),
                        'FirstName' => array('Provider'), 
                        'LastName' => array('Jiva'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauseriaad12'),
                        'UserID' => array('ssouser2'),
                ),
		'jivalaprv:Passw0rd!' => array(
                        'ProviderID' => array('prv274'),
                        'FirstName' => array('Don'),
                        'LastName' => array('schot'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'UserID' => array('testone'),
                ),
                'jivaprv123:Passw0rd!' => array(
                        'ProviderID' => array(''),
                        'FirstName' => array('Providers'),
                        'LastName' => array('Jivauser'),
                        'UserRoles' => array(''),
                        'UserID' => array('prvtestthree'),
                ),
		'jivalaprvone:Passw0rd!' => array(
                        'ProviderID' => array('4534535'),
                        'FirstName' => array('Joson'),
                        'LastName' => array('Dose'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'UserID' => array('testtwo'),
		),
                'acfcprv:Passw0rd!' => array(
                        'UserFirstName' => array('alan'),
                        'UserLastName' => array('artenstein'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'Username' => array('alan1234'),
                        'LOB' => array('5400'),
                        'SessionKey' => array('{A350BD26-37A9-4AE3-9F45-F232EDAA157D}'),
                        'ContentPayload' => array("<ProviderList><ProviderGroup><GroupName>CHILDRENS HOSPITAL OF PHILADELPHIA</GroupName><GroupTin>231352166</GroupTin><GroupAccountNumbers><GroupAccountNumber>60008</GroupAccountNumber></GroupAccountNumbers></ProviderGroup><ProviderGroup><GroupName>GRAND VIEW HOSPITAL</GroupName><GroupTin>231352181</GroupTin><GroupAccountNumbers><GroupAccountNumber>60089</GroupAccountNumber></GroupAccountNumbers></ProviderGroup><ProviderGroup><GroupName>THOMAS JEFFERSON UNIV HOSP</GroupName><GroupTin>232829095</GroupTin><GroupAccountNumbers><GroupAccountNumber>60005</GroupAccountNumber></GroupAccountNumbers></ProviderGroup></ProviderList>"),
                        'GroupPhone' => array('724-537-1000'),
                        'UserNID' => array('367927'),
                        'GroupFax' => array('7425371043'),
                        'GroupZip' => array('15650'),
                        'GroupAddress1' => array('West Second Avenue'),
                        'SessionExpireDTM' => array('12:00:00 AM'),
                        'UserMiddleInitial' => array('k'),
                        'GroupCity' => array('Latrobe'),
                        'UserIsSecurityOfficer' => array('True'),
                        'OfficeName' => array('AmeriHealth Mercy Test Office'),
                        'UserRole' => array('Office'),
                        
                ),
                'acfcprv2600:Passw0rd!' => array(
                        'UserFirstName' => array('Peter'),
                        'UserLastName' => array('tenstein'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'Username' => array('alan2600'),
                        'LOB' => array('2600'),
                        'SessionKey' => array('{A350BD26-37A9-4AE3-9F45-F232EDAA157D}'),
                        'ContentPayload' => array("<ProviderList><ProviderGroup><GroupName>CHILDRENS HOSPITAL OF PHILADELPHIA</GroupName><GroupTin>231352166</GroupTin><GroupAccountNumbers><GroupAccountNumber>60008</GroupAccountNumber></GroupAccountNumbers></ProviderGroup><ProviderGroup><GroupName>GRAND VIEW HOSPITAL</GroupName><GroupTin>231352181</GroupTin><GroupAccountNumbers><GroupAccountNumber>60089</GroupAccountNumber></GroupAccountNumbers></ProviderGroup><ProviderGroup><GroupName>THOMAS JEFFERSON UNIV HOSP</GroupName><GroupTin>232829095</GroupTin><GroupAccountNumbers><GroupAccountNumber>60005</GroupAccountNumber></GroupAccountNumbers></ProviderGroup></ProviderList>"),
                        'GroupPhone' => array('724-537-1000'),
                        'UserNID' => array('367927'),
                        'GroupFax' => array('7425371043'),
                        'GroupZip' => array('15650'),
                        'GroupAddress1' => array('West Second Avenue'),
                        'SessionExpireDTM' => array('12:00:00 AM'),
                        'UserMiddleInitial' => array('k'),
                        'GroupCity' => array('Latrobe'),
                        'UserIsSecurityOfficer' => array('True'),
                        'OfficeName' => array('AmeriHealth Mercy Test Office'),
                        'UserRole' => array('Office'),
                ),
                'acfcprvall:Passw0rd!' => array(
                        'UserFirstName' => array('Peter'),
                        'UserLastName' => array('BOB'),
                        'UserRoles' => array('PROVIDER,PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'Username' => array('acfc_saml80'),
                        'LOB' => array('0500'),
                        'SessionKey' => array('{A350BD26-37A9-4AE3-9F45-F232EDAA157D}'),
                        'ContentPayload' => array("<ProviderList><ProviderGroup><GroupName>THOMAS JEFFERSON UNIV HOSP</GroupName><GroupTin>232829095</GroupTin><GroupAccountNumbers><GroupAccountNumber>1000081</GroupAccountNumber></GroupAccountNumbers></ProviderGroup><ProviderGroup><GroupName>CHILDRENS HOSPITAL OF PHILADELPHIA</GroupName><GroupTin>231352166</GroupTin><GroupAccountNumbers><GroupAccountNumber>60005</GroupAccountNumber></GroupAccountNumbers></ProviderGroup></ProviderList>"),
                        'GroupPhone' => array('724-537-1000'),
                        'UserNID' => array('367927'),
                        'GroupFax' => array('7425371043'),
                        'GroupZip' => array('15650'),
                        'GroupAddress1' => array('West Second Avenue'),
                        'SessionExpireDTM' => array('12:00:00 AM'),
                        'UserMiddleInitial' => array('k'),
                        'GroupCity' => array('Latrobe'),
                        'UserIsSecurityOfficer' => array('True'),
                        'OfficeName' => array('AmeriHealth Mercy Test Office'),
                        'UserRole' => array('Office'),
                ),
                'jivaprv274:Passw0rd!' => array(
                        'ProviderID' => array('prv273'),
                        'FirstName' => array('Providerother'),
                        'LastName' => array('Jiva'),
                        'UserRoles' => array('PROVIDER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauseriaad12'),
                        'UserID' => array('ssoppuser2'),
                ),
                'bciprv:Passw0rd!' => array(
                        'ProviderID' => array('76540'),
                        'FirstName' => array('Provider'),
                        'LastName' => array('BCI'),
                        'UserRoles' => array('PROVIDER'),
                        'EmailID' => array('raghu@zeomega.com'),
                        'UserName' => array('userid12'),
                        'UserID' => array('ssobcippuser1'),
                ),
                'jivaerrprv:Passw0rd!' => array(
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauseriaad12'),
                ),
           	'jivambr2:Passw0rd!' => array(
			'MemberID' => array('123123'),
                        'ProviderID' => array(''),
                        'FirstName' => array('DEBBIE'),
                        'LastName' => array('REDDEN'),
                        'UserRoles' => array('MEMBER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('gxyzkhan, tabcrahul Bainey'),
                        'UserID' => array('jivamdmbr'),
                        'Source' => array('BlueAdvantage'),
		),
                'jivambr1:Passw0rd!' => array(
			'MemberID' => array('21513'),
                        'FirstName' => array('Kidy'),
                        'LastName' => array('Asthm'),
                        'UserRoles' => array('MEMBER'),
                        'ProviderID' => array(''),
                        'EmailID' => array('jdoe22@customer.com'),
                        'UserName' => array('Asthm,KKidy'),
                        'UserID' => array('jivaalmbr'),
                        'Source' => array('SelfReferral'),
		),
                'mdwisembr1:Passw0rd!' => array(
                        'MemberID' => array('123123123'),
                        'FirstName' => array('Mickey'),
                        'LastName' => array('Mouse'),
                        'UserRoles' => array('MEMBER'),
                        'EmailID' => array('jdoe22@customer.com'),
                        'MiddleName' => array(''),
                        'UserID' => array('jivamdwisembr'),
                        'PhoneNumber' => array('9874563210'),
                ),
                'mdwisembr2:Passw0rd!' => array(
                        'MemberID' => array('234234234'),
                        'FirstName' => array('Performance001'),
                        'LastName' => array('AuthExport'),
                        'UserRoles' => array('MEMBER'),
                        'EmailID' => array('jdoe32@customer.com'),
                        'MiddleName' => array('A'),
                        'UserID' => array('jivamdwisembr2'),
                        'PhoneNumber' => array('9874563210'),
                ),
               'jivaerrmbr:pass' => array(
			'MemberID' => array('1004000001'),
                        'FirstName' => array('John'),
                        'LastName' => array('Doe'),
                        'UserRoles' => array('MEMBER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'UserID' => array('158440'),
                        'Source' => array('Baby Yourself'),
		),
                'sashok:Jiva@234' => array(
                        'FirstName' => array('Ashok'),
                        'MiddleName' => array('test'),
                        'LastName' => array('Vardhan'),
                        'UserRoles' => array('CC,SYSADMIN,TCM,CMREADER,CMMANAGER,UMREADER,UMMANAGER,APPEALREADER,APPEALMANAGER,OTHERMODULEREADER,OTHERMODULEMANAGER,BHREADER,BHMANAGER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('avardhan'),
                        'client_id' => array(''),
                        'Title' => array(''),
                        'stateCode' => array('NB'),
                        'countryCode' => array('CA'),
                ),
                'sentinelonly:Jiva@234' => array(
                        'FirstName' => array('Ashok'),
                        'MiddleName' => array('Sentinel'),
                        'LastName' => array('SentinelAdvance'),
                        'UserRoles' => array('TCM,CC,SUPADMIN,SENTINEL-ADVANCE'),
                        'EmailID' => array('reo1@customer.com'),
                        'UserName' => array('userid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('sent_user1'),
                        'client_id' => array(''),
                        'Title' => array(''),
                        'stateCode' => array('NB'),
                        'countryCode' => array('CA'),
                ),
                'mdashok:Jiva@234' => array(
                        'FirstName' => array('Ashok'),
                        'MiddleName' => array('MD'),
                        'LastName' => array('Vardhan'),
                        'UserRoles' => array('MD'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('mdavardhan'),
                        'client_id' => array(''),
                        'Title' => array(''),
                        'stateCode' => array('NB'),
                        'countryCode' => array('CA'),
                ),
                'nurseashok:Jiva@234' => array(
                        'FirstName' => array('jeremy'),
                        'MiddleName' => array('MD'),
                        'LastName' => array('snape'),
                        'UserRoles' => array('ADMIN,ASSESSMENT,SENTINEL,SENTINEL-ADVANCE,APPEALREADER,APPEALMANAGER,CC,CLIENT-SVS,OPS,SUPADMIN,REPORT_ADMIN,REPORT_BUILDER,REPORT_VIEWER,SYSADMIN,TCM,UM-SUP,UMMANAGER,UMREADER,CMMANAGER,CMREADER,OTHERMODULEMANAGER,OTHERMODULEREADER,BHMANAGER,BHREADER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('jeremysnape'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'PhoneNumber' => array('9874563210'),
                        'PhoneExt' => array('4560'),
                        'countryCode' => array('CA'),
                ),
                 'nursereadonly:Jiva@234' => array(
                        'FirstName' => array('jermy'),
                        'MiddleName' => array('MD'),
                        'LastName' => array('snpe'),
                        'UserRoles' => array('TCM,SUPADMIN,CC'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('jsnape'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'test_snt:Jiva@234' => array(
                        'FirstName' => array('jeremy'),
                        'MiddleName' => array('MD'),
                        'LastName' => array('snape'),
                        'UserRoles' => array('ADMIN,ASSESSMENT,SENTINEL,SENTINEL-ADVANCE,CC,CLIENT-SVS,OPS,SUPADMIN,SYSADMIN,TCM,UM-SUP,UMMANAGER,UMREADER,CMMANAGER,CMREADER,OTHERMODULEMANAGER,OTHERMODULEREADER,BHMANAGER,BHREADER,REPORT_ADMIN,REPORT_BUILDER,REPORT_VIEWER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'Department_Cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('06FEA7BF983FDDD9DAEBE2F7A7A91528A60BD662'),
                        'client_id' => array(''),
                        'Title_Cd' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'nursesupervisor:Jiva@234' => array(
                        'FirstName' => array('jermy'),
                        'MiddleName' => array('Supervisor'),
                        'LastName' => array('snpe'),
                        'UserRoles' => array('TCM,SYSADMIN,CC'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('jsupervisor'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'ghcsupervisor:Jiva@234' => array(
                        'FirstName' => array('ghc'),
                        'MiddleName' => array('Supervisor'),
                        'LastName' => array('supervisor'),
                        'UserRoles' => array('TCM,UM-SUP,CC,BHMANAGER,BHREADER,UMMANAGER,UMREADER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('ghcsupervisor'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'nursesupadmin:Jiva@234' => array(
                        'FirstName' => array('admin'),
                        'MiddleName' => array('Superadmin'),
                        'LastName' => array('superadmin'),
                        'UserRoles' => array('TCM,SUPADMIN,CC,CMMANAGER,CMREADER,BHMANAGER,BHREADER,UMMANAGER,UMREADER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('jsupadmin'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'ghcconfiguser:Jiva@234' => array(
                        'FirstName' => array('ghc'),
                        'MiddleName' => array('config'),
                        'LastName' => array('user'),
                        'UserRoles' => array('TCM,CC,BHMANAGER,BHREADER,UMMANAGER,UMREADER,ADMIN'),
                        'EmailID' => array('jdoe2@customer.com'),
                        'UserName' => array('jivauser245'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('ghcconfiguser'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'ghcsupadmin:Jiva@234' => array(
                        'FirstName' => array('ghc'),
                        'MiddleName' => array('supadmin'),
                        'LastName' => array('superadmin'),
                        'UserRoles' => array('SUPADMIN,BHMANAGER,BHREADER,UMMANAGER,UMREADER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('jivauserid12'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('ghcsupadmin'),
                        'client_id' => array(''),
                        'Title' => array('CN'),
                        'countryCode' => array('CA'),
                ),
                'test_sent_user:Jiva@234' => array(
                        'FirstName' => array('Sentinel'),
                        'MiddleName' => array('user'),
                        'LastName' => array('Advance'),
                        'UserRoles' => array('ADMIN,APPEALMANAGER,APPEALREADER,ASSESSMENT,BHMANAGER,BHREADER,CC,CLIENT-SVS,CMMANAGER,CMREADER,OPS,OTHERMODULEMANAGER,OTHERMODULEREADER,QAR,REPORT_ADMIN,REPORT_BUILDER,REPORT_VIEWER,RESETPASSWORD,SENTINEL,SENTINEL-ADVANCE,SUPADMIN,SYSADMIN,TCM,UM-SUP,UMMANAGER,UMREADER'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'UserName' => array('sentiel_user11'),
                        'department_cd' => array(''),
                        'supervisorID' => array('mclark'),
                        'clientSecurity' => array('A'),
                        'UserID' => array('test_sentinel_user'),
                        'client_id' => array(''),
                        'Title' => array(''),
                        'countryCode' => array('CA'),
                ),
                'test_reports_user:Jiva@234' => array(
                        'FirstName' => array('Laurel'),
                        'MiddleName' => array('Mbn'),
                        'LastName' => array('Page'),
                        'UserRoles' => array('ADMIN,APPEALMANAGER,APPEALREADER,ASSESSMENT,BHMANAGER,BHREADER,CC,CLIENT-SVS,CMMANAGER,CMREADER,OPS,OTHERMODULEMANAGER,OTHERMODULEREADER,QAR,REPORT_ADMIN,REPORT_BUILDER,REPORT_VIEWER,RESETPASSWORD,SENTINEL,SENTINEL-ADVANCE,SUPADMIN,SYSADMIN,TCM,UM-SUP,UMMANAGER,UMREADER'),
                        'EmailID' => array('zedemoadmin@mail.zeomega.com'),
                        'UserName' => array('Page, Laurel'),
                        'department_cd' => array(''),
                        'supervisorID' => array(''),
                        'clientSecurity' => array('A'),
                        'UserID' => array('zeadmin'),
                        'client_id' => array(''),
                        'Title' => array('SAB'),
                        'countryCode' => array(''),
                ),
		'student:studentpass' => array(
			'uid' => array('test'),
			'eduPersonAffiliation' => array('member', 'student'),
		),
		'employee:employeepass' => array(
			'uid' => array('employee'),
			'eduPersonAffiliation' => array('member', 'employee'),
		),
                'flppuser:Dontask' => array(
                        'UserID' => array('flppssouser'),
                        'ProviderID' => array(''),
                        'FirstName' => array('Alexander'), 
                        'LastName' => array('Jacob'),
                        'UserRoles' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array('John'),
                        'Title' => array(''),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
           		'EntityID' => array('22901'),
                        'DecisionReasonCD' => array('OPPCF-CFC'),
                ),
                'flppuser1:Dontask' => array(
                        'UserID' => array('matthew'),
                        'ProviderID' => array(''),
                        'FirstName' => array('David'), 
                        'LastName' => array('Jackson'),
                        'UserRoles' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customerinfo.com'),
                        'MiddleName' => array('James'),
                        'Title' => array(''),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('8115639585'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
           		'EntityID' => array('19617'),	
                        'DecisionReasonCD' => array('OPPCF-CFC'),
                ),                
                'flppuser2:Dontask' => array(
                        'UserID' => array('michaelraj'),
                        'ProviderID' => array(''),
                        'FirstName' => array(''), 
                        'LastName' => array('Anthony'),
                        'UserRoles' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array('Christopher'),
                        'Title' => array(''),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
           		'EntityID' => array('19453'),	
                        'DecisionReasonCD' => array('OPPCF-CFC'),
                ),               
                'flppuser3:Dontask' => array(
                        'UserID' => array('balexander'),
                        'ProviderID' => array('9223822393'),
                        'FirstName' => array('Benjamin'), 
                        'LastName' => array('Andrew'),
                        'UserRoles' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array('Joseph'),
                        'Title' => array(''),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
           		'EntityID' => array('19453'),	
                        'DecisionReasonCD' => array('OPPCF-CFC'),
                ),
                'qualisppuser:Passw0rd!' => array(
                        'UserID' => array('jdoe1'),
                        'JivaProviderID' => array('565656565,12346,92344,asdhasj,123444222'),
                        'FirstName' => array('prvfirstname'),
                        'LastName' => array('prvlastname'),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),
                'qualisppuser2:Passw0rd!' => array(
                        'UserID' => array('qualisppuser2'),
                        'JivaProviderID' => array('565656565,12346,92344,123444222'),
                        'FirstName' => array('prvfirstname'),
                        'LastName' => array('prvlastname'),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),
                'qualisppuser3:Passw0rd!' => array(
                        'UserID' => array('qppuser3'),
                        'JivaProviderID' => array('123444222,55555'),
                        'FirstName' => array('prvfirstnae'),
                        'LastName' => array('prvlastnae'),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe1@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),
                'qualisppuser4:Passw0rd!' => array(
                        'UserID' => array('qualisuser4'),
                        'JivaProviderID' => array('123444222,55555'),
                        'FirstName' => array('firstname'),
                        'LastName' => array('lastname'),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe4@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),
                'qualisppuser5:Passw0rd!' => array(
                        'UserID' => array('qualisuser5'),
                        'JivaProviderID' => array('66666,77777'),
                        'FirstName' => array('first'),
                        'LastName' => array(''),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe5@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),

               'qualisppuser6:Passw0rd!' => array(
                        'UserID' => array('qualisuser6'),
                        'JivaProviderID' => array('103'),
                        'FirstName' => array('first'),
                        'LastName' => array('name'),
                        'JivaUserRole' => array('PROVIDER-STAFF'),
                        'EmailID' => array('jdoe5@customer.com'),
                        'MiddleName' => array(''),
                        'Title' => array('CR'),
                        'Address1' => array(''),
                        'Address2' => array(''),
                        'PhoneNumber' => array('9876543210'),
                        'City' => array('city'),
                        'State' => array('TX'),
                        'Zip' => array('85241'),
                        'Country' => array('USA'),
                ),


	),


	/*
	'crypto-hash' => array(
		'authcrypt:Hash',
		// hashed version of 'verysecret', made with bin/pwgen.php
		'professor:{SSHA256}P6FDTEEIY2EnER9a6P2GwHhI5JDrwBgjQ913oVQjBngmCtrNBUMowA==' => array(
			'uid' => array('prof_a'),
			'eduPersonAffiliation' => array('member', 'employee', 'board'),
		),
	),
	*/

	/*
	'htpasswd' => array(
		'authcrypt:Htpasswd',
		'htpasswd_file' => '/var/www/foo.edu/legacy_app/.htpasswd',
		'static_attributes' => array(
			'eduPersonAffiliation' => array('member', 'employee'),
			'Organization' => array('University of Foo'),
		),
	),
	*/

	/*
	// This authentication source serves as an example of integration with an
	// external authentication engine. Take a look at the comment in the beginning
	// of modules/exampleauth/lib/Auth/Source/External.php for a description of
	// how to adjust it to your own site.
	'example-external' => array(
		'exampleauth:External',
	),
	*/

	/*
	'yubikey' => array(
		'authYubiKey:YubiKey',
 		'id' => '000',
		// 'key' => '012345678',
	),
	*/

	/*
	'openid' => array(
		'openid:OpenIDConsumer',
		'attributes.required' => array('nickname'),
		'attributes.optional' => array('fullname', 'email',),
		// 'sreg.validate' => FALSE,
		'attributes.ax_required' => array('http://axschema.org/namePerson/friendly'),
		'attributes.ax_optional' => array('http://axschema.org/namePerson','http://axschema.org/contact/email'),
		// Prefer HTTP redirect over POST
		// 'prefer_http_redirect' => FALSE,
	),
	*/

	/*
	// Example of an authsource that authenticates against Google.
	// See: http://code.google.com/apis/accounts/docs/OpenID.html
	'google' => array(
		'openid:OpenIDConsumer',
		// Googles OpenID endpoint.
		'target' => 'https://www.google.com/accounts/o8/id',
		// Custom realm
		// 'realm' => 'http://*.example.org',
		// Attributes that google can supply.
		'attributes.ax_required' => array(
			//'http://axschema.org/namePerson/first',
			//'http://axschema.org/namePerson/last',
			//'http://axschema.org/contact/email',
			//'http://axschema.org/contact/country/home',
			//'http://axschema.org/pref/language',
		),
		// custom extension arguments
		'extension.args' => array(
			//'http://specs.openid.net/extensions/ui/1.0' => array(
			//	'mode' => 'popup',
			//	'icon' => 'true',
			//),
		),
	),
	*/

	/*
	'papi' => array(
		'authpapi:PAPI',
	),
	*/


	/*
	'facebook' => array(
		'authfacebook:Facebook',
		// Register your Facebook application on http://www.facebook.com/developers
		// App ID or API key (requests with App ID should be faster; https://github.com/facebook/php-sdk/issues/214)
		'api_key' => 'xxxxxxxxxxxxxxxx',
		// App Secret
		'secret' => 'xxxxxxxxxxxxxxxx',
		// which additional data permissions to request from user
		// see http://developers.facebook.com/docs/authentication/permissions/ for the full list
		// 'req_perms' => 'email,user_birthday',
	),
	*/

	/*
	// LinkedIn OAuth Authentication API.
	// Register your application to get an API key here:
	//  https://www.linkedin.com/secure/developer
	'linkedin' => array(
		'authlinkedin:LinkedIn',
		'key' => 'xxxxxxxxxxxxxxxx',
		'secret' => 'xxxxxxxxxxxxxxxx',
	),
	*/

	/*
	// Twitter OAuth Authentication API.
	// Register your application to get an API key here:
	//  http://twitter.com/oauth_clients
	'twitter' => array(
		'authtwitter:Twitter',
		'key' => 'xxxxxxxxxxxxxxxx',
		'secret' => 'xxxxxxxxxxxxxxxx',
	),
	*/

	/*
	// MySpace OAuth Authentication API.
	// Register your application to get an API key here:
	//  http://developer.myspace.com/
	'myspace' => array(
		'authmyspace:MySpace',
		'key' => 'xxxxxxxxxxxxxxxx',
		'secret' => 'xxxxxxxxxxxxxxxx',
	),
	*/

	/*
	// Windows Live ID Authentication API.
	// Register your application to get an API key here:
	//  https://manage.dev.live.com
	'windowslive' => array(
		'authwindowslive:LiveID',
		'key' => 'xxxxxxxxxxxxxxxx',
		'secret' => 'xxxxxxxxxxxxxxxx',
	),
	*/

	/*
	// Example of a LDAP authentication source.
	'example-ldap' => array(
		'ldap:LDAP',

		// Give the user an option to save their username for future login attempts
		// And when enabled, what should the default be, to save the username or not
		//'remember.username.enabled' => FALSE,
		//'remember.username.checked' => FALSE,

		// The hostname of the LDAP server.
		'hostname' => 'ldap.example.org',

		// Whether SSL/TLS should be used when contacting the LDAP server.
		'enable_tls' => FALSE,

		// Whether debug output from the LDAP library should be enabled.
		// Default is FALSE.
		'debug' => FALSE,

		// The timeout for accessing the LDAP server, in seconds.
		// The default is 0, which means no timeout.
		'timeout' => 0,

		// Which attributes should be retrieved from the LDAP server.
		// This can be an array of attribute names, or NULL, in which case
		// all attributes are fetched.
		'attributes' => NULL,

		// The pattern which should be used to create the users DN given the username.
		// %username% in this pattern will be replaced with the users username.
		//
		// This option is not used if the search.enable option is set to TRUE.
		'dnpattern' => 'uid=%username%,ou=people,dc=example,dc=org',

		// As an alternative to specifying a pattern for the users DN, it is possible to
		// search for the username in a set of attributes. This is enabled by this option.
		'search.enable' => FALSE,

		// The DN which will be used as a base for the search.
		// This can be a single string, in which case only that DN is searched, or an
		// array of strings, in which case they will be searched in the order given.
		'search.base' => 'ou=people,dc=example,dc=org',

		// The attribute(s) the username should match against.
		//
		// This is an array with one or more attribute names. Any of the attributes in
		// the array may match the value the username.
		'search.attributes' => array('uid', 'mail'),

		// The username & password the simpleSAMLphp should bind to before searching. If
		// this is left as NULL, no bind will be performed before searching.
		'search.username' => NULL,
		'search.password' => NULL,

		// If the directory uses privilege separation,
		// the authenticated user may not be able to retrieve
		// all required attribures, a privileged entity is required
		// to get them. This is enabled with this option.
		'priv.read' => FALSE,

		// The DN & password the simpleSAMLphp should bind to before
		// retrieving attributes. These options are required if
		// 'priv.read' is set to TRUE.
		'priv.username' => NULL,
		'priv.password' => NULL,

	),
	*/

	/*
	// Example of an LDAPMulti authentication source.
	'example-ldapmulti' => array(
		'ldap:LDAPMulti',

		// Give the user an option to save their username for future login attempts
		// And when enabled, what should the default be, to save the username or not
		//'remember.username.enabled' => FALSE,
		//'remember.username.checked' => FALSE,

		// The way the organization as part of the username should be handled.
		// Three possible values:
		// - 'none':   No handling of the organization. Allows '@' to be part
		//             of the username.
		// - 'allow':  Will allow users to type 'username@organization'.
		// - 'force':  Force users to type 'username@organization'. The dropdown
		//             list will be hidden.
		//
		// The default is 'none'.
		'username_organization_method' => 'none',

		// Whether the organization should be included as part of the username
		// when authenticating. If this is set to TRUE, the username will be on
		// the form <username>@<organization identifier>. If this is FALSE, the
		// username will be used as the user enters it.
		//
		// The default is FALSE.
		'include_organization_in_username' => FALSE,

		// A list of available LDAP servers.
		//
		// The index is an identifier for the organization/group. When
		// 'username_organization_method' is set to something other than 'none',
		// the organization-part of the username is matched against the index.
		//
		// The value of each element is an array in the same format as an LDAP
		// authentication source.
		'employees' => array(
			// A short name/description for this group. Will be shown in a dropdown list
			// when the user logs on.
			//
			// This option can be a string or an array with language => text mappings.
			'description' => 'Employees',

			// The rest of the options are the same as those available for
			// the LDAP authentication source.
			'hostname' => 'ldap.employees.example.org',
			'dnpattern' => 'uid=%username%,ou=employees,dc=example,dc=org',
		),

		'students' => array(
			'description' => 'Students',

			'hostname' => 'ldap.students.example.org',
			'dnpattern' => 'uid=%username%,ou=students,dc=example,dc=org',
		),

	),
	*/

);
