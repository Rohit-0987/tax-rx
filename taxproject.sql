-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 07:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `CustomerId` bigint(20) UNSIGNED NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GstNumber` decimal(8,2) NOT NULL,
  `PanNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobileNumber` decimal(13,2) NOT NULL,
  `BankName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IFSC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BankAccount` decimal(20,2) NOT NULL,
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`CustomerId`, `CustomerName`, `CustomerAddress`, `GstNumber`, `PanNumber`, `Email`, `MobileNumber`, `BankName`, `IFSC`, `BankAccount`, `customer_users_id`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'nagpur', '65757.00', 'fajk74', 'Rohitbharshe', '457982.00', 'hsdh', 'shjhg849', '27589.00', 1, '2022-11-20 04:24:47', '2022-11-20 04:24:47'),
(2, 'Rohit', 'nagpur', '72598.00', 'fajk74', 'rohit@gmail.com', '92847498.00', 'hdfc', 'shjhg849', '8823042.00', 3, '2022-11-20 06:07:17', '2022-11-20 06:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_users`
--

CREATE TABLE `customer_users` (
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_users`
--

INSERT INTO `customer_users` (`customer_users_id`, `name`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'rohit1234', 'rohitbharshe@gmail.com', 'Rohit1234', '2022-11-20 04:07:46', '2022-11-20 04:07:46'),
(2, 'Gaurav', 'Gaurav', 'gaurav@gmail.com', 'Gaurav123', '2022-11-20 04:28:03', '2022-11-20 04:28:03'),
(3, 'Shubham', 'shubham', 'shubham@gmail.com', 'Shubham1234', '2022-11-20 06:01:40', '2022-11-20 06:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `edit_profile`
--

CREATE TABLE `edit_profile` (
  `edit_id` bigint(20) UNSIGNED NOT NULL,
  `tradename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gst_no` decimal(20,2) NOT NULL,
  `office_address` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_code` decimal(8,2) NOT NULL,
  `number` decimal(18,2) NOT NULL,
  `pan_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTHORISED` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IFSC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `BankAccount` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edit_profile`
--

INSERT INTO `edit_profile` (`edit_id`, `tradename`, `Gst_no`, `office_address`, `state`, `pin_code`, `number`, `pan_no`, `AUTHORISED`, `bank_name`, `IFSC`, `customer_users_id`, `created_at`, `updated_at`, `BankAccount`) VALUES
(1, 'abc', '37428.00', 'Pune', 'Maharastra', '32784.00', '37289.00', 'jhgfsd7', 'dfgsd', 'fgs', '245332', 2, '2022-11-20 04:32:36', '2022-11-20 04:32:36', '5252.00'),
(2, 'sai jwellers', '43793.00', 'gondia', 'Maharastra', '441702.00', '9284749802.00', 'dhsd89', 'fhf', 'hdfc', 'hdfc0003838', 3, '2022-11-20 06:10:11', '2022-11-20 06:10:11', '398259.00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceId` bigint(20) UNSIGNED NOT NULL,
  `InvoiceNumber` decimal(8,2) DEFAULT NULL,
  `InvoiceDate` date DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `ClientBusinessAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClientAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClientCity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClientPostsl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClientState` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goodservices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxablevalue` decimal(8,2) DEFAULT NULL,
  `HSNSAC` decimal(8,2) DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UQC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GstRate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SGSTUTGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SupplyType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `CustomerId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paid` decimal(8,2) DEFAULT NULL,
  `Unpaid` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceId`, `InvoiceNumber`, `InvoiceDate`, `DueDate`, `ClientBusinessAddress`, `ClientAddress`, `ClientCity`, `ClientPostsl`, `ClientState`, `Country`, `goodservices`, `taxablevalue`, `HSNSAC`, `quantity`, `UQC`, `GstRate`, `IGST`, `CGST`, `SGSTUTGST`, `SupplyType`, `customer_users_id`, `CustomerId`, `created_at`, `updated_at`, `paid`, `Unpaid`) VALUES
