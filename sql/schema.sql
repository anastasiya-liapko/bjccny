CREATE DATABASE `bjccny`
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

    USE `bjccny`;

CREATE TABLE `categories` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `parent_id` INT(11) NOT NULL,
  `name` VARCHAR(30) NOT NULL
);

CREATE TABLE `posts` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `category_id` INT(11) NOT NULL,
  `date` DATE,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `status` TINYINT DEFAULT 1,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE `tags` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `post_id` INT(11) NOT NULL,
  `name` VARCHAR(30) NOT NULL,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE `images` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `post_id` INT(11) NOT NULL,
  `image` VARCHAR(255),
  `image_2x` VARCHAR(255),
  `image_3x` VARCHAR(255),
  `preview_image` VARCHAR(255),
  `preview_image_2x` VARCHAR(255),
  `preview_image_3x` VARCHAR(255),
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE `gallery_images` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `post_id` INT(11) NOT NULL,
  `gallery_image_1` VARCHAR(255),
  `gallery_image_1_2x` VARCHAR(255),
  `gallery_image_1_3x` VARCHAR(255),
  `gallery_image_2` VARCHAR(255),
  `gallery_image_2_2x` VARCHAR(255),
  `gallery_image_2_3x` VARCHAR(255),
  `gallery_image_3` VARCHAR(255),
  `gallery_image_3_2x` VARCHAR(255),
  `gallery_image_3_3x` VARCHAR(255),
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE `content_text` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `post_id` INT(11) NOT NULL,
  `title_1` VARCHAR(255),
  `title_2` VARCHAR(255),
  `paragraph_1` TEXT,
  `paragraph_2` TEXT,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE `donation_data` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `post_id` INT(11) NOT NULL,
  `collected` INT(11),
  `target` INT(11),
  `day_left` INT(11),
  `start` DATE,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);



