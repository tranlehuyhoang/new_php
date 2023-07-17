<?php
include_once __DIR__ . '/../lib/database.php';
include_once __DIR__ . '/../helpers/format.php';
?>

<?php
class user
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_user($data)
    {
        $userroles = mysqli_real_escape_string($this->db->link, $data['userroles']);
        $username = mysqli_real_escape_string($this->db->link, $data['username']);
        $useremail = mysqli_real_escape_string($this->db->link, $data['useremail']);
        $userpass = mysqli_real_escape_string($this->db->link, md5($data['userpass']));

        if ($userroles == '' || $username == '' || $useremail == '' || $userpass == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Code must not be empty</div>";
            return $arlet;
        } else {
            $check_register = "SELECT *
            FROM tbl_users WHERE useremail = '$useremail'  LIMIT 1";
            $check = $this->db->select($check_register);
            if (!isset($check)) {
                $arlet = "<div class='alert alert-danger' role='alert'>Email exit</div>";
                return $arlet;
            } else {
                $query = "INSERT INTO tbl_users(userroles,username,useremail,userpass) VALUES ('$userroles','$username','$useremail','$userpass')";
                $result = $this->db->insert($query);
                if ($result) {
                    $arlet = "<div class='alert alert-success' role='alert'>Insert Code Successfully</div>";
                    return $arlet;
                } else {
                    $arlet = "<div class='alert alert-danger' role='alert'>Insert Code Successfully</div>";
                    return $arlet;
                }
            }
        }
    }

    public function show_user()
    {
        $query = "SELECT * FROM tbl_users order by userid desc";
        $result = $this->db->select($query);

        return $result;
    }


    public function update_user($data, $id)
    {
        $userroles = mysqli_real_escape_string($this->db->link, $data['userroles']);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if ($userroles == '') {
            $arlet = "<div class='alert alert-danger' role='alert'>Category name empty</div>";
            return $arlet;
        } else {
            $query = "UPDATE tbl_users SET userroles = '$userroles'  WHERE userid = '$id'";
            $result = $this->db->update($query);
            if ($result) {
                $arlet = "<div class='alert alert-success' role='alert'>Update Category Successfully</div>";
                return $arlet;
            } else {
                $arlet = "<div class='alert alert-danger' role='alert'>Error</div>";

                return $arlet;
            }
        }
    }
    public function delete_user($id)
    {
        $id = mysqli_real_escape_string($this->db->link, $id);
        $query = "DELETE FROM tbl_users WHERE userid = '$id'";
        $result = $this->db->delete($query);


        if ($result) {
            $arlet = "<div class='alert alert-success' role='alert'>Delete Code Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Delete Code Successfully</div>";

            return $arlet;
        }
    }
    public function getuserbyid($id)

    {
        $query = "SELECT * FROM tbl_users WHERE userid = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
}
