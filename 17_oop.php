<?php

class User {
    public $email;
    public $name;
    public $password;
    private $var1;
    // available in this class an the child classes
    protected $var2;

    public function __construct($email, $name, $password) {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function set_password($password) {
        $this->password = $password;
    }

    function get_name() {
        return $this->name;
    }

    function get_email() {
        return $this->email;
    }

    function get_password() {
        return $this->password;
    }
}
// Instantiate a user object
$user1 = new User('Brad', 'brad@example.com', '$asdawd');

$user1->set_name('Brad');
$user1->set_email('brad@example.com');
$user1->set_password('é$asd123');

var_dump($user1);

echo $user1->name;

class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }


    public function get_title() {
        return $this->title;
    }
}

echo '<br />';

$employee1 = new Employee('Sara', 'sara@gmail.com', '$asd', 'Manager');
echo $employee1->get_title();

?>