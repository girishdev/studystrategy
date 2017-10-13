CREATE TABLE study_list (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(50) NOT NULL,
	sub_topic VARCHAR(50) NOT NULL,
	sub_sub_topic VARCHAR(50) NOT NULL,
	description VARCHAR(250) NOT NULL,
	url VARCHAR(250) NOT NULL
);

CREATE TABLE topics (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	php_topics VARCHAR(250) NOT NULL
);

CREATE TABLE study_list (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(50) NOT NULL,
	sub_topic VARCHAR(50) NOT NULL,
	sub_sub_topic VARCHAR(50) NOT NULL,
	description VARCHAR(250) NOT NULL,
	url VARCHAR(250) NOT NULL
);

CREATE TABLE login_form (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	login_id VARCHAR(250) NOT NULL,
	password VARCHAR(250) NOT NULL,
	date VARCHAR(250) NOT NULL,
	time VARCHAR(250) NOT NULL
);

--------------------------------------------------------------------------------------------------------------------
CREATE TABLE php_content (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(50) NOT NULL,
	sub_topic VARCHAR(50) NOT NULL,
	sub_sub_topic VARCHAR(50) NOT NULL,
	description VARCHAR(250) NOT NULL,
	url VARCHAR(250) NOT NULL
);

CREATE TABLE php_index (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(100) NOT NULL,
	sub_topic VARCHAR(100) NOT NULL,
	sub_sub_topic VARCHAR(100) NOT NULL
);

CREATE TABLE mysql_content (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(50) NOT NULL,
	sub_topic VARCHAR(50) NOT NULL,
	sub_sub_topic VARCHAR(50) NOT NULL,
	description VARCHAR(250) NOT NULL,
	url VARCHAR(250) NOT NULL
);

CREATE TABLE mysql_index (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(100) NOT NULL,
	sub_topic VARCHAR(100) NOT NULL,
	sub_sub_topic VARCHAR(100) NOT NULL
);
--------------------------------------------------------------------------------------------------------------------
CREATE TABLE wordpress_index (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(100) NOT NULL,
	sub_topic VARCHAR(100) NOT NULL,
	sub_sub_topic VARCHAR(100) NOT NULL
);

CREATE TABLE symfony_index (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	main_topic VARCHAR(100) NOT NULL,
	sub_topic VARCHAR(100) NOT NULL,
	sub_sub_topic VARCHAR(100) NOT NULL
);

-- http://stackoverflow.com/questions/30750915/fetching-database-records-with-mysql-random-row-selection-with-pdo
-- http://stackoverflow.com/questions/32519355/create-one-div-for-each-row-of-array-fetched-from-mysql
-- http://stackoverflow.com/questions/7491768/get-rows-from-mysql-table-to-php-arrays
-- http://stackoverflow.com/questions/11636293/populate-another-select-dropdown-from-database-based-on-dropdown-selection
-- http://stackoverflow.com/questions/6954556/show-a-second-dropdown-based-on-previous-dropdown-selection
-- http://stackoverflow.com/questions/1643227/get-selected-text-from-a-drop-down-list-select-box-using-jquery?rq=1