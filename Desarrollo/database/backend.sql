-- Database: `e-commerce-jacobo`
--

-- --------------------------------------------------------
--
-- Estructura para tabla `product`
--

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Datos exportables DB `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
                                                                                                              (1, 'Apple', 'Iphone 13', 1252.00, './imagenes/products/1.png', '2020-03-28 11:08:57'), -- NOW() si queres el tiempo de ahora!
                                                                                                              (2, 'Redmi', 'Redmi Note 7', 852.00, './imagenes/products/2.png', '2020-03-28 11:08:57'),
                                                                                                              (3, 'Xiaomi', 'Xiaomi', 682.00, './imagenes/products/3.png', '2020-03-28 11:08:57'),
                                                                                                              (4, 'Apple', 'Iphone X', 122.00, './imagenes/products/13.png', '2020-03-28 11:08:57'),
                                                                                                              (5, 'BlackBerry', 'BlackBerry 7', 552.00, './imagenes/products/10.png', '2020-03-28 11:08:57'),
                                                                                                              (6, 'Xiaomi Mi', 'Xiaomi', 732.00, './imagenes/products/6.png', '2020-03-28 11:08:57'),


-- --------------------------------------------------------

