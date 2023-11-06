<?php
class UserForm {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function saveUser($name, $email, $gender, $city) {
        $this->db->insertUser($name, $email, $gender, $city);
        return null; // No errors, data saved successfully
    }

    public function displayUsers() {
        $users = $this->db->getUsers();

        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>";

        foreach ($users as $user) {
            echo "<tr>
                    <td>{$user['name']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['gender']}</td>
                    <td>{$user['city']}</td>
                </tr>";
            // echo "<b> Name :</b> ".$user['name'].' <b> Email : </b> '.$user['email'].'<b> Gender : </b> '.$user['gender'].' <b> City:</b> '.$user['city']; echo '<br>';
        }

        echo "</table>";
    }
}
?>
