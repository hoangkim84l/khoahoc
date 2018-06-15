# new-project-1-cakephp
Demo code php - tập làm quen với code php
1. Up code lên git
bạn phải biết mình đang ở nhánh nào của git mới có thể upload code lên được câu lệnh kiểm tra nhánh như sao
==> muốn tạo 1 nhánh mới (git checkout -b tennhanh)
==> đã có sắn 1 nhánh trên git bạn chỉ cần trỏ tới nhánh đó câu lênh : git checkout tên nhánh
==> đã có nhánh trên git bạn chỉ cần up code theo hướng dẫn sao

b1. git add -A
b2. git status  (xem lại những thay đổi trong code)
b3. git commit -m "viết ra những gì đã làm vs lần up code này"
b4. girt push origin delevep (develop là tên nhánh trên git cũng có thể là master)

2. Nếu có người khác push code lên git bạn lấy code mới nhất trên git về bằng cách
==> git pull origin tên nhánh

3. Nếu bạn đã có thay đổi code trong máy bạn và khi pull code mới về bị lổi thì giải quyết như sao

b1. git add -A
b2. git commit -m "mô tả thay đổi"
b3. git pull origin tên nhánh
=> nếu bạn đã pull code mới về và muốn push code của mình lên thì chỉ việc : git push origin tên nhánh