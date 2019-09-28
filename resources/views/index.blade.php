<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="text" placeholder="Nhập email cần kiểm tra" name="email">
        <input type="submit" value="Check">
    </form>
    @if(request('email'))
        Kết quả: {{$check?'Đúng định dạng email! ' : 'Sai định dạng email! '}}
    @endif
</div>
