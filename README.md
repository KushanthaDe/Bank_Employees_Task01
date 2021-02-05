# PHP-Slim-Restful
```
CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bankName` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(300) DEFAULT NULL,
  `branch_add` varchar(300) DEFAULT NULL,
  `bank_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `employee` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `photo` text NOT NULL,
  `branch_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


```
# Bank_Employees_Task01
# Bank_Employees_Task01
# Bank_Employees_Task01
