-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 02:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duztec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` enum('1','2') NOT NULL DEFAULT '2' COMMENT 'admin=1,employe=2',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_id`, `name`, `email`, `password`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cd29bb5e7cf2dd551411b79480e6c7e9', 'Admin', 'admin@duztec.com', 'dbfa7acf1306afa3aa132c2db43babba', '1', '2022-09-06 12:34:38', '2024-08-13 15:15:31', NULL),
(2, '3023970d18184d86e22fe9855c2db76f', 'Office', 'office@duztec.com', 'bdfb85b153eb8f56bb0ac7a26d67dd47', '2', '2023-03-13 16:03:38', '2024-08-13 15:15:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `b_id` int(11) NOT NULL,
  `b_category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: Inactive 1: Active 2: Delete	',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`b_id`, `b_category`, `title`, `description`, `content`, `status`, `created_date`) VALUES
(1, 'Cooling And Humidification', 'Understanding the Need for Cooling and Humidification Systems', 'In today’s industrial and working environments, maintaining a comfortable and productive atmosphere is crucial. With rising temperatures and varying humidity levels, businesses are seeking efficient solutions to regulate their indoor climate. This is where cooling and humidification systems come into play, offering benefits beyond just temperature control.\r\n\r\nIntroducing Duztec’s Cooling and Humidification Systems\r\nAt Duztec Engineering, we understand the importance of creating a conducive working environment. Our state-of-the-art cooling and humidification systems are designed to provide optimal comfort and efficiency. With a focus on innovation and sustainability, we aim to revolutionize the way workplaces operate.\r\n\r\n\r\nBenefits of Cooling and Humidification Systems\r\nImproved air quality: Our systems help reduce dust, pollutants, and allergens in the air, creating a healthier workspace for employees.\r\n\r\nEnergy efficiency: By efficiently managing temperature and humidity levels, our systems help reduce energy consumption and operating costs.\r\n\r\nEnhanced productivity: A comfortable environment leads to increased employee morale, reduced absenteeism, and higher productivity levels.\r\n\r\nImplementing Best Practices for Dust Suppression: Outline best practices for implementing and maintaining dust suppression systems effectively. This may include proper system installation, regular inspection and maintenance, training for personnel, and monitoring dust levels to ensure continued effectiveness.\r\nEvaluating Performance and Continuous Improvement: Highlight the importance of monitoring the performance of dust suppression systems and implementing continuous improvement measures. Discuss the use of data analytics, feedback from workers, and periodic reassessment to identify areas for optimization and ensure ongoing compliance with regulations.\r\nConclusion\r\nContact us today to learn more about how our cooling and humidification systems can transform your workplace into a cool oasis this summer. Let Duztec Engineering be your partner in creating a refreshing environment where productivity thrives and comfort reigns supreme. \r\n\r\nRemember, a comfortable work environment is not just a luxury – it’s a necessity for success. Trust Duztec to provide the innovative solutions you need to stay cool, productive, and ahead of the game.\r\n', '', 1, '2024-08-07 14:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `bc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: Inactive 1: Active 2: Delete	',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`bc_id`, `name`, `description`, `created_by`, `created_at`, `status`, `created_date`) VALUES
(1, 'Dust Suppression', 'Dust Suppression: Creating a Healthier and More Productive Workplace with Duztec', '2024-08-07 14:02:17', '2024-08-07 14:02:17', 1, '2024-08-07 14:02:17'),
(2, 'Wastewater Treatment', 'Understanding the Grave Impact of Untreated Wastewater', '2024-08-07 14:02:17', '2024-08-07 14:02:17', 1, '2024-08-07 14:02:17'),
(3, 'Cooling And Humidification', 'Understanding the Need for Cooling and Humidification Systems', '2024-08-07 14:15:08', '2024-08-07 14:15:08', 1, '2024-08-07 14:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: Inactive 1: Active 2: Delete',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `name`, `description`, `category_image`, `status`, `created_date`) VALUES
(1, 'Dust Suppression', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:54:45'),
(2, 'Odour Control System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:54:45'),
(3, 'Waste Water Evaporation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:55:12'),
(4, 'Road Washing System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:55:12'),
(5, 'Fog Curtain', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:55:39'),
(6, 'Truck Mounted Mist Beams', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:55:39'),
(7, 'Trolley Mounted Mist Beams', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:56:07'),
(8, 'Cooling and Humidification', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.', 'category_image.png', 1, '2024-08-07 12:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `clientele`
--

CREATE TABLE `clientele` (
  `ct_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: inactive 1: active 2: delete',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientele`
--

INSERT INTO `clientele` (`ct_id`, `image`, `status`, `created_date`) VALUES
(1, '1.png', 1, '2024-08-07 11:44:25'),
(2, '2.png', 1, '2024-08-07 11:44:25'),
(3, '3.png', 1, '2024-08-07 11:44:47'),
(4, '4.png', 1, '2024-08-07 11:44:47'),
(5, '5.png', 1, '2024-08-07 11:45:23'),
(6, '6.png', 1, '2024-08-07 11:45:23'),
(7, '7.png', 1, '2024-08-07 11:45:23'),
(8, '8.png', 1, '2024-08-07 11:45:23'),
(9, '9.png', 1, '2024-08-07 11:45:23'),
(10, '10.png', 1, '2024-08-07 11:45:23'),
(11, '11.png', 1, '2024-08-07 11:45:23'),
(12, '12.png', 1, '2024-08-07 11:45:23'),
(13, '13.png', 1, '2024-08-07 11:45:23'),
(14, '14.png', 1, '2024-08-07 11:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `img_video` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_video` tinyint(1) NOT NULL COMMENT '0:image 1:video',
  `status` tinyint(1) NOT NULL COMMENT '	0: Inactive 1: Active 2: Delete	',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `img_video`, `title`, `description`, `is_video`, `status`, `created_date`) VALUES
(1, 'Mosquito2.jpeg', '', '', 0, 1, '2024-08-07 11:07:01'),
(2, 'DUZ-DBL-1.jpeg', '', '', 0, 1, '2024-08-07 11:07:01'),
(3, 'DUZ_DBL_1.jpeg', '', '', 0, 1, '2024-08-07 11:09:18'),
(4, 'DBL_2-1.jpeg', '', '', 0, 1, '2024-08-07 11:09:18'),
(5, 'M5.jpeg', '', '', 0, 1, '2024-08-07 11:09:53'),
(6, 'Evap300.jpeg', '', '', 0, 1, '2024-08-07 11:09:53'),
(7, 'DBL_3.jpeg', '', '', 0, 1, '2024-08-07 11:10:22'),
(8, 'DBL_4.jpeg', '', '', 0, 1, '2024-08-07 11:10:22'),
(9, 'Evap600.jpeg', '', '', 0, 1, '2024-08-07 11:10:57'),
(10, 'DUZ-DBL.jpeg', '', '', 0, 1, '2024-08-07 11:10:57'),
(11, 'MB30.jpg', '', '', 0, 1, '2024-08-07 11:13:12'),
(12, 'MB50-scaled.jpg', '', '', 0, 1, '2024-08-07 11:13:12'),
(13, 'MB60.jpg', '', '', 0, 1, '2024-08-07 11:13:50'),
(14, 'WhatsApp-Image-2022-09-03-at-2.21.15-PM.jpeg', '', '', 0, 1, '2024-08-07 11:13:50'),
(15, 'DJI_0018.mp4', '', '', 1, 1, '2024-08-07 11:15:56'),
(16, 'WhatsApp-Video-2020-10-19-at-1.13.56-PM.mp4', '', '', 1, 1, '2024-08-07 11:15:56'),
(17, 'MC-45-Machine-Parlaiment.mp4', '', '', 1, 1, '2024-08-07 11:17:08'),
(18, 'WhatsApp-Video-2020-02-20-at-5.21.00-PM.mp4', '', '', 1, 1, '2024-08-07 11:17:08'),
(19, 'Trial-3.mp4', '', '', 1, 1, '2024-08-07 11:17:45'),
(20, 'DJI_0086-1.mp4', '', '', 1, 1, '2024-08-07 11:17:45'),
(21, 'TATA-slab-cooling.mp4', '', '', 1, 1, '2024-08-07 11:18:19'),
(22, 'Mist-beam-S50-for-coal-mines.mp4', '', '', 1, 1, '2024-08-07 11:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `hp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL COMMENT 'category.c_id',
  `sc_id` int(11) NOT NULL COMMENT 'sub_category.sc_id',
  `description` text NOT NULL,
  `images` text NOT NULL,
  `videos` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: Inactive 1: Active 2: Delete	',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `c_id`, `sc_id`, `description`, `images`, `videos`, `status`, `created_date`) VALUES
(1, 'Mosquito', 1, 1, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Introducing the&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">DUZTEC MOSQUITO</strong></span>&nbsp;Mist Cannon – a compact and versatile solution for demolition, dust control, odour and humidification. This powerful machine is designed for efficiency and is lightweight and easily manoeuvrable by hand.<span style=\"font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight ); background-color: transparent;\">&nbsp;</span></p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Various industrial processes, such as mining, steel production, coal mining, and cement manufacturing, produce a significant volume of fugitive dust. This airborne particulate matter poses a considerable threat to human health, causing respiratory issues and potential long-term health hazards. Additionally, it can have adverse environmental impacts, such as contributing to soil degradation, water pollution, and overall ecological imbalances. Therefore, industries must adopt effective dust control measures to mitigate these harmful effects and ensure the well-being of both humanity and the planet.</p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-12 10:46:43'),
(2, 'Godust - Portable Mist Cannon / Portable Gog Cannon / Portable Anti Smog Gun', 1, 2, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">In the dynamic realm of&nbsp;<strong style=\"font-weight: bold;\">construction and demolition</strong>, controlling dust emissions is pivotal for upholding safety and productivity standards. Enter&nbsp;<strong style=\"font-weight: bold;\">Godust</strong>, a trailblazing solution provider revolutionizing the landscape with cutting-edge technology. Unlike conventional methods reliant on reactive measures like water spraying or chemical treatments, Godust takes a proactive approach to&nbsp;<strong style=\"font-weight: bold;\">dust suppression</strong>.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">Harnessing state-of-the-art atomization and aggregation techniques,&nbsp;<strong style=\"font-weight: bold;\">Godust systems</strong>&nbsp;intercept dust at its source, proactively neutralizing it before it becomes airborne. These innovative systems emit a&nbsp;<strong style=\"font-weight: bold;\">fine mist</strong>, meticulously targeting dust particles and binding them together through agglomeration. This forward-looking strategy not only curtails dust dispersal but also ensures a greener, more efficient solution. Furthermore, Godust’s encapsulation technology forms a durable shield around dust particles, thwarting re-entrainment and ensuring sustained suppression. With Godust, construction and demolition enterprises can effectively manage dust-related risks, fostering a safer and more productive work environment. Experience the future of dust suppression with&nbsp;<strong style=\"font-weight: bold;\">Godust’s Fog Cannon</strong>&nbsp;or&nbsp;&nbsp;<strong style=\"font-weight: bold;\">Mist Cannon solutions</strong>&nbsp;today.</p>', 'Godust-1024x1024.png', '', 1, '2024-08-12 10:46:43'),
(3, 'Mist Beam Or Fog Cannon / Mist Beam Or Smog Gun / Mist Beam Or Mist Cannon', 1, 3, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Duztec Engineering Pvt Ltd pioneers a groundbreaking solution for effective dust control with Mist Beams, or Fog Cannons. These state-of-the-art devices provide a dynamic and versatile approach to tackling dust-related challenges across diverse industries. Mist Beams operate by emitting a fine mist that captures and suppresses dust particles in the air, ensuring a cleaner and safer environment.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">The benefits of Mist Beams are manifold, offering an efficient and eco-friendly solution to dust-related issues. Industries ranging from construction and mining to agriculture can benefit from these innovative devices. Duztec stands out in this domain with its commitment to cutting-edge technology and a relentless pursuit of excellence in dust suppression solutions. With Mist Beams, Duztec Engineering Pvt Ltd leads the way in providing sustainable, effective, and adaptable solutions for a dust-free future.</p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:03:18'),
(4, 'Double Barrel System', 1, 4, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">Introducing the revolutionary&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">Duztec Double Barrel-DB model</strong></span>, a cutting-edge solution for efficient&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">dust suppression</strong></span>&nbsp;and&nbsp;<strong style=\"font-weight: bold;\"><span style=\"color: rgb(34, 96, 164);\">quenching&nbsp;</span></strong>in&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">slag management</strong></span>. Engineered to tackle the challenges of dust emissions during industrial processes, this innovative system incorporates specially designed double mist beams, ensuring a sustainable and effective approach.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">The Duztec Double Barrel-DB boasts dual functionality, deploying&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">Mist cannons</strong></span>&nbsp;or&nbsp;<span style=\"color: rgb(34, 96, 164);\"><strong style=\"font-weight: bold;\">fog cannons</strong></span>&nbsp;at identical angles to simultaneously address two crucial aspects of slag management. One barrel efficiently cools the heated slag, promoting effective quenching, while the other focuses on suppressing the dust generated during the process. This dual-action approach not only enhances the overall efficiency of slag management but also contributes to a cleaner and safer working environment.</p>', 'DB-qji5w5r40rd3jwnio5tnsgecvlpr7yo5ec1ipkvok4.png', '', 1, '2024-08-13 13:03:18'),
(5, 'HPDS (High Pressure Dust Suppression)', 1, 5, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\"><span style=\"text-align: justify;\">In today’s industrial landscape, maintaining a safe and healthy working environment is paramount. Duztec Engineering Pvt Ltd takes pride in offering a cutting-edge solution to address one of the most common challenges in various industries – dust suppression. Our High-Pressure Dust Suppression (HPDS) system is designed to make workplaces safer, cleaner, and more efficient.</span><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:06:34'),
(6, 'SFDS (Single Fluid Dust Suppression)', 1, 6, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\"><span style=\"text-align: justify;\">Introducing Duztec Engineering Pvt Ltd.’s Single Fluid Dust Suppression: A Pioneering Solution for Cleaner, Safer Environments at Duztec Engineering Pvt Ltd, we understand the importance of maintaining a dust-free and safe working environment in various industries. Our Single Fluid Dust Suppression system is the answer to your dust-related challenges, offering a professional and user-friendly solution tailored to meet your unique needs.</span><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:06:34'),
(7, 'Odour Control System', 2, 0, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Introducing the “Duztec Odour System” – a revolutionary leap forward in the realm of odour control. Meticulously engineered to redefine air quality standards, our system incorporates cutting-edge technology to swiftly eliminate unpleasant odours in diverse environments. Through sophisticated filtration and deodorization techniques, we offer a comprehensive solution to malodorous compounds, ensuring efficient and precise treatment.</p><p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">At the core of the “Duztec Odour System” lies a dedication to customization and user-friendliness, catering to businesses and industries in search of a reliable odour control solution. Our intuitive design seamlessly integrates into existing setups, delivering a hassle-free experience for users seeking adaptable and user-friendly air quality management systems.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Embrace environmental responsibility with our energy-efficient design, minimizing ecological impact. Real-time monitoring empowers users to optimize performance, ensuring continuous and reliable odour control. Choose “Duztec Odour System” for enduring capabilities and reliability – the ultimate solution for managing unpleasant odours over the long term. Explore the future of fresh air with us.</p>', 'images.jpg', '', 1, '2024-08-13 13:09:17'),
(8, 'Waste Water Evaporation', 3, 0, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">Welcome to Duztec, the leading provider of innovative wastewater evaporation models that are transforming mining operations. Our revolutionary approach to water treatment involves attaching a specialized barrel to ponds and quarries, which initiates a ground-breaking process that goes beyond mere dust suppression. Through this process, we establish a closed-loop mechanism that optimizes resources and minimizes water wastage in a sustainable manner. Duztec effectively addresses both dust suppression needs and wastewater management challenges in mining environments, and we stand at the forefront of environmental solutions.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px;\">At the core of our innovation is the meticulously engineered generation of an ultra-fine mist. Comprising fine particles, this mist creates a cloud-like atmosphere that adeptly suspends contaminants in the air. Leveraging the heightened volatility of these contaminants ensures their swift evaporation, leaving treated water free from harmful substances. Our advanced method not only meets dust suppression requirements but also provides an eco-friendly solution to wastewater treatment in the mining industry. By embracing our environmentally conscious approach to water treatment, you can revolutionize the landscape of mining operations.</p>', 'EVAP-3.png', '', 1, '2024-08-13 13:09:17'),
(9, 'Road Washing System', 4, 0, '<p style=\"margin-bottom: var(--global-md-spacing); color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Duztec Engineering’s advanced Road Washing Systems – the epitome of efficiency and excellence. Our cutting-edge systems are meticulously designed to tackle the toughest grime, ensuring immaculate cleanliness on roads. With powerful water jets and innovative technology, our systems effortlessly remove debris, oil, and contaminants, promoting safety and preserving road integrity.</p><p style=\"margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Investing in our Road Washing Systems not only enhances the aesthetics of infrastructure but also significantly extends the lifespan of roads, reducing repair costs in the long run. By choosing Duztec, you embrace a sustainable and proactive approach to road management, ensuring a safer environment for commuters. Join the league of smart infrastructure custodians who prioritize cleanliness, safety, and cost-effectiveness. Elevate your road maintenance standards with Duztec Engineering – where advanced technology meets the road.</p>', 'Screenshot-23_auto_x2-scaled-e1708430415526-1536x822.jpg', '', 1, '2024-08-13 13:12:21'),
(10, 'Fog Curtain', 5, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Duztec’ s Fog Curtain System is a cutting-edge technology that provides efficient and effective dust suppression for a wide range of applications. Whether you operate in construction, mining, manufacturing, or any industry susceptible to dust emissions, our Fog Curtain System is tailored to meet your needs.</span><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:12:21'),
(11, 'Truck Mounted Mist Beams', 6, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Welcome to Duztec Engineering Pvt Ltd, your trusted partner in effective dust suppression solutions. We understand the challenges industries face in managing dust emissions, and we’re here to provide a tailored and efficient solution with our innovative product – the Truck Mounted Mist Beams.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">At Duztec Engineering Pvt Ltd, we specialize in offering cutting-edge dust suppression solutions to address the environmental and operational challenges that various industries encounter. Our Truck Mounted Mist Beams are a testament to our commitment to providing top-notch products tailored to your unique needs.</span><br></p><p><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:14:48'),
(12, 'Trolley Mounted Mist Beams', 7, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Welcome to Duztec Engineering Pvt Ltd, your trusted partner in effective dust suppression solutions. We understand the challenges industries face in maintaining a clean and safe environment. That’s why we offer state-of-the-art dust suppression solutions tailored to your specific needs, including our innovative Trolley Mounted Mist Beams.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">Our Trolley Mounted Mist Beams are designed with simplicity, portability, and effectiveness in mind. These easy-to-use mist beams provide a powerful dust suppression solution that can be conveniently transported to various locations on your site. Whether you’re managing construction sites, mining operations, or industrial facilities, our Trolley Mounted Mist Beams are the ideal choice for controlling airborne dust particles.</span><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\"><br></span><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:14:48'),
(13, 'Cooling and Humidification', 8, 0, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 17px; text-align: justify;\">At Duztec, we recognize the paramount importance of creating environments that are not only cool but also optimally humidified for enhanced well-being. Our cutting-edge Cooling and Humidification systems are meticulously designed to cater to a diverse range of needs, offering a blend of sophistication and simplicity.</span></p><div class=\"elementor-element elementor-element-b18b19e elementor-widget elementor-widget-heading\" data-id=\"b18b19e\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; width: 359.984px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(180, 206, 70); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 17px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; font-family: var( --e-global-typography-primary-font-family ), Sans-serif; font-weight: var( --e-global-typography-primary-font-weight ); font-size: 28px; line-height: 1; color: var( --e-global-color-kadence1 );\">Cooling</h2></div></div><div class=\"elementor-element elementor-element-66adc32 elementor-widget elementor-widget-text-editor\" data-id=\"66adc32\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; color: rgb(0, 0, 0); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 359.984px; text-align: justify; font-size: 17px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-bottom: 0px;\">Duztec’ s cooling solutions are engineered to provide efficient and rapid cooling, ensuring a refreshing escape from the heat. Whether it’s for industrial spaces, commercial establishments, or residential areas, our products are tailored to deliver superior performance. Our user-friendly interfaces make it easy for anyone to control and customize the cooling experience, putting the power of comfort in your hands.</p><p style=\"margin-bottom: 0px;\"><br></p><div class=\"elementor-element elementor-element-a3ff6f5 elementor-widget elementor-widget-heading\" data-id=\"a3ff6f5\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; width: 359.984px; margin-bottom: 20px; margin-block-end: 20px; color: rgb(180, 206, 70); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; text-align: start;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><h2 class=\"elementor-heading-title elementor-size-default\" style=\"margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; font-family: var( --e-global-typography-primary-font-family ), Sans-serif; font-weight: var( --e-global-typography-primary-font-weight ); font-size: 28px; line-height: 1; color: var( --e-global-color-kadence1 );\">Humidification</h2></div></div><div class=\"elementor-element elementor-element-ddd6036 elementor-widget elementor-widget-text-editor\" data-id=\"ddd6036\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 359.984px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-bottom: 0px;\">Achieving the right level of humidity is crucial for both health and productivity. Duztec’ s Humidification systems are designed to maintain an optimal moisture balance in the air, preventing dryness and creating a more comfortable atmosphere. Our intuitive controls make it simple to regulate humidity levels, promoting a healthier living and working environment.</p></div></div></div></div><p><br></p>', 'IMG_4267-1-scaled-e1710156064959-1024x687.jpg', '', 1, '2024-08-13 13:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sc_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL COMMENT 'c_id',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0: Inactive 1: Active 2: Delete',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sc_id`, `c_id`, `name`, `description`, `status`, `created_date`) VALUES
(1, 1, 'MOSQUITO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:17:54'),
(2, 1, 'Godust', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:17:54'),
(3, 1, 'Mist Beams', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:18:16'),
(4, 1, 'Double Barrel System', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:18:16'),
(5, 1, 'HPDS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:18:44'),
(6, 1, 'SFDS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-08-07 13:18:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `clientele`
--
ALTER TABLE `clientele`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`hp_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clientele`
--
ALTER TABLE `clientele`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `hp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
