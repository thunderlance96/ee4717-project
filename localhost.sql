SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `Items` (
  `ItemID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `Items` (`ItemID`, `Name`, `Price`) VALUES
(1, 'Sourdough Classic', 8.50),
(2, 'Kouign Amann', 7.50),
(3, 'French Crepe', 9.50);


CREATE TABLE IF NOT EXISTS `OrderDetails` (
  `OrdersDetailsID` int(10) NOT NULL AUTO_INCREMENT,
  `OrderID` int(10) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `ProductType` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`OrdersDetailsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Order` (
  `OrderID` int(10) NOT NULL AUTO_INCREMENT,
  `OrderDate` datetime NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

CREATE TABLE IF NOT EXISTS `DeliveryDetails` (
  `DeliveryID` int(10) NOT NULL AUTO_INCREMENT,  
  `OrderID` int(10) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postal` int(6) NOT NULL,
  PRIMARY KEY (`DeliveryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

CREATE TABLE IF NOT EXISTS `PaymentDetails` (
  `PaymentID` int(10) NOT NULL AUTO_INCREMENT,
  `OrderID` int(10) NOT NULL,  
  `NameOnCard` varchar(100) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `ExpMonth` varchar(100) NOT NULL,
  `ExpYear` int(4) NOT NULL,
  `CVV` int(3) NOT NULL,
  PRIMARY KEY (`PaymentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;
