<?php
namespace App\Models;

use CodeIgniter\Model;

class post extends Model
{
    public function get_all(){
        $result = $this->db->query("
            SELECT *
            FROM `post_categories` 
            LEFT JOIN `posts` ON `post_categories`.`post_id` = `posts`.`id`
            LEFT JOIN `categories` ON `categories`.`id` = `post_categories`.`category_id` AND `categories`.`deleted_at` = '0000-00-00 00:00:00'
            ")->getResult();
            $posts = array();
            $i = 0;
            foreach ($result as $row) {
                $post_id = $row->post_id;
                $category_id = $row->category_id;
                $post_title = $row->title;
                $post_content = $row->content;
                $post_gender = $row->gender;
                $categories = $row->name;

                if (!isset($posts[$i])) {
                    // If this is a new brand, create a new array for it
                    $posts[$i] = array(
                        'post_id' => $post_id,
                        'category_id' => $category_id,
                        'title' => $post_title,
                        'content' => $post_content,
                        'gender' => $post_gender,

                        'categories' => array()
                    );
                }
                
                // Add the hardware type to the current brand's array
                $posts[$i]['categories'][] = $categories;
                $i++;
            }
                return $posts;
    }

    public function get_categories(){
        return $this->db->query("SELECT * FROM `categories` WHERE `deleted_at` = '0000-00-00 00:00:00'")->getResult();
    }

    public function add_save($title, $categories, $content){
        $this->db->query("INSERT INTO `posts` (`title`, `content`) VALUES(?,?)",array($title, $content));
        $insert_id = $this->db->insertID();
        foreach($categories as $category){
            $this->db->query("INSERT INTO `post_categories` (`post_id`, `category_id`, `created_at`) VALUES(?,?,NOW())", array($insert_id, $category));
        }
    }
}