(1, '1.00', '2022-11-22', '2022-11-22', NULL, NULL, NULL, NULL, NULL, NULL, 'dsf', '78.00', '234.00', '1', 'KG', '32', '89', '324', '45', 'EXPORT', 3, 2, '2022-11-20 07:41:53', '2022-11-20 07:41:53', '500.00', '89.00'),
(2, '1.00', '2022-11-21', '2022-11-22', NULL, NULL, NULL, NULL, NULL, NULL, 'dsf', '50.00', '67.00', '1', 'NO OF PCS', '32', '89', '56', '23', 'EXPORT', 3, 2, '2022-11-20 07:49:06', '2022-11-20 07:49:06', '500.00', '89.00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_05_063416_create_customer_users_table', 1),
(6, '2022_11_10_164859_create_edit_profile_table', 1),
(7, '2022_11_10_184443_add__bank_account_to_edit_profile_table', 1),
(8, '2022_11_12_122350_create__add_customer_table', 1),
(9, '2022_11_19_062911_create__invoice_table', 2),
(10, '2022_11_19_091528_create__vendor_table', 2),
(11, '2022_11_19_123002_create_purchase_bill_table', 3),
(12, '2022_11_19_154147_add_paid_to_invoice_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_bill`
--

CREATE TABLE `purchase_bill` (
  `PurchaseId` bigint(20) UNSIGNED NOT NULL,
  `BillNumber` decimal(8,2) DEFAULT NULL,
  `BillDate` date DEFAULT NULL,
  `good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxablevalue` decimal(8,2) DEFAULT NULL,
  `HSN` decimal(8,2) DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UQC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GstRate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SGST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Paid` decimal(8,2) DEFAULT NULL,
  `UnPaid` decimal(8,2) DEFAULT NULL,
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `VendorId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_bill`
--

INSERT INTO `purchase_bill` (`PurchaseId`, `BillNumber`, `BillDate`, `good`, `taxablevalue`, `HSN`, `quantity`, `UQC`, `GstRate`, `IGST`, `CGST`, `SGST`, `Paid`, `UnPaid`, `customer_users_id`, `VendorId`, `created_at`, `updated_at`) VALUES
(1, '1.00', '2022-11-21', 'sfd', '423.00', '324.00', '1', 'KG', '423', '453', '43', '453', '432.00', '243.00', 3, 1, '2022-11-20 09:23:39', '2022-11-20 09:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'rohitbharshe@gmail.com', NULL, 'Rohit1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VendorId` bigint(20) UNSIGNED NOT NULL,
  `VendorName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VendorAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GstNumber` decimal(8,2) DEFAULT NULL,
  `PanNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MobileNumber` decimal(8,2) DEFAULT NULL,
  `BankName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IFSC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BankAccount` decimal(8,2) DEFAULT NULL,
  `customer_users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VendorId`, `VendorName`, `VendorAddress`, `GstNumber`, `PanNumber`, `Email`, `MobileNumber`, `BankName`, `IFSC`, `BankAccount`, `customer_users_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'pune', '72598.00', 'fajk74', 'rohit@gmail.com', '457982.00', 'hsdh', 'shjhg849', '27589.00', 3, '2022-11-20 07:52:39', '2022-11-20 07:52:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD KEY `add_customer_customer_users_id_foreign` (`customer_users_id`);

--
-- Indexes for table `customer_users`
--
ALTER TABLE `customer_users`
  ADD PRIMARY KEY (`customer_users_id`);

--
-- Indexes for table `edit_profile`
--
ALTER TABLE `edit_profile`
  ADD PRIMARY KEY (`edit_id`),
  ADD KEY `edit_profile_customer_users_id_foreign` (`customer_users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceId`),
  ADD KEY `invoice_customer_users_id_foreign` (`customer_users_id`),
  ADD KEY `invoice_customerid_foreign` (`CustomerId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  ADD PRIMARY KEY (`PurchaseId`),
  ADD KEY `purchase_bill_customer_users_id_foreign` (`customer_users_id`),
  ADD KEY `purchase_bill_vendorid_foreign` (`VendorId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VendorId`),
  ADD KEY `_vendor_customer_users_id_foreign` (`customer_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `CustomerId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_users`
--
ALTER TABLE `customer_users`
  MODIFY `customer_users_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `edit_profile`
--
ALTER TABLE `edit_profile`
  MODIFY `edit_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  MODIFY `PurchaseId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VendorId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD CONSTRAINT `add_customer_customer_users_id_foreign` FOREIGN KEY (`customer_users_id`) REFERENCES `customer_users` (`customer_users_id`);

--
-- Constraints for table `edit_profile`
--
ALTER TABLE `edit_profile`
  ADD CONSTRAINT `edit_profile_customer_users_id_foreign` FOREIGN KEY (`customer_users_id`) REFERENCES `customer_users` (`customer_users_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_customer_users_id_foreign` FOREIGN KEY (`customer_users_id`) REFERENCES `customer_users` (`customer_users_id`),
  ADD CONSTRAINT `invoice_customerid_foreign` FOREIGN KEY (`CustomerId`) REFERENCES `add_customer` (`CustomerId`);

--
-- Constraints for table `purchase_bill`
--
ALTER TABLE `purchase_bill`
  ADD CONSTRAINT `purchase_bill_customer_users_id_foreign` FOREIGN KEY (`customer_users_id`) REFERENCES `customer_users` (`customer_users_id`),
  ADD CONSTRAINT `purchase_bill_vendorid_foreign` FOREIGN KEY (`VendorId`) REFERENCES `vendor` (`VendorId`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `_vendor_customer_users_id_foreign` FOREIGN KEY (`customer_users_id`) REFERENCES `customer_users` (`customer_users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
