create database menus;

CREATE USER 'menuUser'@'localhost' IDENTIFIED BY 'I@mB@ck123';
GRANT ALL PRIVILEGES ON menus.* TO 'menuUser'@'localhost';


use menus;

CREATE TABLE `menus` (
 `id` int(11) NOT NULL,
 `parent_id` int(11) NOT NULL,
 `name` varchar(25) NOT NULL,
 `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `menus` (`id`, `parent_id`, `name`, `level`) VALUES
(1, 0, 'Cat 1', 1),
(2, 0, 'Cat 2', 2),
(3, 0, 'Cat 3', 3)



--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;