<?php

class CommonModel extends CI_Model {
    /* 1. 
      ADD RECORD
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->add('default','messages', $post);
     */

    public function add($database = NULL, $tbl = NULL, $record = NULL) {
        if (!empty($database) && !empty($tbl) && !empty($record)) {
            $common = $this->load->database($database, TRUE);
            $common->insert($tbl, $record);
            return $common->insert_id();
        } else {
            return FALSE;
        }
    }

    /* 2. 
      MULTIPLE ADD RECORDS
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->multipleAdd('default','messages', $post);
     */

    public function multipleAdd($database = NULL, $tbl = NULL, $records = NULL) {
        $records = array_values($records);
        if (!empty($database) && !empty($tbl) && !empty($records)) {
            $common = $this->load->database($database, TRUE);
            $res = $common->insert_batch($tbl, $records);
            return $res;
        } else {
            return FALSE;
        }
    }

    /*
     * 3. ADD/EDIT SINGLES COL RECORD 
     */

    public function addEditSinglesCol($database = NULL, $tbl = NULL, $record = NULL, $col = NULL, $value = NULL) {
        if (!empty($database) && !empty($tbl) && !empty($record)) {
            $common = $this->load->database($database, TRUE);
            $sql = $common->insert_string($tbl, $record) . ' ON DUPLICATE KEY UPDATE `' . $col . '`=' . $value . '';
            $common->query($sql);
            return $common->insert_id();
        } else {
            return FALSE;
        }
    }

    /* 4. 
      EDIT RECORD
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->edit('default','messages', $post, array('page_name' => $post['page_name']));
     */

