<?php


class Users_model extends CI_model
{
    public function create_users($data)
    {
        $this->db->insert('users', $data);
    }

    public function update_users($data, $id)
    {
        $this->where(['id' => $id]);
        $this->db->update('users', $data);
    }

    public function delete_users(int $id) : void
    {
        $this->where(['id' => $id]);
        $this->db->delete('users');
    }

    public function login_user($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
}
