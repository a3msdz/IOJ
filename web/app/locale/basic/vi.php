<?php
return [
	'login' => 'Đăng nhập',
	'register' => 'Đăng ký',
	'logout' => 'Đăng xuất',
	'my profile' => 'Hồ sơ',
	'private message' => 'Tin nhắn',
	'system message' => 'Tin nhắn hệ thống',
	'system manage' => 'Quản trị hệ thống',
	'contests' => 'Cuộc thi',
	'problems' => 'Bài toán',
	'submissions' => 'Bài nộp',
	'hacks' => 'Hack!',
	'blogs' => 'Blog',
	'announcements' => 'Thông báo',
	'all the announcements' => 'Tất cả thông báo…',
	'help' => 'Trợ giúp',
	'search' => 'Tìm kiếm',
	'top rated - all users' => 'Xếp hạng - Tất cả',
	'top rated - active users' => 'Xếp hạng - Rated',
	'top rated > all users' => 'Xếp hạng <span class="glyphicon glyphicon-chevron-right"></span> Tất cả',
	'top rated > active users' => 'Xếp hạng <span class="glyphicon glyphicon-chevron-right"></span> Rated',
	'username' => 'Tên đăng nhập',
	'password' => 'Mật khẩu',
	'new password' => 'Mật khẩu mới',
	'email' => 'Email',
	'QQ' => 'Facebook',
	'sex' => 'Giới tính',
	'motto' => 'Châm ngôn',
	'rating' => 'Xếp hạng',
	'view all' => 'Xem tất cả',
	'appraisal' => 'Đánh giá',
	'submit' => 'Gửi',
	'browse' => 'Duyệt',
	'score range' => 'Khoảng điểm',
	'details' => 'Chi tiết',
	'hours' => function($h) {
		return "$h ".($h <= 1 ? 'giờ' : 'giờ');
	},
	'title' => 'Tiêu đề',
	'content' => 'Nội dung',
	'time' => 'Thời gian',
	'none' => 'Không có',
	'user profile' => 'Hồ sơ người dùng',
	'send private message' => 'Gửi tin nhắn',
	'modify my profile' => 'Chỉnh sửa hồ sơ',
	'visit his blog' => function($name) {
		return "Xem blog của $name";
	},
	'rating changes' => 'Thay đổi xếp hạng',
	'accepted problems' => 'Các bài đã AC',
	'n problems in total' => function($n) {
		return "$n ".($n <= 1 ? 'bài' : 'bài');
	},
	'please enter your password for authorization' => 'Vui lòng nhập mật khẩu để xác nhận',
	'please enter your new profile' => 'Nhập hồ sơ mới của bạn',
	'leave it blank if you do not want to change the password' => 'Để trống nếu không muốn đổi mật khẩu',
	'change avatar help' => 'Muốn đổi ảnh đại diện? Xem tại <a href="/faq">Trợ giúp</a>',
	'enter your username' => 'Nhập tên đăng nhập',
	'enter your email' => 'Nhập email',
	'enter your password' => 'Nhập mật khẩu',
	're-enter your password' => 'Nhập lại mật khẩu',
	'enter your new password' => 'Nhập mật khẩu mới',
	're-enter your new password' => 'Nhập lại mật khẩu mới',
	'enter your QQ' => 'Nhập Facebook',
	'refuse to answer' => 'Không muốn trả lời',
	'male' => 'Nam',
	'female' => 'Nữ',

	'active rule' => function($m) {
		if (is_numeric($m)) {
			if ($m % 12 == 0) {
				$m /= 12;
				$m = $m <= 1 ? "{$m} năm" : "{$m} năm";
			} else {
				$m = $m <= 1 ? "{$m} tháng" : "{$m} tháng";
			}
		} else {
			$m = "{$m} tháng";
		}
		return "Trong các cuộc thi gần nhất và tất cả các cuộc thi được tổ chức trong vòng $m trước đó, nếu người dùng tham gia bất kỳ cuộc nào thì được coi là Rated.";
	}
];
