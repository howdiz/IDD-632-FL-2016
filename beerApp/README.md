Uses the following DB

```SQL
CREATE DATABASE IF NOT EXISTS `BeerApp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BeerApp`;

CREATE TABLE `Beers` (
  `id` int(11) NOT NULL,
  `brewery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `abv` float NOT NULL,
  `rating` float NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Breweries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `Beers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Breweries`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `Beers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `Breweries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ```
