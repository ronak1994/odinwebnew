-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 12:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminodin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` text DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `role`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin@gmail.com', '$2y$10$QSlQfRDVCk4wEFJrtHNBdOsPsSWXBXazHkwe7YHUCGHRkn5MxJFje', NULL, '2024-05-05 10:50:26', '2024-05-05 10:50:26', 'Active'),
(2, 'test@test.com', '', 'admin', '2024-09-23 17:52:47', '2024-09-23 17:52:47', 'Active'),
(3, 'test@test.com', '', 'admin', '2024-09-23 17:53:12', '2024-09-23 17:53:12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `basic_table`
--

CREATE TABLE `basic_table` (
  `id` int(5) UNSIGNED NOT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `h_mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hiw` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `basic_table`
--

INSERT INTO `basic_table` (`id`, `whatsapp`, `mobile`, `h_mobile`, `email`, `hiw`, `created_at`, `updated_at`) VALUES
(1, '+919909982425', '+919909982425 ', '+917600004297', 'enquiry@masterofjobs.in', 'dgdsghjgfhjklhgf', '12-02-2024', '12-02-2024');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Interior Design', '2024-11-16 05:49:23', '2024-11-16 06:58:36'),
(2, 'Development', '2024-11-16 05:52:52', '2024-11-16 06:58:49'),
(3, 'Creative Life', '2024-11-16 06:58:58', '2024-11-16 06:58:58'),
(4, 'Travel', '2024-11-16 06:59:06', '2024-11-16 06:59:06'),
(5, 'Interviews', '2024-11-16 06:59:13', '2024-11-16 06:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'categroy', '2024-11-16 05:49:23', '2024-11-16 05:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-04-12-061248', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1714847909, 1),
(2, '2024-04-12-061258', 'App\\Database\\Migrations\\CreateUserProfilesTable', 'default', 'App', 1714847909, 1),
(3, '2024-04-12-063832', 'App\\Database\\Migrations\\CreateHoteliersTable', 'default', 'App', 1714847909, 1),
(4, '2024-04-12-064812', 'App\\Database\\Migrations\\CreateJobListingsTable', 'default', 'App', 1714847909, 1),
(5, '2024-04-12-064848', 'App\\Database\\Migrations\\CreateJobApplicationsTable', 'default', 'App', 1714847909, 1),
(6, '2024-04-12-064913', 'App\\Database\\Migrations\\CreateMessagesTable', 'default', 'App', 1714847909, 1),
(7, '2024-04-17-111501', 'App\\Database\\Migrations\\CreateWorkingExperiencesTable', 'default', 'App', 1714847909, 1),
(8, '2024-04-18-115503', 'App\\Database\\Migrations\\CreateJobSavesTable', 'default', 'App', 1714847909, 1),
(9, '2024-04-26-171510', 'App\\Database\\Migrations\\CreateAdminTable', 'default', 'App', 1714847909, 1),
(10, '2024-04-29-094636', 'App\\Database\\Migrations\\CreateUsersEducationTable', 'default', 'App', 1714847909, 1),
(11, '2024-05-02-070953', 'App\\Database\\Migrations\\CreateUserProfileImage', 'default', 'App', 1714847909, 1),
(12, '2024-05-03-064516', 'App\\Database\\Migrations\\CreateBasicTable', 'default', 'App', 1714847909, 1),
(13, '2024-05-03-121837', 'App\\Database\\Migrations\\CreateResumes', 'default', 'App', 1714847909, 1),
(14, '2024-05-04-195609', 'App\\Database\\Migrations\\CreateJobPref', 'default', 'App', 1714852757, 2),
(15, '2024-05-04-203143', 'App\\Database\\Migrations\\CreateJobPrefUser', 'default', 'App', 1714856029, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `Resume`, `created_at`) VALUES
(26, 130, '/uploads/130-resume/1719417174_d44070832aad20a205e0.pdf', '2024-06-26 21:22:54'),
(28, 132, '/uploads/132-resume/1719472170_1be42ff6f37c52b3893c.pdf', '2024-06-27 12:39:30'),
(29, 129, '/uploads/129-resume/1719489112_196de51c83e64197bc71.pdf', '2024-06-27 17:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `unified_pincodes`
--

CREATE TABLE `unified_pincodes` (
  `id` int(11) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unified_pincodes`
--

