<?php
class Richestpeople
{
    public function updateRichestPeople($post)
    {
        $this->db->query("UPDATE `richestpeople`
                          SET Naam = :naam,
                          WHERE Id = :id");
        $this->db->bind(':naam', $post['naam'], PDO::PARAM_STR);
        $this->db->bind(':vermoge', $post['vermoge'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', $post['leeftijd'], PDO::PARAM_STR);
        $this->db->bind(':bedrijf', $post['bedrijf'], PDO::PARAM_INT);
        $this->db->bind(':delete', $post['delete'], PDO::PARAM_INT);

        $this->db->execute();
    }
    public function deleteCountry($Id)
    {
        $this->db->query("DELETE FROM Country WHERE Id = :Id");
        $this->db->bind(':Id', $Id);
        return $this->db->execute();
    }
}
