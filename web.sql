-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2023 lúc 08:21 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT '0',
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `init`, `createAt`, `updateAt`) VALUES
('admin', '$2y$10$16nKrw2Lk8TGRgEF0VYwqevMqG3JnEIkw3kmKqd2KDkvkxoskBiZu', '0', '2023-04-22 19:49:49', '2023-04-22 19:49:49'),
('ducnguyen', '$2y$10$7MwPTLycJRZNwFzHnHrYWO2VkFKfgYLKmQUIWBUMSlghO8hucC6jy', '0', '2023-04-22 19:50:28', '2023-04-22 19:50:28'),
('hoangphuc', '$2y$10$13d5OlDv5R74P6lemUMVJejsNjwq1IbuMqCR0LzlLn0KWKx5MnpWm', '0', '2023-04-22 19:50:10', '2023-04-22 19:50:10'),
('quangvinh', '$2y$10$ng45/YpuZVsHo5CnlEYazOsnCSpgvkJ552vFBKSwN4yB147/FAH0u', '0', '2023-04-22 19:49:59', '2023-04-22 19:49:59'),
('thaibinh', '$2y$10$r0MLe8ouBSK8u3Nn8tWwV.JMVM9GdktQS3Tleo5wv5uEJfiD2ALrq', '0', '2023-04-22 19:50:19', '2023-04-22 19:50:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `date`, `approved`, `content`, `news_id`, `user_id`, `parent`) VALUES
(35, '2023-04-23 02:09:04', 1, 'Thật hay !!', 8, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(36, '2023-04-23 02:09:55', 1, 'Thật tuyệt !! Bosch xứng đáng là nơi làm việc lý tưởng', 8, 'phuc.nguyen2003@hcmut.edu.vn', NULL),
(37, '2023-04-23 02:11:05', 1, 'Thực sự rất mong chờ !!', 7, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(38, '2023-04-23 02:11:19', 1, 'Tài năng của các kỹ sư quả là tuyệt vời', 6, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(39, '2023-04-23 02:11:57', 1, 'Mong Bosch sớm đến với Bách Khoa HCM', 7, 'phuc.nguyen2003@hcmut.edu.vn', NULL),
(40, '2023-04-23 02:12:24', 1, 'Rất đáng để mong đợi!!', 7, 'phuc.nguyen2003@hcmut.edu.vn', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `createAt`, `updateAt`) VALUES
(1, 'Chi nhánh TPHCM', '364 Đ. Cộng Hòa, Tân Bình, Thành phố Hồ Chí Minh', NULL, NULL),
(2, 'Chi nhánh Đà Nẵng', 'Tầng 3, Tòa nhà Indochina Riverside 74 Bạch Đằng, Đà Nẵng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `status`, `date`, `description`, `content`, `title`) VALUES
(3, 1, '2023-04-22 08:59:04', 'Bosch Việt Nam đạt chứng nhận Great Place to Work năm 2023 cho những nỗ lực không ngừng nghỉ trong việc xây dựng môi trường làm việc đáng tin cậy và chuyên nghiệp\r\n', 'Thành phố Hồ Chí Minh, Việt Nam – Bosch Việt Nam, nhà cung cấp dịch vụ và công nghệ hàng đầu thế giới, đã đạt được chứng nhận “Great Place to Work” năm 2023 cấp bởi Great Place to Work, cơ quan toàn cầu về đánh giá và công nhận văn hóa nơi làm việc. Đây là minh chứng cho cam kết của Bosch Việt Nam trong việc tạo ra một môi trường làm việc tích cực và gắn kết cho nhân viên.\r\n\r\n\r\nKết quả mà Bosch Việt Nam đạt được đánh giá dựa trên khảo sát từ 1.272 nhân viên với những yếu tố chính như: Tín nhiệm (Credibility), Tôn trọng (Respect), Công bằng (Fairness), Gắn bó (Camaraderie) và Tự hào (Pride). Khảo sát cho thấy 89% nhân viên đánh giá Bosch Việt Nam là một nơi tuyệt vời để làm việc, khẳng định nỗ lực của công ty trong việc thúc đẩy văn hóa làm việc tích cực.', 'Bosch Việt Nam đạt chứng nhận “Great Place to Work” năm 2023'),
(4, 1, '2023-04-22 09:05:07', 'Ông Vijay Ratnaparkhe được bổ nhiệm vị trí tân chủ tịch Bosch tại khu vực Đông Nam Á và giám đốc điều hành của Bosch Singapore. Ông đảm nhiệm trọng trách định hướng, thiết lập chiến lược tăng trưởng và hoạt động kinh doanh của tập đoàn Bosch trong khu vực Đông Nam Á', 'Singapore – Hiệu lực từ ngày 01 tháng 01 năm 2023, ông Vijay Ratnaparkhe chính thức đảm nhận cương vị tân chủ tịch Bosch tại khu vực Đông Nam Á và giám đốc điều hành của Bosch Singapore, kế nhiệm ông Martin Hayes sau khi ông Martin rời đi. Trên cương vị mới, ông Vijay chịu trách nhiệm về chiến lược định hướng, phát triển kinh doanh tổng thể bao gồm nhiều khu vực kinh doanh khác nhau của Bosch tại thị trường Đông Nam Á, với trụ sở chính tại Singapore.\r\n\r\nÔng Vijay đã có hơn 16 năm kinh nghiệm làm việc tại Tập đoàn Bosch ở nhiều đơn vị kinh doanh và bộ phận khác nhau. Gần đây nhất là từ tháng 9 năm 2019 đến tháng 12 năm 2022, ông đảm nhận vị trí Giám đốc Thông tin và chủ tịch Dịch vụ và Hệ thống Thông tin Toàn cầu của Tập đoàn Bosch tại Đức. Ông chịu trách nhiệm về tầm nhìn chiến lược và đổi mới, quản lý chất lượng, cơ sở hạ tầng và công nghệ vượt trội, v.v', 'Bosch bổ nhiệm tân chủ tịch điều hành khu vực Đông Nam Á'),
(5, 1, '2023-04-22 09:06:00', 'Công ty sẽ đẩy mạnh trọng tâm vào các hoạt động đổi mới sáng tạo trong việc nghiên cứu và phát triển;\r\nTriển khai kế hoạch mở rộng bằng việc thành lập chi nhánh Trung tâm mới tại Hà Nội, Việt Nam;', 'Tp.HCM, Ngày 04 tháng 01 năm 2022, Công ty Robert Bosch Engineering and Business Solutions Việt Nam (RBVH), hay còn gọi là Trung tâm Nghiên cứu & Phát triển Công nghệ và các giải pháp doanh nghiệp Bosch tại Việt Nam sẽ chính thức trở thành Bosch Global Software Technologies Vietnam - Công ty Công nghệ Phần mềm Toàn cầu Bosch (BGSV).', 'Trung tâm Nghiên cứu & Phát triển Công nghệ và các giải pháp doanh nghiệp Bosch tại Việt Nam chính thức đổi tên thành Công ty Công nghệ Phần mềm Toàn cầu Bosch'),
(6, 1, '2023-04-22 09:06:33', 'Thỏa thuận hợp tác nhằm đưa bí quyết công nghệ sử dụng AI và IoT nuôi trồng thủy sản vào giảng dạy\r\nCách tiếp cận ba mũi nhọn bao gồm các chương trình đào tạo đa cấp, các dự án nghiên cứu khoa học, cùng với các cơ hội thực tập và học bổng cho sinh viên.', 'Bạc Liêu, Việt Nam – Ngày 11/06/2022, Trường Đại học Bạc Liêu cùng với AquaEasy, một liên doanh thuộc grow – trung tâm ươm mầm sáng tạo nội bộ của Bosch, đã ký kết Biên bản Ghi nhớ thỏa thuận hợp tác, nhằm đưa bí quyết công nghệ trí tuệ nhân tạo (Artificial Intelligent – AI) và Internet vạn vật (Internet of Things – IoT) vào chương trình giảng dạy. Cụ thể bằng cách kết hợp kiến thức này vào một phần của giáo trình cho học sinh các ngành đào tạo nuôi trồng Thuỷ sản, Khoa Nông nghiệp của Trường Đại học Bạc Liêu. Đồng thời, sinh viên sẽ được trực tiếp tiếp nhận kiến thức từ các chuyên gia trong ngành của Bosch và AquaEasy, thông qua các hội nghị, hội thảo hàng năm về khoa học và công nghệ.', 'Bosch, AquaEasy thuộc trung tâm ươm mầm sáng tạo grow của Bosch, mang bí quyết nuôi trồng thủy sản đến Trường Đại học Bạc Liêu'),
(7, 1, '2023-04-22 09:06:58', 'Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab) cung cấp cho sinh viên cơ hội học tập và thực hành liên quan đến ngành công nghiệp ô tô\r\nĐội ngũ kỹ sư giàu kinh nghiệm từ Bosch hỗ trợ nhà trường đào tạo chuyên môn cho kỹ sư tương lai.\r\nHợp tác với các trung tâm giáo dục địa phương là cam kết liên tục của Bosch trong việc phát triển và ươm mầm tài năng trẻ..', 'TP.HCM – Bosch Việt Nam và Trường Đại học Sư pham Kỹ thuật TP.HCM (HCMUTE) đã thành công tổ chức Lễ khánh thành Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab). Phòng thí nghiệm được thành lập với mục đích cung cấp cho sinh viên Khoa Cơ khí động lực những kiến thức thực tế thông qua chương trình đào tạo thực hành, thiết kế và ứng dụng thiết bị vào thực tiễn.\r\n\r\nDự án Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab) do Bosch tài trợ ước tính trị giá 90.000 Euro (hơn 2.5 tỷ đồng), đáp ứng tính ứng dụng trong lĩnh vực nghiên cứu công nghệ di chuyển. Cơ sở mới này được trang bị 01 mô hình hộp số truyền động vô cấp CVT và 01 băng thử dây đai truyền động trong Hộp số truyền động vô cấp CVT, 01 phòng học thực hành và nghiên cứu chuyên sâu, cùng các thiết bị và máy móc hỗ trợ giảng dạy và đào tạo .', 'Bosch và Trường Đại học Sư phạm Kỹ thuật TP.HCM hợp tác xây dựng Phòng thí nghiệm Hộp số truyền động vô cấp CVT'),
(8, 1, '2023-04-22 09:07:28', 'Bosch nằm trong danh sách những môi trường làm việc tốt nhất trong ngành kỹ thuật, công nghệ cao và công nghệ thông tin ở năm thứ 7.\r\nTại Bosch, chúng tôi quan tâm đến con người, hoạt động kinh doanh và môi trường.', 'Thành phố Hồ Chí Minh, Việt Nam – Vào ngày 22/12/2021, Bosch Việt Nam được vinh danh trong “Top 100 Nơi làm việc tốt nhất Việt Nam” dựa trên kết quả bình chọn và khảo sát do Anphabe thực hiện. Giải thưởng này đã giúp công ty kéo dài chuỗi thành tích bảy năm liên tiếp lọt vào danh sách top 100 nơi làm việc hàng đầu trong nước. Trong suốt bảy năm qua, giới chuyên môn đã công nhận Bosch là một trong những công ty dẫn đầu ở cả ba lĩnh vực hoạt động: kỹ thuật, công nghệ cao và công nghệ thông tin. Năm 2021, Bosch Việt Nam xếp thứ 22 chung cuộc và vinh dự nhận được nhiều giải thưởng với những hạng mục tương ứng:\r\n\r\nHạng 1 toàn ngành Điện tử / Công nghệ cao / Thiết bị phụ trợ\r\nHạng 2 toàn ngành Kỹ thuật / Máy móc / Cơ khí Công nghiệp\r\nHạng 3 toàn Ngành Công nghệ thông tin / Phần mềm & Ứng dụng / Thương mại điện tử', 'Bosch được bình chọn Top 1 nơi làm việc tốt nhất ngành công nghệ cao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(7, 0, 'Bosch Automotive Aftermarket', 'Bosch giúp bạn luôn di động.', 'Bosch cung cấp nhiều phụ tùng thay thế khác nhau cho các cửa hàng phụ tùng aftermarket và cửa hàng sửa chữa - từ các bộ phận mới và đổi trả cho đến các giải pháp sửa chữa - cũng như các thiết bị của cửa hàng sửa chữa như phần mềm chẩn đoán và phần cứng. Với các khóa đào tạo nhân viên và các chương trình đối tác cho các cửa hàng sửa chữa, Bosch cung cấp các kiến thức và kỹ năng bảo dưỡng ô tô cho các kỹ thuật viên dịch vụ trên toàn thế giới. Do đó, các cửa hàng sửa chữa có thể kiểm tra và sửa chữa hiệu quả, an toàn và nhanh chóng hơn.', 'public/img/products/2023_04_24_08_02_30am.png'),
(8, 0, 'Trung tâm Dịch vụ Ô tô Bosch', 'Dịch vụ ô tô toàn cầu của Bosh', 'Tại hơn 17.000 trung tâm dịch vụ ô tô Bosch, chúng tôi đem đến dịch vụ chất lượng hàng đầu, thế mạnh chuyên môn và phụ tùng ô tô đạt chuẩn chất lượng. Từ công nghệ cơ khí, điện tử cho đến công nghệ diesel – các chuyên gia của chúng tôi luôn làm việc với kỹ thuật kiểm tra tiên tiến.', 'public/img/products/2023_04_24_08_05_00pm.png'),
(9, 0, 'Xe hai bánh và xe mô tô thể thao', 'Xe hai bánh và xe mô tô thể thao của Bosch', 'Năng động, an toàn, mang tính kết nối và có thể tùy chỉnh: Đây thường là những yêu cầu chủ yếu khi nhắc đến trải nghiệm lái xe tuyệt vời nhất với xe hai bánh và xe mô tô thể thao. Với công nghệ tiên tiến và phần mềm thông minh, Bosch cung cấp các giải pháp kết nối, hỗ trợ người lái xe, hệ thống truyền động và giải pháp vận chuyển được cá nhân hóa. Tất cả đều đến từ một nguồn duy nhất.', 'public/img/products/2023_04_24_08_05_59pm.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('kquangvinhn@gmail.com', 'public/img/user/default.png', 'Đặng ', 'Quang Vinh', 1, 20, '0123456789', '2023-04-23 01:14:39', '2023-04-23 01:14:39', '$2y$10$YniSP1jg2X3kdq1DV7OmTOBhg6lIXpVfeU5lqU5xvLbLYwjY92Cx2'),
('phuc.nguyen2003@hcmut.edu.vn', 'public/img/user/2023_04_22_08_10_22pm.', 'Nguyễn Phan Hoàng', 'Phúc', 0, 20, '0369322789', '2023-04-23 01:10:22', '2023-04-23 01:10:22', '$2y$10$1T8YfBfTv6dNwyT1dh2bC.wxO5GanBRb3vcYNwL0XTvNbCn5LH7Ju'),
('vinh.dangquang03@hcmut.edu.vn', 'public/img/user/2023_04_22_08_05_40pm.jpg', 'Đặng Quang', 'Vinh', 1, 20, '0704833644', '2023-04-22 20:23:23', '2023-04-23 01:05:40', '$2y$10$3jGkRsV5PvDFEbh1488AguInIHWg5lxp7S49LKIXYIvSxvE0zDpCu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent` (`parent`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
