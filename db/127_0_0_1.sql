-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 06:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_radhe_boutique`
--
CREATE DATABASE IF NOT EXISTS `db_radhe_boutique` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_radhe_boutique`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_pic` varchar(255) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_ph_no` bigint(11) NOT NULL,
  `admin_address` varchar(300) NOT NULL,
  `admin_city` varchar(40) NOT NULL,
  `admin_state` varchar(40) NOT NULL,
  `admin_pincode` int(11) NOT NULL,
  `admin_psw` varchar(50) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_pic`, `admin_email`, `admin_ph_no`, `admin_address`, `admin_city`, `admin_state`, `admin_pincode`, `admin_psw`, `admin_status`) VALUES
(1, 'Teena', 'a', 'teena@gmail.com', 1, 'a', 'a', 'a', 1, 'teena', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_img` varchar(250) NOT NULL,
  `cat_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_img`, `cat_status`) VALUES
(1, 'Dulhan Choli', 'images/category/dulhan choli.jpg', 1),
(2, 'Fancy Choli', 'images/category/sider choli.png', 1),
(3, 'Sangit Choli', 'images/category/garba choli.jpg', 1),
(4, 'Haldi Choli', 'images/category/haldi choli.jpg', 1),
(5, 'Work One Piece', 'images/category/heavy one piece.jpg', 1),
(6, 'Panetar Choli', 'images/category/panetar choli.jpg', 1),
(7, 'Simple One Piece', 'images/category/simple one piece.jpg', 1),
(8, 'Panetar Saree', 'images/category/panetar saree.jpg', 1),
(9, 'Work Saree', 'images/category/work saree.png', 1),
(10, 'Simple Work Saree', 'images/category/simple saree.jpeg', 1),
(11, 'Banarasi Dupatta', 'images/category/Heavy Banarasi Duppata.jpg', 1),
(12, 'Work Dupatta', 'images/category/Work Dupatta.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(30) NOT NULL,
  `con_email` varchar(100) NOT NULL,
  `con_msg` varchar(500) NOT NULL,
  `con_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `con_name`, `con_email`, `con_msg`, `con_status`) VALUES
(1, 'Prajesh', 'prajesh@gmail.com', 'Hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `pro_name`, `total`) VALUES
(1, 1, ' , Red Embroidered Silk Bridal Lehenga-1', 6000),
(2, 1, ' , Red Embroidered Silk Bridal Lehenga-1', 6000),
(3, 1, '', 6000),
(4, 1, '', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_material` varchar(500) NOT NULL,
  `pro_details` varchar(10000) NOT NULL,
  `pro_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `cat_id`, `pro_name`, `pro_img`, `pro_price`, `pro_material`, `pro_details`, `pro_status`) VALUES
(1, 1, 'Red Embroidered Art Silk Bridal Choli', 'images/product/Red Embroidered Art Silk Bridal Choli.jpg', 7000, 'Art Silk', 'The choli is made of Art Silk with matching embroidery work of lehenga to give a stylish look. The dupatta is of soft net with zari and sequins embroidered work border.\r\nLehenga Lenght : 43 Inch\r\nLehenga Flair : 3.5 meter\r\nLehenga Type : Semi Stitched\r\nCholi : 1 Meter ( unstitched)\r\nDupatta : 2.25 Meter', 1),
(2, 1, 'Georgette Semi Stitched Choli', 'images/product/Georgette Semi-Stitched Choli.jpg', 4500, 'Georgette', 'Care Instructions: Hand Wash Only\r\nIn the Package :- 1 Lehenga, 1 Choli (0.80) , 1 Dupatta ; Size - Free size\r\nStitch Type :- Lehenga - Semi Stitched, Choli - Unstitched, Dupatta - Ready to Wear', 1),
(3, 1, 'Red Embroidered Silk Bridal Lehenga', 'images/product/Red Sequins Embroidered Silk Bridal Lehenga.jpg', 6000, 'Silk', 'Craft :	Embroidered\r\nEmbellishment :	Sequins work\r\nFabric :	Silk\r\nLehenga Color :	Crimson Red\r\nLehenga Fabric :	Silk\r\nLehenga Length :	Floor Length\r\nLehenga Style :	Flared\r\nLehenga Work :	Thread, Zardosi & Sequins Work\r\nPattern :	Flared\r\nPurity :	Pure', 1),
(4, 2, 'Multi Color Heavy Digital Printed Choli', 'images/product/Designer Multi Color Heavy Digital Printed Choli.jpg', 3000, 'Butter Silk', 'Heavy Butter Silk With Fancy Lace ( 1Ã‚  Mtr Unstitched Fabric) Choli Colour : Blue Choli Material SizeÃ‚ Ã‚  :1mtr Lehenga Flair :3 Mtr Lehenga Length : 44 Inches Lehenga Color : Multi Lehenga Fabric :Heavy Butter Silk Fully Stitched Digital Print Has Dupatta : Yes Dupatta Fabric :Heavy Butter Silk With Fancy Lace & Digital Print Stitching Type : Free Size Semi Stitched Lehenga Work :Printed Wash Care : Dry Clean Ã‚', 1),
(5, 2, 'Digital print pink Silk lahenga Choli', 'images/product/Digital print pink Silk lahenga.jpg', 8000, 'Silk', 'Stitching Type - Semi Stitched\r\n\r\nPackage Details - 1 Choli, 1 Lehenga, 1 Dupatta\r\n\r\n \r\n\r\nDupatta Details :\r\n\r\nDupatta Fabric - Soft\r\n\r\nDupatta Work - Heavy Work\r\n\r\nDupatta Color â€“ Show In Photo\r\n\r\n \r\n\r\nLehenga Details :\r\n\r\nLehenga Fabric â€“ Georgette\r\n\r\nLehenga Length - 44 Inch\r\n\r\nLehenga Color - Show In Photo\r\n\r\nLehenga Flair - 5 Mtr\r\n\r\nLehenga Stitched - Wire Stitched\r\n\r\n \r\n\r\nBlouse Details :\r\n\r\nBlouse Fabric - Georgette\r\n\r\nBlouse Length â€“ 1.5 Mtr\r\n\r\nBlouse Color â€“ Show In Photo', 1),
(6, 2, 'SHUBHVASTRA', 'images/product/SHUBHVASTRA.jpg', 2300, 'Art Silk', 'Green and maroon Digital Chevron Pattern lehenga choli with dupatta\r\nGreen and maroon Digital Chevron Pattern unstitched blouse piece\r\nGreen and maroon Digital Chevron Pattern semi-stitched lehenga , has drawstring and zip closure, flared hem with can-can detail\r\nGreen and maroon Digital Chevron Pattern dupatta, taping border', 1),
(7, 3, 'Blue Floral Party Wear Lehenga Choli', 'images/product/Stylish Blue Floral Party Wear Lehenga Choli Design.jpg', 4500, 'Faux Georgette With Embroidery Work And Digital Print With Inner Silk', 'Choli Fabric\r\n\r\n: Faux Georgette With Embroidery And Digital Print\r\n\r\nCholi Color\r\n\r\n: Blue\r\n\r\nLehenga Size\r\n\r\n:Up To 42\r\n\r\nLehenga Length\r\n\r\n:42 Inches 3 Meter\r\nStitching Type\r\n: Semi-Stitched\r\nWork\r\n:Embroidery\r\nWash Care\r\n:Dry Clean Only', 1),
(8, 3, 'Green Silk Lehenga Choli Set', 'images/product/Green Silk Lehenga Choli Set.jpg', 3000, 'Silk And Net', 'Kickstart the festivities with this notable gorgeousness, made in supple silk texture and olive green tone. The heart of the outfit lies in the designer choli enriched with intricate beads and sequins needlework, giving it an ode to natureâ€™s beauty with glam for all occasions.\r\n\r\nFabric: Silk Choli and Lehenga and Dupatta - Net\r\n\r\nWashing Instructions: DRY CLEAN ONLY\r\n\r\nModel wears size XS, Height - 5.2', 1),
(9, 3, 'Choli With Fancy Cut Out', 'images/product/Choli With Fancy Cut Out.jpg', 5000, 'Light Net', 'Topped with a sleeveless net jacket in a layered peplum design and similar embroidered summer blossoms.\r\nThis piece comes with padding and cancan.\r\nWASH CARE INSTRUCTIONS - Please Dry clean only when it is applicable.\r\nSlight variation in color is possible due to digital photography.', 1),
(10, 4, 'Yellow Color Printed Lehenga', 'images/product/Yellow Color Printed Party Wear Lehenga.jpg', 3500, 'Georgette ', 'Lehenga Fabric\r\n\r\n: Georgette Digital Print Full Of  Frill  Work Lehenga\r\n\r\nLehenga Color\r\n\r\nYellow\r\n\r\nLehenga Length\r\n\r\n: 42 Inch\r\n\r\nLehenga Flair\r\n\r\n: 2Mtr\r\n\r\nCholi Fabric\r\n\r\n: Front Work Blouse Bangalori Silk Embroidery Sequence Real Mirror\r\n\r\nCholi Color : Yellow\r\nDupatta Fabric : Georgette Digital Pring Ruffle Frill Work Duppta\r\nOccasion : Casual ,Festival ,Wedding WearWork : Embroidery Work\r\nWash Care: Dry Clean Only', 1),
(11, 4, 'Digital Printed Lehenga Choli', 'images/product/Digital Printed Lehenga Choli.jpg', 5000, 'Gotta Satin', 'Basanti  Lehenga (Semi-Stitch)\r\n\r\nLehenga Fabric :- Gotta Satin   \r\n\r\nLehenga Inner :- Santoon\r\n\r\nLehenga Colour :- Yellow\r\n\r\nLehenga Work :- Heavy Digital Print \r\n\r\nLehenga Length :- 44"\r\n\r\nLehenga Size :- 44"\r\n\r\nLehenga Flair :- 4 Mtr\r\n\r\nBlouse Fabric :- Gotta Satin  (0.80 Mtr)\r\n\r\nBlouse Colour :- Yellow    \r\n\r\nBlouse Work :- Heavy Digital Print\r\n\r\nDupatta Fabric :- Net\r\n\r\nDupatta Work :- Plain + Readymade Lace\r\n\r\nDupatta Length: - 2.25 Mtr', 1),
(12, 4, 'Lime Yellow Lehenga Choli', 'images/product/Lime Yellow Lehenga Choli.jpg', 3500, 'Georgette ', 'It is crafted sleeveless with a plunging cut work neckline and front hook closure.\r\nThe waist is highlighted with a matching embroidered belt.\r\nTopped with a lime yellow net dupatta with embroidered scallop cut border and butti design.\r\nThis piece comes with padding and cancan.\r\nWASH CARE INSTRUCTIONS - Please Dry clean only when it is applicable.', 1),
(13, 5, 'Steel Blue Embroidered Net Bridal Gown', 'images/product/Steel Blue Sequins Embroidered Net Bridal Gown.jpg', 10000, 'Net', 'Gown Back Neck :	Cutout Neck\r\nGown Color :	Steel Blue\r\nGown Fabric :	Net\r\nGown Front Neck :	Illusion Neck\r\nGown Length :	Floor Length\r\nGown Sleeves :	Full Sleeves\r\nGown Style :	Flared\r\nGown Work :	Sequins, Cutdana & Bead Work\r\nGown Zip :	Side Zip', 1),
(14, 5, 'Dusty Rose Pink Embroidered Net Gown', 'images/product/Dusty Rose Pink Stone Embroidered Net Bridal Gown.jpg', 9000, 'Net', 'Gown Color :	Dusty Rose Pink\r\nGown Fabric :	Net\r\nGown Front Neck :	Sweetheart Neck\r\nGown Length :	Floor Length\r\nGown Sleeves :	Full Sleeves\r\nGown Style :	Flared\r\nGown Work :	Stone, Bead, Cutdana & Sequins Work\r\nGown Zip :	Side Zip', 1),
(15, 5, 'Onion pink satin jaal embroidered net gown ', 'images/product/Onion pink satin jaal embroidered net gown.jpg', 7000, 'Net Gown', 'To allure its appeal it comes with an additional layer with gathers from the waist and net drape attached at the back with sequins work.\r\nDesigned with a deep v neck and back.\r\nWASH CARE INSTRUCTION: Dry clean only.\r\nSlight variation in color is possible due to digital photography.\r\nBeing rewarded as the most trusted brand our customers too believe we deliver same styles as promised on the website.', 1),
(16, 6, 'Panetar Style Bridal Lehebga Choli', 'images/product/panetar choli silk.jpg', 15000, 'Silk', 'Occasion- Bridal\r\nFabric- Silk\r\nColor- white,red,green\r\nType- Circular\r\nWork- Silk, Traditional,Embroidered,Jardozi and Tikki\r\n\r\nWash Care:\r\nDry clean only\r\nDo not handwash', 1),
(17, 6, 'Gujarati Bridal Wear Panetar Choli', 'images/product/Gujarati Bridal Wear.jpg', 15000, 'Net and Satin Cotton', 'Satin Cotton in choli And Net Dupatta.', 1),
(18, 6, 'Traditional Gujarati Bride', 'images/product/Traditional Gujarati Bride.jpg', 12000, 'Georgette', 'Georgette Satin Choli For Special women whos going to be bride.', 1),
(19, 7, 'Semi Stiched Long Anarkali Gown', 'images/product/Semi-Stiched Long Anarkali Gown.jpg', 1200, 'Georgette', 'Gown Fabric :Pure Georgette ; Bottom : Santoon ; Inner : Santoon ; Duppta : Nazmeen\r\nFree Size (Length : 52" | Waist : 38" | Chest/Bust : 42") | Semi-stitched freesize | Flare : 2.5 Meters, Maximum Size Up To Xxl.\r\nGown Type : Anarkali gown , Ball Gown , Long Anarkali gown.\r\nCare Instructions: Regular Hand & Mechine Wash is Recommended.\r\nSuitable for weddings and special occasion this can be paired with beautiful earrings and footwear to enhance your appearance.', 1),
(20, 7, 'Satin Georgette Long Anarkali Suit', 'images/product/Satin Georgette Long Anarkali Suit.jpg', 2000, 'Georgette', 'Care Instructions: Dry Clean Only\r\nTop Fabric :- Fox Georgette || Bottom Fabric :- Santoon || Inar :- Santoon || Dupatta :- Nazneen || Work :- Embroidery With Codding Work\r\nTop Length :- 3.0 Meter || Bottom Length :- 2.0 Meter || Inar Length :- 2.0 Meter || Dupatta Length :-2.20 Meter. Set Contain :- 1 Top :: 1 Duptta :: 1 Inar :: 1 Bottom.\r\nOccasion Type: Evening; Sleeve Type: Long Sleeve; Item Length Description: Maxi', 1),
(21, 7, 'Silk Embroidered Anarkali Gown', 'images/product/Silk Embroidered Anarkali semistitch Gown.jpg', 2500, 'Silk', 'Care Instructions: Dry Clean Only\r\nStyle : Gown; Fabric : Top-Bamboo Silk ; Duppta-Net And Inner Heavy Santoon\r\nWork : Embroidery Codding Work\r\nWe Provide Semistitched Free Size So You Can Stitch Up To 4Xl Size/Bust Size Up To 46-48 And Length Is 55 Inch\r\nThis Gown Dress For Girl Is Floor Length, Flare And Front And Back Side Heavy Embroidery Work With Duptta Embroidery Work And Duptta Have Broad Lace.\r\nOccasion Type: Evening; Sleeve Type: Long Sleeve', 1),
(22, 8, 'Art Silk Half and Half Bridal Saree', 'images/product/Art Silk Half and Half Bridal Saree.jpg', 4320, 'Art Silk', 'Color	Maroon\r\nWork	Applique, Checks, Stone, Weaving, Zari-Embroidery\r\nBlouse Fabric	Satin, Silk\r\nBlouse Type	Unstitched\r\nStyle	Half-and-Half\r\nLook	Bridal', 1),
(23, 8, 'Green and Off White Art Silk Bridal', 'images/product/Green and Off White Art Silk Bridal Saree.jpg', 4300, 'Art Silk', 'Color	Green\r\nWork	Applique, Checks, Stone, Weaving, Zari-Embroidery\r\nBlouse Fabric	Satin, Silk\r\nBlouse Type	Unstitched\r\nStyle	Half-and-Half\r\nLook	Bridal', 1),
(24, 8, 'Traditional Panetar Saree', 'images/product/Traditional Checks Woven Panetar Saree.jpg', 5300, 'Satin Silk', 'Work	Applique, Checks, Stone, Weaving, Zari-Embroidery\r\nBlouse Fabric	Satin, Silk\r\nBlouse Type	Unstitched\r\n]Look	Bridal', 1),
(25, 9, 'Silk Satin Blend Saree', 'images/product/Silk Satin Blend Saree.jpg', 3300, 'Satin Silk', 'Care Instructions: Dry Clean Only\r\nFit Type: Regular\r\nSaree: Rangoli Silk\r\nBlouse: Satin Banglori with Mirror Work\r\nWork Type: Mirror And Embroidery\r\nSaree: Length: 5.5 MTR || Blouse: 0.8 MTR\r\nThere Might Be Minor Colour Variation Between Actual Product And Image Shown On Screen Due To Lighting On The Photography.', 1),
(26, 9, 'Heavy Embroidery Work Saree', 'images/product/Heavy Embroidery Work Saree.jpg', 1300, 'Silk', 'First Wash Dry Clean\r\nSilk Sarees In Red\r\nThis Attire With Silk Is Enhanced With Saree\r\nDo Note: Accessories Shown In The Image Are For Presentation Purposes Only And Length May Vary Upto 2 Inches.(Slight Variation In Actual Color Vs. Image Is Possible).', 1),
(27, 9, 'Heavy Embroidery Work Saree', 'images/product/Magnificent Heavy Work Saree.jpeg', 3500, 'Net', 'Colors May Slightly Vary Or May Not, From What You See On Your Monitor With The Actual Piece. This May Be Because Of Monitor Resolution Or Picture Tube Variances. The Image Shown Is Shot From The Master Piece And We Always Ensure We Send You The Exact Shown Colored Product With The Same Workmanship And Prints. Products With Dyeing Work May Have Slight Color Variations Because Of Manual Dyeing Process. Jewelry & Other Accessories In Picture Is Only For Photoshoot Purpose. Wash Care:- Dry Wash only', 1),
(28, 10, 'Red Color Nazneen Mirror Work', 'images/product/Red Color Nazneen Mirror Work.jpg', 1000, 'Nazneed', 'Care Instructions: Dry Clean\r\nColor : Red\r\nMaterial : Nazneen\r\nSize : 6.3 Mtr With Blouse Piece\r\nWork Type : Mirror Work', 1),
(29, 10, 'Simple Work Designer Saree', 'images/product/Simple Patch Work Designer.jpg', 1100, 'Satin Silk', 'Fine finish\r\nDurability\r\nColorfastness\r\nAttractive loo', 1),
(30, 10, 'Woven Art Silk Saree in Light Beige', 'images/product/Woven Art Silk Saree in Light Beige.jpg', 1900, 'Art Silk', 'Art Silk Hand Embroidered Saree in Light Beige\r\nPrettified with Zari woven, Applique, Thread, Beads, Sequins, Resham, Zari, Dori, Stone and Patch Border Work\r\nAvailable with an Unstitched Art Silk Jacquard Blouse in Fuchsia. Blouse Length- 14 to 15 and Sleeve Length- 1 to 8 inches respectively', 1),
(31, 11, 'Blue And Gold Tone Zari Banarasi Dupatta', 'images/product/Blue & Gold-Tone Banarasi.jpg', 900, 'Banarasi', 'Fabric\r\nSilk Blend\r\nPattern\r\nWoven Design\r\nPrint or Pattern Type\r\nFloral\r\nOrnamentation\r\nZari\r\nOccasion\r\nParty\r\nBorder\r\nWoven Design\r\nWash Care\r\nDry Clean', 1),
(32, 11, 'Pink and Gold Toned Zari Banarasi Dupatta', 'images/product/Pink & Gold-Toned.jpg', 945, 'Silk Blend', 'Fabric\r\nSilk Blend\r\nPattern\r\nWoven Design\r\nPrint or Pattern Type\r\nEthnic Motifs\r\nOrnamentation\r\nZari\r\nOccasion\r\nDaily\r\nBorder\r\nFringed\r\nWash Care\r\nHand Wash', 1),
(33, 11, 'Green and Golden Zari Banarasi Dupatta', 'images/product/Green & Golden Zari.jpg', 888, 'Silk Blend', 'Fabric\r\nSilk Blend\r\nPattern\r\nWoven Design\r\nPrint or Pattern Type\r\nEthnic Motifs\r\nOrnamentation\r\nZari\r\nOccasion\r\nParty\r\nBorder\r\nTasselled\r\nWash Care\r\nDry Clean', 1),
(34, 12, 'Off White Net Embroidered Dupatta', 'images/product/Off White Net Embroidered Dupatta.jpg', 1300, 'Net', 'Fabric\r\nNet\r\nPattern\r\nEmbroidered\r\nPrint or Pattern Type\r\nEthnic Motifs\r\nOrnamentation\r\nSequinned\r\nOccasion\r\nParty\r\nBorder\r\nFringed\r\nWash Care\r\nDry Clean', 1),
(35, 12, 'Pink Aari Embroidered Net Dupatta', 'images/product/Pink Aari Embroidered Net Dupatta.jpg', 1200, 'Net', 'Fabric\r\nNet\r\nPattern\r\nEmbroidered\r\nPrint or Pattern Type\r\nEthnic Motifs\r\nOccasion\r\nDaily\r\nBorder\r\nWoven Design\r\nWash Care\r\nHand Wash', 1),
(36, 12, 'Navy Blue Sequinned Net Dupatta', 'images/product/Women Navy Blue Sequinned Net Dupatta.jpg', 900, 'Net', 'Fabric\r\nNet\r\nPattern\r\nSolid\r\nPrint or Pattern Type\r\nSolid\r\nOrnamentation\r\nSequinned\r\nOccasion\r\nDaily\r\nBorder\r\nEmbellished\r\nWash Care\r\nHand Wash', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_ph_no` bigint(20) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_state` varchar(40) NOT NULL,
  `user_pincode` int(11) NOT NULL,
  `user_psw` varchar(50) NOT NULL,
  `user_pic` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`user_id`, `user_name`, `user_email`, `user_ph_no`, `user_address`, `user_city`, `user_state`, `user_pincode`, `user_psw`, `user_pic`, `user_status`) VALUES
(1, 'Hiral', 'hiral@gmail.com', 1234567890, 'jetpur', 'jetpur', 'gujrat', 360370, '123456', 'admin/images/user/Penguins.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
