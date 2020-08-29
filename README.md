
# [Repo3] - Basic PHP CRUD (OOP)
![enter image description here](https://i.imgur.com/YMHvuUK.jpg)

*ตัวอย่าง CRUD ด้วยภาษา PHP (OOP : Object Oriented Programming )*
## Repo นี้มีอะไรบ้าง?
> ในส่วนของ PHP มีการเชื่อต่อฐานข้อมูล การสร้างclass function มาใช้งาน. ในส่วนของ UI ใช้ `Bootstrap v5` มาใช้ในรูปแบบของฟอร์มกรอกข้อมูล ตารางแสดงข้อมูล ปุ่มต่างๆ

## CRUD มีอะไรบ้าง?
 - Create
 - Read
 - Update
 - Delete

### ตัวอย่าง class function ใน PHP 
```php
	public function fetchOne($id){
		$query = mysqli_query($this->dbcon, "SELECT * FROM tbl_user WHERE m_id = '$id' ");
		return $query;
	}
```
