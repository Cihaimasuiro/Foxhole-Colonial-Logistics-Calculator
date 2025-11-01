/* Drop the database if it exists to start fresh */
DROP DATABASE IF EXISTS `game_db`;

/* Create the new database */
CREATE DATABASE IF NOT EXISTS `game_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `game_db`;

/* Create our main 'items' table */
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT 'Resource',
  `description` text,
  `stock` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* Add some sample data so the list isn't empty */
INSERT INTO `items` (`item_name`, `category`, `description`, `stock`) VALUES
('Basic Materials', 'Resource', 'Used for all basic construction.', 1000),
('Rifle', 'Weapon', 'Standard issue infantry rifle.', 150),
('Truck', 'Vehicle', 'Standard logistics and transport vehicle.', 25);