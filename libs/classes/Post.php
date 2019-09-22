<?php
// namespace libs\classes;

class Post
{
    /**
     * @var int Post ID.
     */
    public $id;

    /**
     * @var string Post Content.
     */
    public $content;

    /**
     * @var string Open Post to Comments.
     */
    public $open_to_comments;

    /**
     * @var int Authors profile_pic.
     */
    public $profile_pic;

    /**
     * @var int Post author.
     */
    public $posted_by;

    /**
     * @var string When the post was made.
     */
    public $posted_on;

    function __construct(int $id = null, string $content = null, int $open_to_comments = null, int $profile_pic = null, $posted_by = null, string $posted_on = null)
    {
        // Store data if set.
        if (!empty($id)) {
            $this->id = (int) clean_data($id);
        }
        if (!empty($content)) {
            $this->content = (string) clean_data($content);
        }
        if (!empty($open_to_comments)) {
            $this->open_to_comments = (int) clean_data($open_to_comments);
        }
        if (!empty($profile_pic)) {
            $this->profile_pic = (int) clean_data($profile_pic);
        }
        if (!empty($posted_by)) {
            $this->posted_by = (int) clean_data($posted_by);
        }
        if (!empty($posted_on)) {
            $this->posted_on = (string) clean_data($posted_on);
        }
    }

    /**
     * Set the post content.
     */
    public function set_content(string $content): void
    {
        $this->content = (string) clean_data($content);
    }

    /**
     * Set the post author.
     */
    public function set_author(int $author): void
    {
        $this->posted_by = (int) clean_data($author);
    }

    /**
     * Creates a Post.
     * 
     * @param string The content of the post.
     * @param int The post Author.
     * 
     * @return bool False or true if the post was created successfully.
     */
    public function make_post(): bool
    {
        // Include our connection file.
        require 'libs/conn.php';

        // Check if required data is set.
        if (empty($this->content) && empty($this->posted_by)) {
            throw new Exception("Trying to create a post that doesn't has it's content or author set", 1);
            exit;
        }
        
        // Prepare an SQL statement.
        $stmt = $conn->prepare('INSERT INTO dgn_posts(content, posted_by) values(?, ?)');

        // Binde parameters.
        $stmt->bind_param('ss', $this->content, $this->posted_by);

        // Execute query.
        if ($stmt->execute()) {
            return true;
        }

        // Close connection.
        $conn->close();
        
        // Close statement.
        $stmt->close();

        return false;
    }

    public function get_posts()
    {
        // Include our connection file.
        require 'libs/conn.php';

        // Prepare an SQL statement.
        $stmt = $conn->prepare('SELECT * FROM dgn_posts');

        // Instantiate an empty array.
        $data = [];
        $posts = [];
        // Execute query.
        if ($stmt->execute()) {

            // Bind result values
            $stmt->bind_result($post['id'], $post['content'], $post['open_to_comments'], $post['profile_pic'], $post['author'], $post['posted_on']);


            while ($stmt->fetch()) {
                
                // $post_obj = new Post($post['id'], $post['content'], $post['open_to_comments'], $post['profile_pic'], $post['author'], $post['posted_on']);

                $post_obj = new Post($post['id'], $post['content'], $post['open_to_comments'], $post['profile_pic'], $post['author'], $post['posted_on']);

                // Create an multidimensional array.
                array_push($posts, $post_obj);
            }
        }

        // Store result.
        $stmt->store_result();

        $num_of_rows = [
            'num_of_rows' => $stmt->num_rows
        ];

        // Close connection.
        $conn->close();
        
        // Close statement.
        $stmt->close();

        // Append number of rows to the data.
        return $posts;
    }

}