INSERT INTO `unified_pincodes` (`id`, `pincode`, `city_name`, `state_name`) VALUES
(1, '332406', 'Sikar', 'Rajasthan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `last_active` varchar(255) DEFAULT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `ref_id` int(11) DEFAULT NULL,
  `work_ex` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile_number`, `created_at`, `updated_at`, `last_active`, `points`, `ref_id`, `work_ex`, `status`) VALUES
(128, '3030303030', '2024-06-26 14:37:10', '2024-06-26 14:37:10', '2024-06-26 14:37:10', 0, NULL, 'hotel', 'Enable'),
(129, '7600004297', '2024-06-26 21:15:55', '09-23-2024 02:55 PM', '2024-06-26 21:15:55', 0, NULL, 'experienced', 'Enable'),
(130, '7863086650', '2024-06-26 21:17:05', '2024-06-26 21:17:05', '2024-06-26 21:17:05', 0, NULL, 'fresher', 'Enable'),
(132, '9876543210', '2024-06-27 11:35:45', '09-23-2024 11:20 PM', '2024-06-27 11:35:45', 0, NULL, 'experienced', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `user_blog`
--

CREATE TABLE `user_blog` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `author` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_tag` text NOT NULL,
  `blog_tag` text NOT NULL,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `status` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_blog`
--

INSERT INTO `user_blog` (`id`, `name`, `author`, `meta_title`, `meta_des`, `meta_tag`, `blog_tag`, `category`, `content`, `status`, `created_at`) VALUES
(2, 'Equity Structuring Confusing You? Here’s How to Build a Strong Foundation!', 'TheOdin', 'Equity Structuring Confusing You? Here’s How to Build a Strong Foundation!', 'Equity Structuring Confusing You? Here’s How to Build a Strong Foundation!', 'Structuring Confusing, Equity, Build a Strong Foundation', 'Equity', 'Interior Design,Development', '<p>In direct-to-consumer (D2C) startups, securing the right kind of funding can make or break your business. Whether you are just starting or looking to scale, navigating the fundraising landscape can be daunting. This guide explores the essential strategies for D2C brands to successfully raise capital.</p><h2>Different Stages of Fundraising</h2><p>Understanding where your business stands is crucial. Fundraising typically occurs in stages:</p><ul><li>● Seed Funding: The initial capital used to launch your idea. For D2C startups, this might come from personal savings, friends, or early-stage angel investors.</li><li>● Series A, B, and Beyond: As your brand grows, you will look for larger investments. Here, venture capital firms step in, looking for proof of concept and scalability.</li></ul><h3>Tips for Early-Stage D2C Startups</h3><ul><li>1. Create a Strong Pitch: Investors must understand your brand value proposition and market potential.</li><li>2. Show Traction: Demonstrate initial sales, customer acquisition, or media buzz.</li><li>3. Leverage E-commerce Platforms: Highlight data-driven success from platforms like Shopify or WooCommerce.</li></ul><h4><br data-cke-filler=\"true\"></h4><h4><strong>Equity vs. Debt Financing</strong></h4><p>D2C startups can explore both equity (giving up a portion of your company) and debt (loans) financing. While equity helps startups with high growth potential, debt might be preferable if you want to retain ownership.</p><p><strong>Presenting Your Brand to Investors</strong></p><p>Furnished unfeeling his sometimes see day promotion. Quitting informed concerns can men now. Projection to or up conviction is uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p><p><strong>Do Dreams Serve As A Premonition</strong></p><p>Investors want to see a compelling brand story. Focus on your product, target audience, and future growth potential. Remember, it is not just about numbers—it is about passion and vision. Need help crafting your pitch? (Explore Odin &nbsp;Consultancy Services for tailored fundraising strategies.)</p><p><br data-cke-filler=\"true\"></p><p><br data-cke-filler=\"true\"></p>', 'Enable', '2024-11-16'),
(3, 'Is Your D2C Startup Ready to Attract the Right Investors?', 'TheOdin', 'Is Your D2C Startup Ready to Attract the Right Investors?', 'Is Your D2C Startup Ready to Attract the Right Investors?', ' D2C, Attract the Right Investors', 'D2C', 'Interior Design,Development', '<p>In the world of direct-to-consumer (D2C) startups, securing the right kind of funding can make or break your business. Whether you are just starting or looking to scale, navigating the fundraising landscape can be daunting. This guide explores the essential strategies for D2C brands to raise capital successfully.</p><h2>Different Stages of Fundraising</h2><p>Understanding where your business stands is crucial. Fundraising typically occurs in stages:</p><ul><li>● Seed Funding: The initial capital used to launch your idea. For D2C startups, this might come from personal savings, friends, or early-stage angel investors.</li><li>● Series A, B, and Beyond: As your brand grows, you will look for larger investments. Here, venture capital firms step in, looking for proof of concept and scalability.</li></ul><h3>Tips for Early-Stage D2C Startups</h3><ul><li>1. Create a Strong Pitch: Investors must understand your brand value proposition and market potential.</li><li>2. Show Traction: Demonstrate initial sales, customer acquisition, or media buzz.</li><li>3. Leverage E-commerce Platforms: Highlight data-driven success from platforms like Shopify or WooCommerce.</li></ul><h4><strong>Equity vs. Debt Financing</strong></h4><p>D2C startups can explore both equity (giving up a portion of your company) and debt (loans) financing. While equity helps startups with high growth potential, debt might be preferable if you want to retain ownership.</p><p><strong>Presenting Your Brand to Investors</strong></p><p>Furnished unfeeling his sometimes see day promotion. Quitting informed concerns can men now. Projection to or up conviction is uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p><p><strong>Do Dreams Serve As A Premonition</strong></p><p>Investors want to see a compelling brand story. Focus on your product, target audience, and future growth potential. Remember, it is not just about numbers—it is about passion and vision. Need help crafting your pitch? (Explore Odin Consultancy Services for tailored fundraising strategies.)</p>', 'Enable', '2024-02-20'),
(4, 'Want to Harness the Power of AI for Your D2C Brand’s Growth?', 'TheOdin', 'Want to Harness the Power of AI for Your D2C Brand’s Growth?', 'Want to Harness the Power of AI for Your D2C Brand’s Growth?', 'Harness the Power, AI for Your D2C Brand’s Growth', 'D2C', 'Interior Design,Development', '<p>In today competitive market, leveraging technology is no longer optional—it is essential. AI is transforming how D2C brands operate, allowing them to scale faster and improve customer experiences.</p><h2>AI in D2C Business</h2><p>AI offers numerous opportunities for D2C brands to optimize their operations, from inventory management to personalized marketing.</p><h2>Case Studies of AI in D2C</h2><ul><li>1. Personalized Shopping Experiences: Brands like Stitch Fix use AI to offer curated product recommendations, driving higher conversion rates.</li><li>2. Inventory Optimization: AI-powered tools help D2C brands manage stock efficiently, reducing overhead and avoiding stockouts.</li><li>3. Customer Support: Chatbots are increasingly used to provide 24/7 customer support, improving user experience.</li></ul><h3>How to Implement AI</h3><p>Start by identifying areas in your business where AI can have the most impact, such as customer segmentation, marketing automation, and logistics.</p><p>Ready to integrate AI? (Discover Odin’s AI Solutions for D2C brands.)</p>', 'Enable', '2024-02-17'),
(5, 'Struggling to Make Your D2C Brand Stand Out? Let’s Fix That!', 'TheOdin', 'Struggling to Make Your D2C Brand Stand Out? Let’s Fix That!', 'Struggling to Make Your D2C Brand Stand Out? Let’s Fix That!', 'Make Your D2C Brand, Struggling to Make Your D2C Brand', 'D2C', 'Interior Design,Development,Creative Life', '<p>In the D2C space, having a strong marketing strategy is critical to differentiate your brand from the competition. Here is how to create a marketing strategy that resonates with your audience and fuels your growth.</p><h2>Identifying Your Ideal Customer</h2><p>Understanding your target audience is the first step in any successful marketing campaign. Use data and insights to build a detailed customer persona, including demographics, interests, and shopping behavior.</p><h2>Crafting a Unique Brand Identity</h2><p>Branding goes beyond logos and colors—it is the story you tell your customers. Focus on:</p><ul><li>● Brand Story: Why did you start your company? What is your mission?</li><li>● Voice and Tone: How do you communicate with your audience? Are you casual, formal, humorous, or professional?</li></ul><h2>Effective Marketing Channels</h2><ul><li>1. Social Media: Leverage Instagram, Facebook, and TikTok for storytelling and community engagement.</li><li>2. Email Marketing: Build a loyal customer base with personalized email campaigns.</li><li>3. Influencer Partnerships: Partner with micro-influencers to expand your reach authentically.</li></ul><p>Need a customized marketing plan? (Reach out to Odin for brand consultancy.)</p>', 'Enable', '2024-02-17'),
(6, 'How Can You Retain Customers and Build Long-Lasting Relationships?', 'TheOdin', 'How Can You Retain Customers and Build Long-Lasting Relationships?', 'How Can You Retain Customers and Build Long-Lasting Relationships?', 'Relationships', 'Relationships', 'Development,Creative Life', '<p>Driving sales in the D2C space requires a deep understanding of your customers, along with a streamlined, data-driven sales strategy.</p><h3>Building an Omnichannel Sales Strategy &nbsp; &nbsp;</h3><p>&nbsp;D2C brands need to focus on creating a seamless shopping experience across all channels—website, mobile apps, social media, and even physical pop-ups. &nbsp; &nbsp; &nbsp;</p><h3>Optimizing the Sales Funnel &nbsp; &nbsp;</h3><p>Understand where customers drop off in the buying process and optimize your funnel to reduce friction, increase conversions, and upsell.</p><h3>The Power of Upselling and Cross-Selling</h3><p>Use personalized product recommendations and upselling techniques to increase average order value and build customer loyalty.</p><p>Want to improve your sales strategy? (Explore Odin sales consultancy services.)</p>', 'Enable', '2024-02-15'),
(8, 'Are You Maximizing Your D2C Sales Potential?', 'TheOdin', 'Are You Maximizing Your D2C Sales Potential?', 'Are You Maximizing Your D2C Sales Potential?', ' D2C Sales Potential?', 'D2C Sales ', '', '<h2>Are You Maximizing Your D2C Sales Potential?</h2><figure class=\"image ck-widget\" contenteditable=\"false\"><img src=\"http://localhost/theodinnew/resources/D2C_Sales/img/assets/sectionBlog/post-4-1.jpg\" alt=\"\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div><figcaption class=\"ck-editor__editable ck-editor__nested-editable ck-hidden ck-placeholder\" data-placeholder=\"Enter image caption\" contenteditable=\"true\"><br data-cke-filler=\"true\"></figcaption></figure><p>Driving sales in the D2C space requires a deep understanding of your customers, along with a streamlined, data-driven sales strategy.</p><h2>Building an Omnichannel Sales Strategy</h2><p>D2C brands need to focus on creating a seamless shopping experience across all channels—website, mobile apps, social media, and even physical pop-ups.</p><h2>Optimizing the Sales Funnel</h2><p>Understand where customers drop off in the buying process and optimize your funnel to reduce friction, increase conversions, and upsell.</p><h2>The Power of Upselling and Cross-Selling</h2><p>Use personalized product recommendations and upselling techniques to increase average order value and build customer loyalty.<br>Want to improve your sales strategy? (Explore Odin sales consultancy services.)</p>', 'Enable', '2024-02-20'),
(9, 'Struggling to Secure Funding? Here’s How to Get Investors Excited About Your D2C Brand!', 'TheOdin', 'Struggling to Secure Funding? Here’s How to Get Investors Excited About Your D2C Brand!', 'Struggling to Secure Funding? Here’s How to Get Investors Excited About Your D2C Brand!', 'Struggling to Secure Funding, Get Investors Excited About Your D2C Brand!', ' Funding', 'Interior Design,Development', '<p>Every D2C startup dreams of scaling fast, but securing the right funding is the key to turning that dream into reality. This blog explores the step-by-step process to raise capital effectively, tailored specifically for D2C entrepreneurs.</p><h2>The First Step: Are You Investor-Ready?</h2><p>Before approaching investors, ensure your business is ready. This includes having:</p><ul><li>● A validated product with real customer interest.</li><li>● A compelling brand story that resonates with your target market.</li><li>● Basic financials showing potential scalability.</li></ul><h2>Identifying the Right Investors</h2><p>Not all investors are created equal. For D2C brands, it is crucial to find investors who not only offer capital but also expertise in scaling consumer-facing businesses.</p><ul><li>● Angel Investors: Ideal for early-stage funding with hands-on guidance.</li><li>● Venture Capitalists: Better suited for later-stage funding, especially for rapid growth.</li></ul><h2>How to Nail Your Pitch</h2><p>Your pitch is your first impression. Start with a strong hook that outlines your brand is uniqueness, followed by:</p><ul><li>● Market analysis showcasing demand.</li><li>● Revenue models that demonstrate financial viability.</li><li>● A clear vision for how the funds will be used.</li></ul><h2>Post-Funding: What Comes Next?</h2><p>Securing funds is just the beginning. Focus on building strong relationships with your investors, keeping them updated with regular financial reports, and using their advice to grow your brand.</p><p>Looking for guidance in your fundraising journey? (Let Odin team of experts support you every step of the way.)</p>', 'Enable', '2024-02-20'),
(10, 'Got a Great Product Idea? Here’s How to Turn It Into Reality!', 'TheOdin', 'Got a Great Product Idea? Here’s How to Turn It Into Reality!', 'Got a Great Product Idea? Here’s How to Turn It Into Reality!', 'Got a Great Product Idea, Turn It Into Reality!', 'Product', 'Development,Creative Life,Travel', '<p>The D2C space thrives on innovation, and product development is at the core of building a successful brand. Here is how to go from idea to market-ready product.</p><h2>Conducting Market Research</h2><p>Before you develop a product, conduct thorough market research to understand your customer needs, preferences, and pain points.</p><h2>Prototyping and Testing</h2><p>Start with a prototype, test it with a small group of customers, and iterate based on feedback. This process helps you refine your product and ensures that it meets customer expectations.</p><h2>Scaling Production</h2><p>Once you have finalized your product, plan for production and logistics. Focus on maintaining quality while scaling to meet demand.<br>Need help with product development? (Explore Odin product development consultancy.)</p>', 'Enable', '2024-11-13'),
(11, 'Want to Take Your D2C Brand to the Next Level? Here’s How to Use Data to Win!', 'TheOdin', 'Want to Take Your D2C Brand to the Next Level? Here’s How to Use Data to Win!', 'Want to Take Your D2C Brand to the Next Level? Here’s How to Use Data to Win!', 'Your D2C Brand to the Next Level,  Use Data to Win!', 'D2C Brands', 'Interior Design,Development', '<p>In the digital age, marketing for D2C brands is all about precision and personalization. With an overwhelming number of competitors, how do you ensure your brand stands out? This guide explores data-driven strategies that give your marketing efforts a competitive edge.</p><h2>Understanding Your Audience: Data Is Your Best Friend</h2><p>Gone are the days of guesswork. With tools like Google Analytics, Shopify Insights, and social media metrics, you can dive deep into customer behaviors:</p><ul><li>● Demographics: Know who your customers are, from age to interests.</li><li>● Purchase Behavior: Track what they buy, when they buy, and how they browse your site.</li><li>● Engagement Metrics: Use engagement data to tweak your messaging and understand what resonates with your audience.</li></ul><h2>Building a Personalized Marketing Strategy</h2><p>Personalization is key in the D2C space. Utilize customer data to create personalized email campaigns, recommend relevant products, and offer targeted promotions that cater to each individual’s shopping habits.</p><p>Leveraging Influencer Marketing</p><p>Influencer marketing remains a powerful tool, especially for D2C brands. However, focus on micro-influencers—those with smaller but highly engaged audiences. They offer authenticity and often yield better ROI than big-name influencers.</p><h2>The Power of Retargeting</h2><p>Retargeting ads are an excellent way to bring back visitors who’ve shown interest but have not made a purchase. Utilize platforms like Facebook Pixel or Google Ads to reach out to these potential customers with targeted ads.</p><p>Need to revamp your marketing strategy? (Contact Odin marketing experts for a data-driven approach.)</p>', 'Enable', '2024-11-12'),
(12, 'Equity Dilemmas Keeping You Up at Night? Let’s Solve Them Together!', 'TheOdin', 'Equity Dilemmas Keeping You Up at Night? Let’s Solve Them Together!', 'Equity Dilemmas Keeping You Up at Night? Let’s Solve Them Together!', 'Equity Dilemmas Keeping, Solve Them Together', 'D2C Startups', 'Development,Creative Life', '<p>For D2C startups, equity structuring is more than just splitting ownership—it’s about laying the groundwork for your brand’s future growth. Here’s how you can effectively structure equity while maintaining control over your business.</p><h3>Why Equity Matters for Startups</h3><p>Equity dictates control, profit sharing, and the decision-making process. It’s crucial to ensure that founders, employees, and investors are fairly compensated while aligning everyone’s interests for long-term success.</p><h3>Key Elements to Consider in Equity Structuring</h3><ol><li>Founders’ Equity: Decide how much each co-founder will hold based on contributions, time invested, and roles.</li><li>Employee Equity (ESOPs): Offering equity to employees through Employee Stock Ownership Plans (ESOPs) helps attract top talent and aligns them with your brand’s success.</li><li>Investor Equity: While raising capital, be strategic about the equity you give away. Too much dilution early on can result in founders losing control of the company.</li></ol><h3>Building a Fair and Transparent Cap Table</h3><p>A well-maintained cap table ensures transparency. It tracks ownership percentages and reflects equity changes as you raise funds, issue shares to employees, or bring in new investors.</p><h3>Balancing Power with Equity</h3><p>Consider non-voting shares for certain investors to maintain decision-making control within the founding team. This ensures founders can continue steering the company without interference, even as they raise multiple funding rounds.</p><p>Need help structuring your company’s equity? (Odin offers in-depth advisory on building a fair equity structure.)</p>', 'Enable', '2024-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pin_code` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `name`, `last_name`, `gender`, `email`, `role`, `address`, `pin_code`, `dob`, `state`, `city`, `country`, `created_at`, `updated_at`) VALUES
(91, 129, 'Jagdish', 'Jat', 'male', 'info.jagdishchaudhary@gmail.com', 'Job Seeker', 'Rajkot', '360007', '1973-01-14', 'Gujarat', 'RAJKOT', 'India', '06-26-2024 09:15 PM', '10-20-2024 04:55 PM'),
(92, 130, 'Jayesh', 'Narola', 'male', 'jayeshnarola.nimrajkot@gmail.com', 'Job Seeker', 'Jay Chamunda Krupa 3 Shyamnagar street behind Bileshwar Temple Gandhigram Rajkot ', '360007', '1986-08-07', 'Gujarat', 'RAJKOT', 'India', '06-26-2024 09:17 PM', '06-26-2024 09:17 PM'),
(93, 132, 'Rohit', 'Kumar', 'male', 'Treesddd@gmail.com', 'Job Seeker', 'Tr, cf, fdrtewr', '302022', '2020-06-10', 'Rajasthan', 'JAIPUR', 'India', '06-27-2024 11:35 AM', '06-27-2024 12:41 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_images`
--

CREATE TABLE `user_profile_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile_images`
--

INSERT INTO `user_profile_images` (`id`, `user_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, '/uploads/profile/1-img/1731746933_2a80dfcb6fb8fc2f2857.jpg', '2024-11-12 14:53:59', '2024-11-16 14:18:53'),
(2, 2, '/uploads/profile/2-img/1731747467_c68d56fb60123e3e5ed3.jpg', '2024-11-16 14:23:38', '2024-11-16 14:27:47'),
(3, 3, '/uploads/profile/3-img/1731747639_258022978cb40eef0961.jpg', '2024-11-16 14:30:39', '2024-11-16 14:30:39'),
(4, 4, '/uploads/profile/4-img/1731747770_bc571a8435a215acebf6.jpg', '2024-11-16 14:32:50', '2024-11-16 14:32:50'),
(5, 5, '/uploads/profile/5-img/1731747902_6405453d333431ad5ad6.jpg', '2024-11-16 14:35:02', '2024-11-16 14:35:02'),
(6, 6, '/uploads/profile/6-img/1731754398_4dee9200441b8010a42a.jpg', '2024-11-16 16:19:09', '2024-11-16 16:23:18'),
(7, 8, '/uploads/profile/8-img/1731754823_fd82d3f6b969ab7efaad.jpg', '2024-11-16 16:30:23', '2024-11-16 16:30:23'),
(8, 9, '/uploads/profile/9-img/1731754858_0ba3606d42fc01dd8c53.jpg', '2024-11-16 16:30:58', '2024-11-16 16:30:58'),
(9, 10, '/uploads/profile/10-img/1731754985_5aa307c0afff640779e1.jpg', '2024-11-16 16:33:05', '2024-11-16 16:33:05'),
(10, 11, '/uploads/profile/11-img/1731755175_f5099a02b8060328e91a.jpg', '2024-11-16 16:36:15', '2024-11-16 16:36:15'),
(11, 12, '/uploads/profile/12-img/1731756098_5c65f256673aeae74fef.jpg', '2024-11-16 16:51:38', '2024-11-16 16:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_table`
--
ALTER TABLE `basic_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `unified_pincodes`
--
ALTER TABLE `unified_pincodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pincode` (`pincode`,`city_name`,`state_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_blog`
--
ALTER TABLE `user_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_profile_images`
--
ALTER TABLE `user_profile_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basic_table`
--
ALTER TABLE `basic_table`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `unified_pincodes`
--
ALTER TABLE `unified_pincodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `user_blog`
--
ALTER TABLE `user_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `user_profile_images`
--
ALTER TABLE `user_profile_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
