<?php

    class FormInfoClass {
        private $lastname;
        private $firstname;
        private $middleInitial;
        private $age;
        private $contact;
        private $email;
        private $address;

        public function setLastname($lastname) {
            $this->lastname = $lastname;
        }

        public function setFirstname($firstname) {
            $this->firstname = $firstname;
        }

        public function setMiddleInitial($middleInitial) {
            $this->middleInitial = $middleInitial;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function setContact($contact) {
            $this->contact = $contact;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function getFirstname() {
            return $this->firstname;
        }

        public function getMiddleInitial() {
            return $this->middleInitial;
        }

        public function getAge() {
            return $this->age;
        }

        public function getContact() {
            return $this->contact;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getAddress() {
            return $this->address;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
</head>
<body>
    <h1>Online Registration Form</h1>
    <form method="POST" action="index.php">
        <label for="lastname">Last Name *</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="firstname">First Name *</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="middleInitial">Middle Initial</label>
        <input type="text" id="middleInitial" name="middleInitial"><br>

        <label for="age">Age *</label>
        <input type="number" id="age" name="age" required><br>

        <label for="contact">Contact No. *</label>
        <input type="text" id="contact" name="contact" required><br>

        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">Address *</label>
        <input type="text" id="address" name="address" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'welcome.php';
}
?>