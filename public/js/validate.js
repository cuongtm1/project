$(document).ready(function() {
	$("#addParentForm").validate({
		rules: {
			phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			email: {
				required: true,
				email: true
			},
			password: "required",
			repassword: {
				required: true,
				equalTo: "#password",
			},
			father_name: "required",
			mother_name: "required",
			father_phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			mother_phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			father_job: "required",
			mother_job: "required",
			address: "required",
		},
		messages: {
			phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			email: {
				required: 'Chưa nhập email',
				email: 'Sai định dạng email'
			},
			password: "Chưa nhập mật khẩu",
			repassword: {
				required: "Chưa nhập mật khẩu",
				equalTo: "Mật khẩu không khớp",
			},
			father_name: "Chưa nhập tên bố",
			mother_name: "Chưa nhập tên bố",
			father_phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			mother_phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			father_job: "Không được bỏ trống",
			mother_job:"Không được bỏ trống",
			address:"Không được bỏ trống",
		}
	});
	$("#formLogin").validate({
		rules: {
			phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
		},
		messages: {
			phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
		}
	});
});