<h3>Xác thực tài khoản</h3>
<p>Xin chào: {{ $data['fullname']}}</p>
<br>
<p>Cảm ơn bạn đã đăng ký tài khoản với cửa hàng chúng tôi</p>
<p>Hãy click vào link bên dưới để xác thực tài khoản</p>
<br>
<a href="http://beauty.test/email/verifyUser?hashCode={{ $data['verification_code'] }}">Xác thực</a>
<br>
<p>Cám ơn !!!</p>
<br>
<p>BEAUTY-STORE</p>
