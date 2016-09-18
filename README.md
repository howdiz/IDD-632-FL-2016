# IDD-632-FL-2016
Project files for Phila U IDD-632-1 Database Mgmt &amp; Scripting Fall 2016

1. Basic contact form and form handler

Relies on the following Datbase IDD-632:

```SQL
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
```  
