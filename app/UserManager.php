<?php
include ('UserManagerDB.php');
include ('User.php');

class UserManager {
    public static function register( $email, $password) {
        $id = UserManagerDB::insert(array( $email, $password));
        $row = UserManagerDB::get($id);
        $user = new User($row['id'], $row['email']);
        return $user;
    }

    public static function list() {
        UserManagerDB::all();
    }

    public static function detail($pk) {
        UserManagerDB::get($pk);
    }

    public static function update() {

    }

    public static function delete() {

    }

    public static function login($email, $password) {
        $user = UserManagerDB::filter('email', $email);
        if ($user)
            return $user['password'] == $password;
        else return 2;
    }

    public static function get_all_emails() {
        $subscribed = UserManagerDB::filter('subscribe', 1);
        return $subscribed;
    }

    public static function get_by_email($email) {
        $row = UserManagerDB::filter('email', $email);
        $user = new User($row['id'], $row['email']);
        return $user;
    }

    public static function unsubscribe($pk) {
        UserManagerDB::update_one("subscribe", 0, $pk);
    }
}