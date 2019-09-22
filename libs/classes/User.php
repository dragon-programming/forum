<?php
// namespace libs\classes;

class User
{
    /**
     * @var int User's ID.
     */
    public $id;

    /**
     * @var string Username.
     */
    public $username;

    /**
     * @var string Password.
     */
    public $password;

    /**
     * @var string Email.
     */
    public $email;

    /**
     * @var string User's Gender.
     */
    public $gender;

    /**
     * @var string The User's Role.
     */
    public $user_role;

    /**
     * @var int The User's Account Status.
     */
    public $acc_status;

    /**
     * @var string User reset password security quesion.
     */
    public $reset_password_q;

    /**
     * @var string User reset password security answer.
     */
    public $reset_password_a;

    /**
     * @var string User reset password token.
     */
    public $reset_token;
    
    /**
     * @var int User account activation key.
     */
    public $activation_key;

    /**
     * @var string User account registeration date.
     */
    public $reg_on;

    function __construct(int $id = null, string $username = null, string $password = null, string $email = null, string $gender = null, string $user_role = null, int $acc_status = null, string $reset_password_q = null, string $reset_password_a = null, string $reset_token = null, int $activation_key = null, string $reg_on = null)
    {
        // Store data if not empty.
        if (!empty($id)) {
            $this->id = (int) clean_data($id);
        }
        if (!empty($username)) {
            $this->username = (string) clean_data($username);
        }
        if (!empty($password)) {
            $this->password = (string) clean_data($password);
        }
        if (!empty($email)) {
            $this->email = (string) clean_data($email);
        }
        if (!empty($gender)) {
            $this->gender = (string) clean_data($gender);
        }
        if (!empty($user_role)) {
            $this->user_role = (string) clean_data($user_role);
        }
        if (!empty($acc_status)) {
            $this->acc_status = (int) clean_data($acc_status);
        }
        if (!empty($reset_password_q)) {
            $this->reset_password_q = (string) clean_data($reset_password_q);
        }
        if (!empty($reset_password_a)) {
            $this->reset_password_a = (string) clean_data($reset_password_a);
        }
        if (!empty($reset_token)) {
            $this->reset_token = (string) clean_data($reset_token);
        }
        if (!empty($activation_key)) {
            $this->activation_key = (string) clean_data($activation_key);
        }
        if (!empty($reg_on)) {
            $this->$reg_on = (string) clean_data($reg_on);
        }
    }

    /**
     * Get all users.
     * 
     * @return 
     */
    public function get_users()
    {
        // Include our connection file.
        require 'libs/conn.php';

        // Prepare an sql statement.
        $stmt = $conn->prepare('SELECT * FROM dgn_users');

        // Execute query.
        if ($stmt->execute()) {
            // Store result.
            $stmt->store_result();

            $stmt->bind_result($id, $username, $password, $email, $gender, $user_role, $acc_status, $reset_password_q, $reset_password_a, $reset_token, $activation_key, $reg_on);

            while ($stmt->fetch()) {
                ?> 
                <pre>
                    <?= var_dump($user) ?>
                </pre>

            <?php    
            }
            
        }
    }
}