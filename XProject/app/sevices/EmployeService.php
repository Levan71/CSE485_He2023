<?php  

include "app/models/Employe.php";
include "app/config/DBConnection.php";

class EmployeService{

    public function getAll(){
       
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM employees";
//            $sql = "SELECT username FROM users WHERE email=:e AND password=:p";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->execute(); //Thực thi đi >>> Nếu có kết quả trả về, nó sẽ lưu vào #stmt
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //            $result = $stmt->fetch(); >> Chỉ lấy ra 1 bản ghi mỗi lần chạy
            $result = $stmt->fetchAll(); //>> Lấy ra tất cả >>> Mảng các Mảng
            //            Chuyển đổi Bản ghi (Mảng thông thường) sang Đối tượng: Post

            $employees = [];
            foreach($employees as $row){
                // //  echo $row['id'];
                // $employe = new Employe();
                // $employe->setId($row['id']);
                // $employe->setName($row['name']);
                // $employe->setAddress($row['address']);
                // $employe->setSalary($row['salary']);
                // array_push($employees, $employe);
            }
            return $employees;
        } catch(PDOException $e) {
            return null;
        }
    }
}
?> 