<?php
    class Category{
        public function create($DATA)
        {
            $DB = Database::getInstance();

            $arr['category'] = ucwords($DATA->data);
            if ((!isset($_SESSION['error']) || $_SESSION['error'] == "") && $arr['category'] !== "") {
                $query = "INSERT INTO categories (name_category) VALUES (:category)";
                $check = $DB->write($query,$arr);
                if ($check) {
                    return true;
                }
            }
            return false;
        }
        public function edit($DATA)
        {
            # code...
        }
        public function delete($DATA)
        {
            # code...
        }
        public function get_all()
        {
            $DB = Database::newInstance();
            return $DB->read("SELECT * FROM categories ORDER BY id_categories desc");
        }
        public function make_table($cats)
        {
            $result = "";
            if (is_array($cats)) {
                foreach ($cats as $cats_row) {
                    $result .= "<tr>";
                        $result .= '
                        <td><a href="basic_table.html#">'.$cats_row->name_category.'</a></td>
                        <td><span class="label label-info label-mini">'.$cats_row->disabled.'</span></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>                            </td>
                        ';
                    $result .= "</tr>";
                }
            }
            return $result;
        }
    }
?>