    public function edit($database = NULL, $tbl = NULL, $record = NULL, $cond = NULL, $doNotEscape = FALSE) {
        if (!empty($database) && !empty($tbl) && !empty($record) && !empty($cond)) {
            $common = $this->load->database($database, TRUE);
            if ($doNotEscape) {
                foreach ($record as $key => $value) {
                    $common->set($key, $value, FALSE);
                }
                $common->where($cond);
                $res = $common->update($tbl);
            } else {
                $res = $common->update($tbl, $record, $cond);
            }
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 5. 
      MULTIPLE EDIT RECORDS
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function multipleEdit($database = NULL, $tbl = NULL, $record = NULL, $col = NULL) {
        if (!empty($database) && !empty($tbl) && !empty($record)) {
            $common = $this->load->database($database, TRUE);
            $res = $common->update_batch($tbl, $record, $col);
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 6. 
      HARD DELETE RECORD
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->delete('default','oauth_token', array('ppm_id' => $post['user_id']));
     */

    public function delete($database = NULL, $tbl = NULL, $cond = NULL) {
        if (!empty($database) && !empty($tbl) && !empty($cond)) {
            $common = $this->load->database($database, TRUE);
            $common->where($cond);
            $res = $common->delete($tbl);
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 7. 
      HARD DELETE RECORDS
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function multipleDelete($database = NULL, $tbl = NULL, $column = NULL, $value = NULL) {
        if (!empty($database) && !empty($tbl) && !empty($column) && !empty($value)) {
            $common = $this->load->database($database, TRUE);
            $common->where_in($column, $value);
            $res = $common->delete($tbl);
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 8. 
      GET RECORD
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->getRow('default','messages', array('page_name' => $post['page_name']), 'page_name');
     */

    public function getRow($database = NULL, $tbl = NULL, $cond = NULL, $cols = NULL, $order_col = NULL, $order_by = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($order_col) && !empty($order_by)) {
                $common->order_by($order_col, $order_by);
            }
            if (!empty($cond)) {
                $res = $common->get_where($tbl, $cond)->row_array();
            } else {
                $res = $common->get($tbl)->row_array();
            }
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 9. 
      GET RECORDS
      LOAD MODEL : $this->load->model('CommonModel');
      EXAMPLE : $this->CommonModel->getRecords('default','messages', array());
     */

    public function getRecords($database = NULL, $tbl = NULL, $cond = NULL, $cols = NULL, $limit = NULL, $order_col = NULL, $order_by = NULL, $group_by = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($limit)) {
                $common->limit($limit);
            }
            if (!empty($order_col) && !empty($order_by)) {
                $common->order_by($order_col, $order_by);
            }
            if (!empty($cond)) {
                $common->where($cond);
            }
            if (!empty($group_by)) {
                $common->group_by($group_by);
            }
            $res = $common->get($tbl)->result_array();
            //    echo  $common->last_query(); exit;
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 10. 
      GET RECORDS where_in
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getRecordsFullIn($database = NULL, $tbl = NULL, $cond = NULL, $cols = NULL, $limit = NULL, $order_col = NULL, $order_by = NULL, $group_by = NULL, $column = NULL, $value = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($limit)) {
                $common->limit($limit);
            }
            if (!empty($order_col) && !empty($order_by)) {
                $common->order_by($order_col, $order_by);
            }
            if (!empty($cond)) {
                $common->where($cond);
            }
            if (!empty($column) && !empty($value)) {
                $common->where_in($column, $value);
            }
            if (!empty($group_by)) {
                $common->group_by($group_by);
            }
            $res = $common->get($tbl)->result_array();
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 10. 
      GET RECORDS limit offset
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getRecordsByOffset($database = NULL, $tbl = NULL, $cond = NULL, $cols = NULL, $limit = NULL, $offset = NULL, $order_col = NULL, $order_by = NULL, $group_by = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($limit)) {
                $common->limit($limit, $offset);
            }
            if (!empty($order_col) && !empty($order_by)) {
                $common->order_by($order_col, $order_by);
            }
            if (!empty($cond)) {
                $common->where($cond);
            }
            if (!empty($group_by)) {
                $common->group_by($group_by);
            }
            $res = $common->get($tbl)->result_array();
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 11. 
      GET RECORDS IN
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getRecordsIn($database = NULL, $tbl = NULL, $cols = NULL, $column = NULL, $value = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($column) && !empty($value)) {
                $common->where_in($column, $value);
            }
            $res = $common->get($tbl)->result_array();
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 12. 
      GET RECORDS InWhere
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getRecordsInWhere($database = NULL, $tbl = NULL, $cols = NULL, $cond = NULL, $column = NULL, $value = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($cond)) {
                $common->where($cond);
            }
            if (!empty($column) && !empty($value)) {
                $common->where_in($column, $value);
            }
            $res = $common->get($tbl)->result_array();
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 13. 
      GET RECORDS Search By Like
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function searchByLike($database = NULL, $tbl = NULL, $column = NULL, $match = NULL, $cols = NULL, $cond = NULL, $limit = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            }
            if (!empty($limit)) {
                $common->limit($limit);
            }
            if (!empty($column) && !empty($match)) {
                $common->like($column, $match);
            }
            if (!empty($cond)) {
                $common->where($cond);
            }
            $res = $common->get($tbl)->result_array();
            return $res;
        } else {
            return FALSE;
        }
    }

    /* 14. 
      GET RECORD Count
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getRecordCount($database = NULL, $tbl = NULL, $cond = NULL) {
        $common = $this->load->database($database, TRUE);
        if (!empty($cond)) {
            $common->where($cond);
        }
        $res = $common->count_all_results($tbl);
        return $res;
    }

    /* 15. 
      GET LAST RECORD
      LOAD MODEL : $this->load->model('CommonModel');
     */

    public function getLastRecord($database = NULL, $tbl = NULL, $cols = NULL) {
        if (!empty($database) && !empty($tbl)) {
            $common = $this->load->database($database, TRUE);
            if (!empty($cols)) {
                $common->select($cols);
            } else {
                $common->select('*');
            }
            $common->from($tbl);
            $common->order_by('id', 'DESC');
            $common->limit('1');
            $get = $common->get();
            return $get->row_array();
        }
    }

    public function status($database = NULL, $tbl = NULL, $cols = NULL, $id = NULL) {
        $common = $this->load->database($database, TRUE);
        $common->select('*');
        $common->from($tbl);
        $common->where($cols, $id);
        $query = $common->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            // var_dump($data);
            if ($data['status'] == 1) {
                $row = [
                    'status' => 0
                ];
                $common->where($cols, $id);
                $common->update($tbl, $row);
            } else {
                $row = [
                    'status' => 1
                ];
                $common->where($cols, $id);
                $common->update($tbl, $row);
            }
        }
    }

    public function soft_delete($database = NULL, $tbl = NULL, $cols = NULL, $id = NULL) {
        $common = $this->load->database($database, TRUE);
        $row = [
            'status' => 2
        ];
        $common->where($cols, $id);
        $common->update($tbl, $row);
    }
}
