<?php
    class Recipe {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // get all jobs
        public function getAllRecipes(){
            $this->db->query("SELECT recipes.*, categories.name FROM recipes 
            INNER JOIN categories 
            ON recipes.category_id = categories.id
            ORDER BY post_date DESC
            "); 
            // the resultSet function from the Database
            $results = $this->db->resultSet();

            return $results;
        }

        public function getAllCategories(){
            $this->db->query("SELECT * from categories");

            $results = $this->db->resultSet();
            return $results; 
        }

        public function getByCategory($category){
            $this->db->query("SELECT recipes.*, categories.name FROM recipes 
            INNER JOIN categories 
            ON recipes.category_id = categories.id
            WHERE recipes.category_id = $category
            ORDER BY post_date DESC
            "); 

            $results = $this->db->resultSet();
            return $results; 
        }

        // GET one category 
        public function getCategory($category){
            $this->db->query("SELECT * from categories WHERE id = :category_id");

            $this->db->bind(':category_id', $category);


            $result = $this->db->single();
            return $result; 
        }

        // Get one recipe

        public function getRecipe($recipe_id){
            $this->db->query("SELECT * FROM recipes WHERE id = :recipe_id");

            $this->db->bind(':recipe_id', $recipe_id);
            $result = $this->db->single();
            return $result; 
        }

        public function create($data){
            $this->db->query("INSERT INTO recipes (category_id, ingredients, 
            recipe_title, description, instructions) VALUES (:category_id, :ingredients, 
            :recipe_title, :description, :instructions)");

            // bind data 
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':ingredients', $data['ingredients']);
            $this->db->bind(':recipe_title', $data['recipe_title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':instructions', $data['instructions']);

            // execute
            if($this->db->execute()){
                return true; 
            } else {
                return false; 
            }
            
        }

        public function delete($del_id){
            $this->db->query("DELETE FROM recipes WHERE id = $del_id");

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function update($id, $data){
            $this->db->query("UPDATE recipes 
                SET 
                category_id = :category_id,
                ingredients = :ingredients, 
                recipe_title = :recipe_title, 
                description = :description, 
                instructions = :instructions
                WHERE id = $id");

            // bind data 
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':ingredients', $data['ingredients']);
            $this->db->bind(':recipe_title', $data['recipe_title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':instructions', $data['instructions']);

            // execute
            if($this->db->execute()){
                return true; 
            } else {
                return false; 
            }
        }
}