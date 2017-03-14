-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 03:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w3schools`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `type`) VALUES
(1, 'HTML', 'html', '0'),
(2, 'CSS', 'css', '0'),
(3, 'JAVASCRIPTS', 'javascripts', '0'),
(4, 'SQL', 'sql', '0'),
(5, 'PHP', 'php', '0'),
(6, 'HTML Introduction', '', '1'),
(7, 'HTML Editors', '', '1'),
(9, 'PHP 5 Introduction', '', '5'),
(10, 'PHP 5 Installation', '', '5'),
(11, 'HTML Basic ', '', '1'),
(12, 'PHP 5 Install', '', '5'),
(13, 'CSS Introduction', '', '2'),
(14, 'CSS Syntax', '', '2'),
(15, 'CSS How To', '', '2'),
(16, 'JavaScript Introduction', '', '3'),
(17, 'JavaScript Where To', '', '3'),
(18, 'JavaScript Output', '', '3'),
(19, 'Intro to SQL', '', '4'),
(20, 'SQL Syntax', '', '4'),
(21, 'SQL SELECT', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`) VALUES
(1, 'HTML', 'HTML5 Tutorial\r\n\r\nWith HTML you can create your own Web site.\r\n\r\nThis tutorial teaches you everything about HTML.\r\n\r\nHTML is easy to learn - You will enjoy it\r\n\r\nExamples in Every Chapter\r\nThis HTML tutorial contains hundreds of HTML examples.\r\n\r\nWith our online HTML editor, you can edit the HTML, and click on a button to view the result.\r\n\r\nHTML References\r\nAt W3Schools you will find complete references about tags, attributes, events, color names, entities, character-sets, URL encoding, language codes, HTTP messages, and more.'),
(2, 'CSS', 'CSS Tutorial\r\n\r\nCSS is a language that describes the style of an HTML document.\r\n\r\nCSS describes how HTML elements should be displayed.\r\n\r\nThis tutorial will teach you CSS from basic to advanced.\r\n\r\nExamples in Each Chapter\r\nThis CSS tutorial contains hundreds of CSS examples.\r\n\r\nWith our online editor, you can edit the CSS, and click on a button to view the result.\r\nCSS References\r\n\r\nAt W3Schools you will find complete CSS references of all properties and selectors with syntax, examples, browser support, and more.'),
(3, 'JAVASCRIPTS\r\n', 'JavaScript Tutorial\r\n\r\nJavaScript is the programming language of HTML and the Web.\r\n\r\nJavaScript is easy to learn.\r\n\r\nThis tutorial will teach you JavaScript from basic to advanced.\r\n\r\nCSS References\r\n\r\nAt W3Schools you will find complete CSS references of all properties and selectors with syntax, examples, browser support, and more.'),
(4, 'SQL', 'SQL Tutorial\r\n\r\nSQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.\r\n\r\nSQL Data Types\r\nData types and ranges for Microsoft Access, MySQL and SQL Server.'),
(5, 'PHP', 'PHP 5 Tutorial\r\n\r\nPHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.\r\n\r\nPHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.\r\n\r\nEasy Learning with \"Show PHP\"\r\nOur \"Show PHP\" tool makes it easy to learn PHP, it shows both the PHP source code and the HTML output of the code.'),
(6, 'HTML Introduction', 'HTML Introduction\r\n\r\nWhat is HTML?\r\nHTML is the standard markup language for creating Web pages.\r\n\r\nHTML stands for Hyper Text Markup Language\r\nHTML describes the structure of Web pages using markup\r\nHTML elements are the building blocks of HTML pages\r\nHTML elements are represented by tags\r\nHTML tags label pieces of content such as \"heading\", \"paragraph\", \"table\", and so on\r\nBrowsers do not display the HTML tags, but use them to render the content of the page\r\n\r\nExample Explained\r\nThe <!DOCTYPE html> declaration defines this document to be HTML5\r\nThe <html> element is the root element of an HTML page\r\nThe <head> element contains meta information about the document\r\nThe <title> element specifies a title for the document\r\nThe <body> element contains the visible page content\r\nThe <h1> element defines a large heading\r\nThe <p> element defines a paragraph'),
(7, 'HTML Editors', 'HTML Editors\r\n\r\nWrite HTML Using Notepad or TextEdit\r\nWeb pages can be created and modified by using professional HTML editors.\r\n\r\nHowever, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).\r\n\r\nWe believe using a simple text editor is a good way to learn HTML.\r\n\r\nFollow the four steps below to create your first web page with Notepad or TextEdit.\r\n\r\n'),
(8, 'HTML Basic ', 'HTML Basic Examples\r\n\r\nDon\'t worry if these examples use tags you have not learned.\r\n\r\nYou will learn about them in the next chapters.\r\n\r\nHTML Documents\r\nAll HTML documents must start with a document type declaration: <!DOCTYPE html>.\r\n\r\nThe HTML document itself begins with <html> and ends with </html>.\r\n\r\nThe visible part of the HTML document is between <body> and </body>.\r\n\r\nHTML Headings\r\nHTML headings are defined with the <h1> to <h6> tags.\r\n\r\n<h1> defines the most important heading. <h6> defines the least important heading'),
(9, 'CSS Introduction', 'CSS Introduction\r\n\r\nWhat is CSS?\r\nCSS stands for Cascading Style Sheets\r\nCSS describes how HTML elements are to be displayed on screen, paper, or in other media\r\nCSS saves a lot of work. It can control the layout of multiple web pages all at once\r\nExternal stylesheets are stored in CSS files\r\n\r\nWhy Use CSS?\r\nCSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. '),
(10, 'CSS Syntax ', 'CSS Syntax and Selectors\r\nCSS Syntax\r\nA CSS rule-set consists of a selector and a declaration block:\r\n\r\nCSS selector\r\n\r\nThe selector points to the HTML element you want to style.\r\n\r\nThe declaration block contains one or more declarations separated by semicolons.\r\n\r\nEach declaration includes a CSS property name and a value, separated by a colon.\r\n\r\nA CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.\r\nCSS Selectors\r\nCSS selectors are used to \"find\" (or select) HTML elements based on their element name, id, class, attribute, and more.'),
(11, 'CSS How To', 'CSS How To...\r\nWhen a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.\r\n\r\nThree Ways to Insert CSS\r\nThere are three ways of inserting a style sheet:\r\n\r\nExternal style sheet\r\nInternal style sheet\r\nInline style\r\n\r\nExternal Style Sheet\r\nWith an external style sheet, you can change the look of an entire website by changing just one file!\r\n\r\n'),
(12, 'JS Introduction', 'JavaScript Introduction\r\nThis page contains some examples of what JavaScript can do.\r\n\r\nJavaScript Can Change HTML Content\r\nOne of many JavaScript HTML methods is getElementById().\r\n'),
(13, 'JS Where To\r\n', 'JavaScript Where To\r\n\r\nJavaScript Functions and Events\r\nA JavaScript function is a block of JavaScript code, that can be executed when \"called\" for.\r\n\r\nFor example, a function can be called when an event occurs, like when the user clicks a button.\r\n\r\nYou will learn much more about functions and events in later chapters.\r\n\r\n'),
(14, 'JS Output', 'JavaScript Output\r\n\r\nJavaScript Display Possibilities\r\nJavaScript can \"display\" data in different ways:\r\n\r\nWriting into an HTML element, using innerHTML.\r\nWriting into the HTML output using document.write().\r\nWriting into an alert box, using window.alert().\r\nWriting into the browser console, using console.log().\r\nUsing innerHTML\r\nTo access an HTML element, JavaScript can use the document.getElementById(id) method.'),
(15, 'SQL Tutorial', 'SQL Tutorial\r\n\r\nSQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.'),
(16, 'Introduction to SQL', 'Introduction to SQL\r\nSQL is a standard language for accessing and manipulating databases.\r\n\r\nWhat is SQL?\r\nSQL stands for Structured Query Language\r\nSQL lets you access and manipulate databases\r\nSQL is an ANSI (American National Standards Institute) standard\r\n\r\nUsing SQL in Your Web Site\r\nTo build a web site that shows data from a database, you will need:\r\n\r\nAn RDBMS database program (i.e. MS Access, SQL Server, MySQL)\r\nTo use a server-side scripting language, like PHP or ASP\r\nTo use SQL to get the data you want\r\nTo use HTML / CSS\r\n'),
(17, 'SQL Syntax', 'SQL Syntax\r\n\r\nDatabase Tables\r\nA database most often contains one or more tables. Each table is identified by a name (e.g. \"Customers\" or \"Orders\"). Tables contain records (rows) with data.\r\n\r\nIn this tutorial we will use the well-known Northwind sample database (included in MS Access and MS SQL Server).\r\n\r\nSQL Statements\r\nMost of the actions you need to perform on a database are done with SQL statements.'),
(18, 'PHP Intro', 'PHP 5 Introduction\r\n\r\nPHP scripts are executed on the server.\r\n\r\nWhat You Should Already Know\r\nBefore you continue you should have a basic understanding of the following:\r\n\r\nHTML\r\nCSS\r\nJavaScript\r\nIf you want to study these subjects first, find the tutorials on our Home page.\r\n\r\nWhat is PHP?\r\nPHP is an acronym for \"PHP: Hypertext Preprocessor\"\r\nPHP is a widely-used, open source scripting language\r\nPHP scripts are executed on the server\r\nPHP is free to download and use'),
(19, 'PHP Install', 'PHP 5 Installation\r\n\r\nWhat Do I Need?\r\nTo start using PHP, you can:\r\n\r\nFind a web host with PHP and MySQL support\r\nInstall a web server on your own PC, and then install PHP and MySQL\r\nUse a Web Host With PHP Support\r\nIf your server has activated support for PHP you do not need to do anything.\r\n\r\nJust create some .php files, place them in your web directory, and the server will automatically parse them for you.\r\n\r\nYou do not need to compile anything or install any extra tools.\r\n\r\nBecause PHP is free, most web hosts offer PHP support.'),
(20, 'PHP Syntax', 'PHP 5 Syntax\r\n\r\nA PHP script is executed on the server, and the plain HTML result is sent back to the browser.\r\n\r\nBasic PHP Syntax\r\nA PHP script can be placed anywhere in the document.\r\n\r\nA PHP script starts with <?php and ends with ?>\r\n\r\nThe default file extension for PHP files is \".php\".\r\n\r\nA PHP file normally contains HTML tags, and some PHP scripting code.\r\n\r\nBelow, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function \"echo\" to output the text \"Hello World!\" on a web page:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
